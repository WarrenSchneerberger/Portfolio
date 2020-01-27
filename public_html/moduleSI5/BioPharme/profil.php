<?php
session_start();
include("menu.php");
$bdd = new PDO('mysql:host=localhost;dbname=schneebergerw', 'schneebergerw', 'KiYW3T=geyxA');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['Nom'].' '.$userinfo['Prenom']; ?></h2>
         <br /><br />
         <table border="1">
         <tr><td width="20">Nom</td> <td><?php echo $userinfo['Nom']; ?></td></tr>

         <tr><td>Prénom</td> <td> <?php echo $userinfo['Prenom']; ?></td></tr>

         <tr><td>Mail</td> <td> <?php echo $userinfo['Email']; ?></td></tr>

         <tr><td>Adresse</td> <td> <?php echo $userinfo['Adresse']; ?></td></tr>

         <tr><td>Ville</td> <td> <?php echo $userinfo['Ville']; ?></td></tr>

         <tr><td>Code Postal</td> <td> <?php echo $userinfo['Code_postal']; ?></td></tr>

         <tr><td>Pays</td> <td> <?php echo $userinfo['Pays']; ?></td></tr>

         <tr><td>Essai clinique</td> <td> <?php echo $userinfo['essai_c']; ?></td></tr>

         <tr><td>Essai clinique rémunéré</td> <td> <?php echo $userinfo['essai_c_r']; ?></td></tr>

         <tr><td>Essai pharmaceutique</td> <td> <?php echo $userinfo['essai_p']; ?></td></tr>

         <tr><td>Etude clinique</td> <td> <?php echo $userinfo['etude_c']; ?></td></tr>

         <tr><td>Diagnostic de santé</td> <td> <?php echo $userinfo['diagnostic_s']; ?></td></tr>

         </table>
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="edition.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}
?>