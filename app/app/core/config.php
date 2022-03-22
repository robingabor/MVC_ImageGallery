<?php

/* website title */

define('WEBSITE_TITLE',"MVC Image Gallery");

/* protocal type http or https */
define('PROTOCAL','http');

/* root paths*/
/* we need to replace '\' to '/' in our path because windows gives us path with '\' but on the browser we need forward  slash */
/* $_SERVER['SERVER_NAME'] -> will give us localhost for now, but when we put on an actual server it won't be the case*/
/* __DIR__ -> gives us the absolute path of the file we are currently in*/
$path = str_replace("\\", "/", PROTOCAL. "://" . $_SERVER['SERVER_NAME'] . __DIR__ . "/");

/* we are almost good, finally lets replace the 'c:/xamp/htdocs/' part wich is equal with the $_SERVER['DOCUMENT_ROOT'] constant to an empty string */
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));

// echo ASSETS;

?>