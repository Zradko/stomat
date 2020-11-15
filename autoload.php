<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 15.11.2020
 * Time: 8:34
 */
namespace ifpr;
require_once 'config.php';



class autoload
{

    function __construct()
    {
        $this->getDirContents(DIR_TEMPLATE);
          $this->getDirContents(DIR_DATA);
    }

    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                $results[] = $path;
                require_once $path;
            } else if ($value != "." && $value != "..") {
                getDirContents($path, $results);
                $results[] = $path;
                require_once  $path;
            }
        }

        return $results;
    }
}