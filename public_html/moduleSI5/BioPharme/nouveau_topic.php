<?php
session_start();
include("menu.php");
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "schneebergerw";
$BDD['pass'] = "KiYW3T=geyxA";
$BDD['db'] = "schneebergerw";

$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(isset($_POST['Envoyer'])){
    if(!mysqli_query($mysqli,"INSERT INTO forum_forum SET forum_name='".$_POST['sujet']."',forum_desc='".$_POST['description']."',auth_post='".$_SESSION['Nom']."',id_membres='".$_SESSION['id']."'")){}
    header("Location: forum.php?id=".$_SESSION['id']);
}
?>
<form method="POST" action="nouveau_topic.php<?php echo('?id='.$_SESSION['id'])?>">
    <input type="text" name="sujet" placeholder="Le Sujet"/>
    <input type="text" name="description" placeholder="La description"/>
    <input type="submit" name="Envoyer"/>
</form>
</html>