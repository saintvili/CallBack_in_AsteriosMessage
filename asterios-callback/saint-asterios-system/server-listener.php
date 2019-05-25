<?php include_once("config.php");
$url = $config['protocol_ssl'].'://'.$_SERVER['HTTP_HOST'].'/asterios-callback/saint-asterios-system/callback-srv.php?text='.$_GET['telephone'];
$str = file_get_contents($url);
echo "Messenge Send";
$redicet = $_SERVER['HTTP_REFERER'];
@header ("Location: $redicet");
?>