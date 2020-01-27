<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=schneebergerw', 'schneebergerw', 'KiYW3T=geyxA');

$requser = $bdd->prepare('SELECT * FROM forum_forum WHERE forum_id= ?');


if(isset($_GET['id']) AND $_GET['id'] > 0) {
include("menu.php");
echo('<div align="left">');
echo('<a href="nouveau_topic.php?id='.$_SESSION['id'].'"><input type="button" name="Nouveau_topic" value="Nouveau topic"/></a>');
echo('</div>');
echo('<table border="1" align="left"><tr><td width="200">Sujet</td><td width="500">Description</td><td width="60">Auteur</td></tr>');
for($i=1;$i<100;$i++){
    $requser->execute(array($i));
    $valide = $requser->rowCount();
    $forum = $requser->fetch();
    if($valide!=0) {
    echo('<tr><td><a href="msg.php?id='.$_SESSION['id'].'&forum_id='.$i.'">'.$forum['forum_name'].'</a></td><td>'.$forum['forum_desc'].'</td><td>'.$forum['auth_post'].'</td></tr>');
    }
}
echo('</table>');
?>

<?php
}
else{
    include("menuoff.php");
    echo("Vous n'etes pas connecter!!!");
}
?>
</html>