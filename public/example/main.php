<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");

$key = "3cebf4f75819dbcc1e4c5681b207f717";//通讯密钥
$host = "../createOrder";

$sign = md5($_GET['payId'].$_GET['param'].$_GET['type'].$_GET['price'].$key);
$p = "payId=".$_GET['payId'].'&param='.$_GET['param'].'&type='.$_GET['type']."&price=".$_GET['price'].'&sign='.$sign.'&isHtml=1';

echo "<script>window.location.href = '".$host."?".$p."'</script>";

