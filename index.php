<?php
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./');

$twig = new Twig_Environment($loader,[
    'cache'=>'./cache'
]);


$type = $_GET['type'].'html';

if(file_exists('./html/'.$type)){

}else{
    $type = 'index.html';
}


echo $twig->display($type,['name' => 'yangzie']);