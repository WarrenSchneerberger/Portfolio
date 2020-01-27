<?php
session_start();
include("menu.php");
include("./include/retour.php");
$getid = intval($_GET['forum_id']);

$bdd = new PDO('mysql:host=localhost;dbname=schneebergerw', 'schneebergerw', 'KiYW3T=geyxA');
$requser = $bdd->prepare('SELECT * FROM forum_msg WHERE  msg_id= ? AND forum_id= ?');
echo('<div>');
for($i=1;$i<25;$i++){
    $requser->execute(array($i,$getid));
    $valide = $requser->rowCount();
    $msg = $requser->fetch();
    if($valide!=0) {
        echo('<table border="1" >');
        echo('<tr><td >Message</td><td>Auteur</td></tr>');
        echo('<tr><td >'.$msg['msg_text'].'</td><td>'.$msg['msg_createur'].'</td></tr>');
        echo('</table><br>');
    }
}
echo('</div>');
?>
<form method="POST" action="new_msg.php<?php echo('?id='.$_SESSION['id'].'&forum_id='.$_GET['forum_id'])?>">
    <input type="text" name="msg" placeholder="Message" />
    <input type="submit" name="Envoyer"/>
</form>
</html>