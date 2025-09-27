<?php
# ======================================= TIME IR
date_default_timezone_set('Asia/Tehran');
$times = date('H:i:s');
$time1 = strtotime($times);
$time1 -= 3600;
$time = date('H:i:s', $time1);
$date = date('Y/m/d');
# ======================================= Config ++
define('AMIR_KEY',''); # توکن ربات
$admin = 1878954698; # آیدی عددی ادمین
$id_bot = ; # آیدی عددی ربات
$channel = "Source_Fy"; # یوزرنیم کانال جوین اجباری
# ======================================= Close Error Log
error_reporting ( 0 );
ini_set ( "log_errors","Off" );
# ======================================= Function Connect Bot To Telegram
function Source_Fy ($method,$dats=[]){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.AMIR_KEY.'/'.$method);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$dats);
return json_decode(curl_exec($ch));}
# ======================================= Functions ++
function SendMsg ($ChatID,$Msg,$mode,$key){
Source_Fy ('sendMessage',[
'chat_id'=>$ChatID,
'text'=>$Msg,
'parse_mode'=>$mode,
'reply_markup'=>$key
]);
}

function SaveJson ($file,$data){
$new_data = json_encode($data,true);
file_put_contents($file,$new_data);
}

function Callback ($callback_query_id, $Msg, $show_alert = true){
Source_Fy ('AnswerCallbackQuery',[
'callback_query_id'=>$callback_query_id,
'text'=>$Msg,
'show_alert'=>$show_alert
]);
}

function Save ($name,$amir){
file_put_contents($name,$amir);
}
# ======================================= Virable
$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$message = $update->message;
$message_id = $message->message_id;
$text = $message->text;
$chat_id = $message->chat->id;
$tc = $message->chat->type;
$first_name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$user = json_decode(file_get_contents("data/users/$from_id.json"), 1);
$step = $user["step"];
} 

if(isset($update->callback_query)){
$callback_query = $update->callback_query;
$callid = $callback_query->id;
$data = $callback_query->data;
$fromid = $callback_query->from->id;
$msgid = $callback_query->message->message_id;
$chatid = $callback_query->message->chat->id;
$user = json_decode(file_get_contents("data/users/$fromid.json"), 1);
$step = $user["step"];
}

$setting = json_decode(file_get_contents("data/setting.json"), true);

$channels = $user["channel"];
# ======================================= Virable Channel
$check = json_decode(file_get_contents("https://api.telegram.org/bot".AMIR_KEY."/getChatMember?chat_id=@$channels&user_id=$id_bot"));
$okfy = $check->result->status;

$config_ch = json_decode(file_get_contents("https://api.telegram.org/bot".AMIR_KEY."/getChat?chat_id=@$channels"));
$prof_ch = $config_ch->result->title;
$usern_ch = $config_ch->result->username;
$id_ch = $config_ch->result->id;
$tozi_ch = $config_ch->result->description;
# ======================================= Keyboard Bot
$fy_amir = json_encode(['keyboard'=>[
[['text'=>"📦 ارسال پست"]],
[['text'=>"🔐 تنظیم کانال"],['text'=>"🗑️ حذف کانال"]],
[['text'=>"🧾 اطلاعات کانال"],['text'=>"👤 حساب کاربری"]],
[['text'=>"📕"],['text'=>"📮"],['text'=>"⚖️"]],
],'resize_keyboard'=>true,'input_field_placeholder'=>"Create Button Fy",]);

$panel_fy = json_encode(['keyboard'=>[
[['text'=>"🧾 آمار ربات"]],
[['text'=>"⭕"]],
],'resize_keyboard'=>true,'input_field_placeholder'=>"Create Button Fy",]);

$back_fy = json_encode(['keyboard'=>[
[['text'=>"⭕"]],
],'resize_keyboard'=>true,]);
# ======================================= Create User Mem And Create Folder Mem
if( !is_dir ("data")) Mkdir ("data");
if( !is_dir ("data/users")) Mkdir ("data/users");

if ( !file_exists ("data/users/$from_id.json")){
$user ["step"] = "none";
$user ["channel"] = "not";
$user ["channel_id"] = "null";
$user ["ban"] = "not";
$user ["log_time"] = $time;
$user ["log_date"] = $date;
SaveJson("data/users/$from_id.json",$user);
}

if ( !file_exists ("data/setting.json")){
$setting ["all_admin"] = 0;
$setting ["all_channel"] = 0;
$setting ["all_block"] = 0;
$setting ["all_channel"] [] = $channel;
$setting ["admin"] [] = $admin;
SaveJson("data/setting.json",$setting);
}
# ======================================= Close PHP
?>