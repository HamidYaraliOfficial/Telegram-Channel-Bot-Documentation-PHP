<?php
// Developed by Hamid Yarali
// GitHub: https://github.com/HamidYaraliOfficial
// Instagram: https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==
// Telegram: @Hamid_Yarali

# ======================================= Include To File
require "config.php";
# ======================================= Ban Member
if ( $user ["ban"] == "yes") exit();
# ======================================= Close Error Log
error_reporting ( 0 );
ini_set ( "log_errors","Off" );
# ======================================= START BOT
switch ( $text ){

case "/start":
SendMsg ($chat_id,"✔️",'HTML',$fy);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "⭕":
SendMsg ($chat_id,"⏳ به ربات تستی خوش آمدید\n\n$time",'HTML',$fy);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "📦 ارسال پست":
if($user["channel"] == "not"){
SendMsg ($chat_id,"⭕ ابتدا چنل خود را تنظیم کنید !",'HTML',null);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
} else
SendMsg ($chat_id,"📦 لطفا مدیا ، پست خود را ارسال نمایید «\n\n✔️ شما میتوانید هر چیزی ارسال نمایید !",'HTML',$back_fy);
$user["step"] = "send";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "🔐 تنظیم کانال":
if($user["channel"] != "not"){
SendMsg ($chat_id,"⭕ شما از قبل کانال خود را تنظیم کرده اید !",'HTML',null);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
} else
SendMsg ($chat_id,"🔐 لطفا آیدی کانال را بدون @ ارسال کنید !",'HTML',$back_fy);
$user["step"] = "set";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "🗑️ حذف کانال":
if($user["channel"] == "not"){
SendMsg ($chat_id,"⭕ شما هنوز هیچ کانالی ندارید !",'HTML',null);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
} else
SendMsg ($chat_id,"✔️ کانال شما با موفقیت حذف شد !",'HTML',null);
$user["channel"] = "not";
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "👤 حساب کاربری":
if($user["channel"] == "not"){$channel_status="✖️ ندارید";}else{$channel_status="@{$user['channel']}";}
if($user["channel"] != "not"){$almem = Source_Fy ('getChatMembersCount',['chat_id'=>'@'.$user["channel"]])->result;}else{$almem = "✖️ ندارید";}
$fy1 = $user["log_time"]; $fy2 = $user["log_date"];
SendMsg ($chat_id,"🔐 اطلاعات کامل حساب کاربری شما :\n\n📕 نام کاربری : $first_name\n㊙️ یوزرنیم : @$username\n🔑 آیدی عددی : $from_id\n📣 کانال شما : $channel_status\n👥 تعداد اعضا کانال : $almem\n⏰ ساعت عضویت : $fy1\n📆 تاریخ عضویت : $fy2",'HTML',null);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "🧾 اطلاعات کانال":
if($user["channel"] == "not"){
SendMsg ($chat_id,"⭕ شما هنوز هیچ کانالی ندارید !",'HTML',null);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
} else
SendMsg ($chat_id,"⏳ اطلاعات کامل کانال شما :\n\n📕 نام کانال : $prof_ch\n🪙 آیدی عددی کانال : $id_ch\n\n🧾 توضیحات کانال\n\n$tozi_ch",'HTML',null);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "📕":
SendMsg ($chat_id,"✔️ این ربات ارسال به کانال پیشرفته میباشد !\n\n⏳ ابتدا کانال خود را از منوی اصلی تنظیم کنید\n\n📦 شما میتوانید هرگونه مدیا برای کانالتون ارسال کنید !\n\n🛍️ این ربات کاملا رایگان میباشد\n\n🔐 شما میتوانید از بخش اطلاعات کانال ، اطلاعات کامل کانال خود را دریافت نمایید\n\n🪙 کلی آپدیت در راه میباشد ...\n\n📣 @$channel",'HTML',null);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "⚖️":
SendMsg ($chat_id,"⭕ سعی نکنید موقع ثبت کانال ، از کانال دیگران استفاده کنید !\n\n🔐 در صورت ارسال کد #مخرب حساب شما مسدود خواهد شد !\n\n📮 در بخش پشتیبانی ربات از ارسال حرف های توهین آمیز خودداری کنید !\n\n✔️ پشتیبانی ما همیشه پاسخگو کاربران عزیز میباشد !\n\n📣 @$channel",'HTML',null);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "📮":
SendMsg ($chat_id,"📮 پیام خود را برای ما ارسال نمایید •\n\n✔️ پیام شما میتواند حاوی ، عکس ، فیلم ، ویدیو ، و ... باشد !",'HTML',$back_fy);
$user["step"] = "sup";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

}
# ======================================= Switch STEP
switch ($step){

case "send":
if($okfy == 'administrator'){
SendMsg ($chat_id,"✔️ پست شما با موفقیت ارسال شد !\n\n📣 کانال ارسالی : @$channels",'HTML',$fy);
Source_Fy ('copyMessage', ['chat_id'=> $id_ch, 'from_chat_id'=> $chat_id,'message_id'=> $message_id,'reply_to_message_id'=>null]);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
} else
SendMsg ($chat_id,"✖️ ربات در کانال شما ادمین نمیباشد !",'HTML',$fy);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "set":
$fy = Source_Fy ('getChat', ['chat_id' => '@' . $text]);
if ($fy->result->type == 'channel'){
SendMsg ($chat_id,"✔️ کانال شما با موفقیت تنظیم شد !",'HTML',$fy);
$user["channel"] = $text;
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
} else
SendMsg ($chat_id,"✖️ آیدی ارسالی شما نامعتبر میباشد !",'HTML',$fy);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
break;

case "sup":
$key = json_encode(['inline_keyboard'=>[
[['text'=>"➕ پروفایل",'url'=>"t.me/$username"]],
[['text'=>"✅ آزاد کردن",'callback_data'=>"Fy2/$from_id"],['text'=>"⛔ مسدود کردن",'callback_data'=>"Fy/$from_id"]],
[['text'=>"📮 ارسال پیام",'callback_data'=>"send/$from_id"]],
]]);
SendMsg ($chat_id,"✅ پیام شما با موفقیت به واحد پشتیبانی ارسال شد",'HTML',$fy);
foreach ( $setting ["admin"] as $admin ){
Source_Fy ('copyMessage', ['chat_id'=> $admin, 'from_chat_id'=> $chat_id,'message_id'=> $message_id,'reply_to_message_id'=>null,'reply_markup'=>$key]);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
exit;
}break;

}

