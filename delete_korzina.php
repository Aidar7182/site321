<?
session_start();
include('data_base.php');


$del_korzina = $mysql->query("DELETE FROM `korzina`");
include('korzina.php');
?>