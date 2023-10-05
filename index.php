<?php
require_once 'src/Core/Core.php';
require_once 'src/Controller/HomeController.php';
require_once 'src/Controller/ErroController.php';
require_once 'src/Controller/LoginController.php';


require_once 'src/Model/Login.php';

$temp = file_get_contents('src/Template/Login/index.html');


$core = new Core;
$core->start($_GET);

$saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{area_dinamica}}', $saida, $temp);

var_dump($saida);
echo $tplPronto;