if ( strpos ($data,"send/") !== false ){
$mem = substr ( $data , 5 );
Save ("data/mem.txt",$mem);
Callback ($callid,"📕 مدیا خود را جهت پاسخ ارسال کنید !");
$user["step"] = "send_mem";
SaveJson("data/users/$fromid.json",$user);
}

else if ( $step == "send_mem" and $text != "/start"){
SendMsg ($chat_id,"🚀 پاسخ شما برای فرد با موفقیت ارسال شد !",'HTML',null);
@$mem = file_get_contents ("data/mem.txt");
Source_Fy ('copyMessage', ['chat_id'=> $mem, 'from_chat_id'=> $chat_id,'message_id'=> $message_id,'reply_to_message_id'=>null,'reply_markup'=>null]);
$user["step"] = "none";
SaveJson("data/users/$from_id.json",$user);
Unlink ("data/mem.txt");
}

else if ( strpos ( $data,"Fy/") !== false ){
@$mem = substr ($data,3);
Callback ($callid,"⛔ کاربر مورد نظر با موفقیت بلاک شد !");
SendMsg ($mem,"⛔ حساب شما توسط مدیریت #مسدود شد !",'HTML',null);
$member = json_decode(file_get_contents("data/users/$mem.json"), 1);
$member["ban"] = "yes";
SaveJson("data/users/$mem.json",$member);
}

else if ( strpos ( $data,"Fy2/") !== false ){
@$mem = substr ($data,4);
Callback ($callid,"✅ کاربر مورد نظر با موفقیت #آزاد شد !");
SendMsg ($mem,"✅ حساب شما توسط مدیریت #آزاد شد !",'HTML',null);
$member = json_decode(file_get_contents("data/users/$mem.json"), 1);
$member["ban"] = "not";
SaveJson("data/users/$mem.json",$member);
}
# ======================================= Close PHP
?>