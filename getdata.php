<?php

include 'connexion.php';
include 'message.php';

session_start();
if (empty($_SESSION["idusr"])) {
header("location:login.php");
}

$idr=$_SESSION["idR"];
$ids=$_SESSION["idusr"];

$message=isset($_REQUEST['message'])?$_REQUEST['message']:null;

$message1=new message($idr,$ids,$message);
$message1->insert();


$ctr=isset($_REQUEST["start"])?intval($_REQUEST["start"]):0;

$res=$message1->getMessages($ctr);
echo $res;