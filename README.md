# Telegram Channel Bot Documentation

## Persian (فارسی)

### معرفی پروژه
این پروژه یک ربات تلگرام پیشرفته برای مدیریت کانال است که با استفاده از PHP توسعه یافته است. این ربات امکاناتی مانند تنظیم کانال، ارسال پست به کانال، مدیریت کاربران، پشتیبانی و بررسی اطلاعات کانال را فراهم می‌کند. ربات برای کاربران و ادمین‌ها قابلیت‌های متفاوتی ارائه می‌دهد و از رابط کاربری ساده و کارآمد برخوردار است.

### ویژگی‌ها
- **تنظیم کانال**: امکان ثبت و حذف کانال توسط کاربر.
- **ارسال پست**: ارسال انواع مدیا (تصویر، ویدیو، متن و غیره) به کانال تنظیم‌شده.
- **مدیریت کاربران**: قابلیت بلاک و آنبلاک کاربران توسط ادمین.
- **پشتیبانی**: امکان ارسال پیام به تیم پشتیبانی و دریافت پاسخ.
- **اطلاعات کاربری و کانال**: نمایش جزئیات حساب کاربری و اطلاعات کانال مانند تعداد اعضا.
- **امنیت**: بررسی وضعیت ادمین ربات در کانال و جلوگیری از ثبت کانال‌های غیرمجاز.
- **رایگان**: این ربات به‌صورت کاملاً رایگان ارائه می‌شود.

### پیش‌نیازها
- PHP 7.4 یا بالاتر
- وب‌سرور (مانند Apache یا Nginx)
- دسترسی به API تلگرام و توکن معتبر ربات
- پوشه `data` با مجوز نوشتن برای ذخیره اطلاعات کاربران

### نصب و راه‌اندازی
1. فایل `bot.php` را در پوشه اصلی وب‌سرور خود قرار دهید.
2. فایل `config.php` را با تنظیمات API تلگرام و سایر متغیرهای موردنیاز پیکربندی کنید.
3. اطمینان حاصل کنید که پوشه `data` و زیرپوشه‌های آن (مانند `data/users`) دارای مجوز نوشتن (777) هستند.
4. ربات را با تنظیم وب‌هوک یا اجرای اسکریپت فعال کنید.

### ساختار فایل‌ها
- `bot.php`: فایل اصلی ربات که شامل منطق و عملکردهای اصلی است.
- `config.php`: فایل پیکربندی برای تنظیمات API و متغیرهای ربات.
- `data/users/`: پوشه‌ای برای ذخیره فایل‌های JSON اطلاعات کاربران.
- `data/mem.txt`: فایل موقت برای ذخیره آیدی کاربران در فرآیند پاسخ‌دهی.

### توسعه‌دهنده
توسعه‌یافته توسط حمید یارعلی  
- گیت‌هاب: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)  
- اینستاگرام: [hamidyaraliofficial](https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==)  
- تلگرام: [@Hamid_Yarali](https://t.me/Hamid_Yarali)

---

## English

### Project Overview
This project is an advanced Telegram bot designed for channel management, developed using PHP. It offers features such as channel setup, posting to channels, user management, support messaging, and channel information retrieval. The bot provides distinct functionalities for users and admins, with a simple and efficient interface.

### Features
- **Channel Setup**: Users can register or remove their Telegram channels.
- **Post Sending**: Send various media types (images, videos, text, etc.) to the configured channel.
- **User Management**: Admins can block or unblock users.
- **Support System**: Users can send messages to the support team and receive responses.
- **User and Channel Info**: Displays detailed user account and channel information, including member counts.
- **Security**: Verifies bot admin status in channels and prevents unauthorized channel registrations.
- **Free to Use**: The bot is completely free for all users.

### Requirements
- PHP 7.4 or higher
- Web server (e.g., Apache or Nginx)
- Access to Telegram API and a valid bot token
- Write permissions for the `data` directory to store user information

### Installation and Setup
1. Place the `bot.php` file in your web server’s root directory.
2. Configure the `config.php` file with Telegram API settings and other required variables.
3. Ensure the `data` directory and its subdirectories (e.g., `data/users`) have write permissions (777).
4. Activate the bot by setting up a webhook or running the script.

### File Structure
- `bot.php`: Main bot file containing core logic and functionalities.
- `config.php`: Configuration file for API settings and bot variables.
- `data/users/`: Directory for storing user information in JSON files.
- `data/mem.txt`: Temporary file for storing user IDs during the response process.

### Developer
Developed by Hamid Yarali  
- GitHub: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)  
- Instagram: [hamidyaraliofficial](https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==)  
- Telegram: [@Hamid_Yarali](https://t.me/Hamid_Yarali)

---

## Chinese (中文)

### 项目简介
该项目是一个使用 PHP 开发的 Telegram 频道管理机器人。它提供了频道设置、向频道发送帖子、用户管理、支持消息以及频道信息检索等功能。机器人为用户和管理员提供不同的功能，界面简单高效。

### 功能
- **频道设置**：用户可以注册或删除他们的 Telegram 频道。
- **发送帖子**：向配置的频道发送各种媒体（图片、视频、文本等）。
- **用户管理**：管理员可以屏蔽或解除屏蔽用户。
- **支持系统**：用户可以向支持团队发送消息并接收回复。
- **用户和频道信息**：显示用户账户和频道的详细信息，包括成员数量。
- **安全性**：验证机器人在频道中的管理员状态并防止未经授权的频道注册。
- **免费使用**：机器人完全免费提供给所有用户。

### 要求
- PHP 7.4 或更高版本
- 网络服务器（如 Apache 或 Nginx）
- Telegram API 访问权限和有效的机器人令牌
- `data` 目录的写入权限以存储用户信息

### 安装和设置
1. 将 `bot.php` 文件放置在网络服务器的根目录中。
2. 配置 `config.php` 文件，设置 Telegram API 和其他必需变量。
3. 确保 `data` 目录及其子目录（例如 `data/users`）具有写入权限（777）。
4. 通过设置 Webhook 或运行脚本激活机器人。

### 文件结构
- `bot.php`：包含核心逻辑和功能的主机器人文件。
- `config.php`：用于 API 设置和机器人变量的配置文件。
- `data/users/`：存储用户信息的 JSON 文件目录。
- `data/mem.txt`：用于响应过程中临时存储用户 ID 的文件。

### 开发者
由 Hamid Yarali 开发  
- GitHub: [HamidYaraliOfficial](https://github.com/HamidYaraliOfficial)  
- Instagram: [hamidyaraliofficial](https://www.instagram.com/hamidyaraliofficial?igsh=MWpxZjhhMHZuNnlpYQ==)  
- Telegram: [@Hamid_Yarali](https://t.me/Hamid_Yarali)