<?php
session_start();
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    include("menu.php");
    $bdd = new PDO('mysql:host=localhost;dbname=schneebergerw', 'schneebergerw', 'KiYW3T=geyxA');
    $requser = $bdd->prepare('SELECT * FROM medicament');
    $requser->execute();
    $userinfo = $requser->fetch();
    echo('<br><table align="center" border="1" >
        <tr><td>Nom</td><td width="500">Description</td><td width="500">Effet_positif</td><td width="500">Effet_negatif</td></tr>
        <tr><td> '.$userinfo['Nom'].'</td><td width="500">'.$userinfo['Description'].'</td><td width="500">'.$userinfo['Effet_positif'].'</td><td width="500">'.$userinfo['Effet_negatif'].'</td></tr>
        </table>');
}
else{
    include("menuoff.php");
    echo("Vous n'etes pas connecter!!!");
}

?>
</html>