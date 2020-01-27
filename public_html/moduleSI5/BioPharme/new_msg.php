<?php
session_start();

$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "schneebergerw";
$BDD['pass'] = "KiYW3T=geyxA";
$BDD['db'] = "schneebergerw";

$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
$space = ' ';

if(!mysqli_query($mysqli,"INSERT INTO forum_msg SET forum_id='".$_GET['forum_id']."',msg_text='".$_POST['msg']."',msg_createur='".$_SESSION['Nom']."'")){}
header("Location: msg.php?id=".$_SESSION['id']."&forum_id=".$_GET['forum_id']);

?>
