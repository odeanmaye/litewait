<?php
echo "1";die();
$params = explode("/", trim($_SERVER['PATH_INFO']));
$page = $params[1];
include_once dirname(__DIR__) . 'Controllers/' . ucfirst($page) . 'Controller.php';

print_r($page);die();