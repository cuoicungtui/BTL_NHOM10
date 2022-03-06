<?php

require "./Core/Database.php";
require "./Controllers/BaseController.php";
require "./Models/BaseModel.php";

$controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? 'Product')).'Controller';

$acctionName = $_REQUEST['acction'] ?? 'index';

require "./Controllers/${controllerName}.php";

$controllerObject = new $controllerName;
$controllerObject-> $acctionName();