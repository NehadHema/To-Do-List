<?php
namespace php\oop_project\To_Do_List\classes;
// use php\oop_project\To_Do_List\classes\Request;
// use php\oop_project\To_Do_List\classes\Session;
use php\oop_project\To_Do_List\classes\Validation\Validation;

require_once 'inc/connection.php';
require_once 'classes/Request.php';
require_once 'classes/Session.php';
require_once 'classes/Validation/Required.php';
require_once 'classes/Validation/Str.php';
require_once 'classes/Validation/Validation.php';

$request = new Request;
$session = new Session;

$validation = new Validation;


