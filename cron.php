<?php

//@AHGB
// Cron para pegar os dados do anymarket e jogar no banco mysql
require_once ('requires.php');
//processando marcas
$chmarcas = curl_init();
curl_setopt($chmarcas, CURLOPT_URL, $url . '/brands?gumgaToken=' . $token);
curl_setopt($chmarcas, CURLOPT_RETURNTRANSFER, true);
$outmarcas = curl_exec($chmarcas);
curl_close($chmarcas);
$outmarcas2 = json_decode($outmarcas, true);
var_dump($outmarcas2);
?>


