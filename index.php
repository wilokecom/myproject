<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

define('ASBPATH', dirname(__FILE__));
define('DS', '/');
var_export($_GET);die;
require_once "./src/Core/Bootstrap.php";
