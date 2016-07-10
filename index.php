<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
define('SITE_PATH', realpath(dirname(__FILE__)).'/');

use FragSeb\Controller\ErrorController;
use FragSeb\Controller\IndexController;
use Simple\Request;
use Simple\Router;

$start = microtime(true);

/**
 * ToDo:
 * - Router weiter ausbauen sodas man auch Routen definieren kann.
 * - Doctrine (ORM) integrieren.
 * - Contener implementieren.
 * -
 *
 *
 *
 *
 *
 */


require_once './bootstrap.php';

try {
    Router::route(new Request());
} catch (Exception $e) {
    $controller = new ErrorController();
    $controller->error($e->getMessage());
}
$end = microtime(true);
$laufzeit = round($end - $start, 4);

echo 'Laufzeit: '.$laufzeit.' Sekunden!';
