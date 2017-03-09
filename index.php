<?php
require_once './vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('./');
//$twig = new Twig_Environment($loader,['cache'=>'./cache']);
$twig = new Twig_Environment($loader,['debug'=> true]);
if(isset($_GET['type'])){
    $type = 'html/'. $_GET['type'].'.html';
}elseif (isset($_GET['path'])){
    $type = 'html/path/'.$_GET['path'].'.html';
}
else{
    $type = 'html/index.html';
}


if(!file_exists($type)){
    $type = 'html/index.html';
}

$twig->display($type,['name' => 'yangzie']);
