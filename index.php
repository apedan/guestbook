<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 10/2/13
 * Time: 1:56 AM
 * To change this template use File | Settings | File Templates.
 */

require_once('vendor/autoload.php');
use GuestBook\GuestBookController;

$loader = new Twig_Loader_Filesystem('View');
$twig = new Twig_Environment($loader, array(
    'cache' => 'Cache',
));
$twig->clearCacheFiles();

$controller = new GuestBookController($twig);
$controller->indexAction();

//var_dump($_SERVER['REQUEST_URI']);
