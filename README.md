ci_facebook_php_sdk_v4
======================

簡易php sdk for facebook(CodeIgniter版本)

##第一步：
使用composer安裝facebook php sdk v4

在命令列，程式目錄底下 輸入
```
composer install
```

##第二步：
更新 config/facebook.php
```php
$config['facebook_app_id'] = 'xxxxxxxxxxxxxxxxxxx';
$config['facebook_api_secret'] = 'xxxxxxxxxxxxxxxxxxx';
```
以上輸入必要的app_id與secret


##第三步：
預設路徑為http://localhost/1003b_fans/fans
如要修改，變更libraries/lib_login.php

參考來源：https://github.com/appleboy/codeigniter-facebook-php-sdk-v4
