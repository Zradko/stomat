<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 12.11.2020
 * Time: 22:49
 */


// HTTPS
define('SERVER', 'http://st.com/');

define('DIR_SYSTEM', 'D:/ServerNew/OpenServer/domains/st.com/system/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'stomat1');
define('DB_PASSWORD', 'stomat1');
define('DB_DATABASE', 'stomat1');
define('DB_PORT', '3306');
define('DB_PREFIX', 'if_');