<?php


//print_r($_GET['url']);
/*
/linux
\windows
*/

define("DS", DIRECTORY_SEPARATOR);
define("ROOT",realpath(dirname((__FILE__)).DS));
define("APP_PATH", ROOT."aplication".DS);

//echo ROOT;
require_once(APP_PATH. "Config.php");
require_once(APP_PATH. "Request.php");
require_once(APP_PATH. "Boostrap.php");
require_once(APP_PATH. "Controller.php");
require_once(APP_PATH. "Model.php");
require_once(APP_PATH. "View.php");
require_once(APP_PATH. "Database.php");

echo "<pre>";print_r(get_required_files());



?>