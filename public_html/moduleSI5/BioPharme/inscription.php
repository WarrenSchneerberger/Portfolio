<?php
include("menuoff.php");
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "schneebergerw";
$BDD['pass'] = "KiYW3T=geyxA";
$BDD['db'] = "schneebergerw";

$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
}
$AfficherFormulaire=1;
if(isset($_POST['Nom'],$_POST['mdp'])){
    if(empty($_POST['Nom'])){
        echo "Le champ Pseudo est vide.";
    } elseif(empty($_POST['mdp'])){
        echo "Le champ Mot de passe est vide.";
    } else {
        
        if(!mysqli_query($mysqli,"INSERT INTO membres SET Nom='".$_POST['Nom']."',Prenom='".$_POST['Prenom']."',
        Sexe='".$_POST['Sexe']."',Date_de_naissance='".$_POST['Date_de_naissance']."',Ville_de_naissance='".$_POST['Ville_de_naissance']."',
        Pays_de_naissance='".$_POST['Pays_de_naissance']."',Adresse='".$_POST['adresse']."',Ville='".$_POST['Ville']."',Code_postal='".$_POST['Code_postal']."',
        Pays='".$_POST['Pays']."',Email='".$_POST['mail']."', mdp='".md5($_POST['mdp'])."',essai_c='".$_POST['ec']."',essai_c_r='".$_POST['ecr']."',essai_p='".$_POST['ep']."',etude_c='".$_POST['etc']."',diagnostic_s='".$_POST['ds']."'")){

            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit avec succès!<br>";
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
    ?>
<div align="center">
<h2>Inscription</h2>
<br /><br />
<form method="POST" action="">
<table>
<tr>
    <td align="right"><label for="Nom">Nom :</label></td>
    <td><input type="text" placeholder="Votre Nom" id="Nom" name="Nom"/></td>
</tr>
<tr>
    <td align="right"><label for="Prenom">Prénom :</label></td>
    <td><input type="text" placeholder="Votre Prénom" id="Prenom" name="Prenom"/></td>
</tr>
<tr>
    <td align="right"><label for="Sexe">Sexe :</label></td>
    <td>M<input name="Sexe" type="radio" value="M"> F<input name="Sexe" type="radio" value="F"></td>
</tr>
<tr>
    <td align="right"><label for="Date_de_naissance">Date de naissance :</label></td>
    <td><input type="date" placeholder="Votre Date de Naissance" id="Date_de_naissance" name="Date_de_naissance"/></td>
</tr>
<tr>
    <td align="right"><label for="Ville_de_naissance">Ville de naissance :</label></td>
    <td><input type="text" placeholder="Votre Ville de Naissance" id="Ville_de_naissance" name="Ville_de_naissance"/></td>
</tr>
<tr>
    <td align="right"><label for="Pays_de_naissance">Pays de naissance :</label></td>
    <td><input type="text" placeholder="Votre Pays de Naissance" id="Pays_de_naissance" name="Pays_de_naissance"/></td>
</tr>
<tr>
    <td align="right"><label for="adresse">adresse :</label></td>
    <td><input type="text" placeholder="Votre adresse" id="adresse" name="adresse"/></td>
</tr>
<tr>
    <td align="right"><label for="Ville">Ville :</label></td>
    <td><input type="text" placeholder="Votre Ville" id="Ville" name="Ville"/></td>
</tr>
<tr>
    <td align="right"><label for="Code_postal">Code Postal :</label></td>
    <td><input type="text" placeholder="Votre Code postal" id="Code_postal" name="Code_postal"/></td>
</tr>
<tr>
    <td align="right"><label for="Pays">Pays :</label></td>
    <td><input type="text" placeholder="Votre Pays" id="Pays" name="Pays"/></td>
</tr>
<tr>
    <td align="right"><label for="mail">Mail :</label></td>
    <td><input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" /></td>
</tr>
<tr>
    <td align="right"><label for="mail2">Confirmation du mail :</label></td>
    <td><input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" /></td>
</tr>
<tr>
    <td align="right"><label for="mdp">Mot de passe :</label></td>
    <td><input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" /></td>
</tr>
<tr>
    <td align="right"><label for="mdp2">Confirmation du mot de passe :</label></td>
    <td><input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" /></td>
</tr>
<tr>
    <td align="right"><label for="ec">Essai clinique :</label></td>
    <td><input name="ec" type="checkbox" value="Participe"></td>
</tr>
<tr>
    <td align="right"><label for="ecr">Essai clinique rémunéré :</label></td>
    <td><input name="ecr" type="checkbox" value="Participe"></td>
</tr>    
<tr>
    <td align="right"><label for="ep">Essai pharmaceutique :</label></td>
    <td><input name="ep" type="checkbox" value="Participe"></td>
</tr>   
<tr>
    <td align="right"><label for="etc">Etude clinique :</label></td>
    <td><input name="etc" type="checkbox" value="Participe"></td>
</tr>   
<tr>
    <td align="right"><label for="ds">Diagnostic de santé :</label></td>
    <td><input name="ds" type="checkbox" value="Participe"></td>
</tr>
<tr>
    <td></td>
    <td align="center"><br /><input type="submit" name="forminscription" value="Je m'inscris" /></td>
</tr>
</table></form>
    <?php
}
?>
</div>
</body>
</html>