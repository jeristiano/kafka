<?php
/**
 * Created by PhpStorm.
 * User: JeremyK
 * Date: 2017/11/02
 * Time: 13:42
 */
include "Buffon/RegisterErrorHandler.class.php";
define('DEBUG_ERROR',0);
define('ROOT_PATH',dirname(__FILE__));
RegisterErrorHandler::register();
RegisterErrorHandler::all();
