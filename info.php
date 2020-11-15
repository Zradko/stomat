<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 15.11.2020
 * Time: 9:12
 */

foreach(PDO::getAvailableDrivers() as $driver) {
    echo $driver.'<br />';
}
echo '<br />';
echo '<br />';
echo '<br />';
phpinfo();
$database = 'localhost:C:\\OpenServer\\domains\\c336.ru\\1.FDB';
$user     = 'user';
$password = 'password';
$db = ibase_connect($database, $user, $password);

?>