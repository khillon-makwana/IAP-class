<?php
// Site Information
$conf['site_name'] = 'ICS Community';
$conf['site_url'] = 'http://localhost/IAP-class';
$conf['admin_email'] = 'admin@icsccommunity.com';

// Database Configuration
$conf['db_type'] = 'pdo';
$conf['db_host'] = 'localhost';
$conf['db_user'] = 'root';
$conf['db_pass'] = '';
$conf['db_name'] = 'IAP-class';

// Site Language
$conf['site_lang'] = 'en';

// Email Configuration
$conf['mail_type'] = 'smtp'; // Options: 'smtp' or 'mail'
$conf['smtp_host'] = 'smtp.gmail.com';
$conf['smtp_user'] = 'smtp_user@mail.com';
$conf['smtp_pass'] = 'secretpassword'; // Use App Password if 2FA is enabled
$conf['smtp_port'] = 465;
$conf['smtp_secure'] = 'ssl';