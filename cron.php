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
print_r($outmarcas2);
echo '<hr>';
foreach ($outmarcas2 as $out) {
    foreach ($out as $ou) {
        print_r($ou);
    }
}
?>


