<?php
include('./include/menu.php');
$bdd = new PDO('mysql:host=localhost;dbname=id10055581_test', 'id10055581_root', 'Charly100920');

$requser = $bdd->prepare("SELECT * FROM CNAM_article WHERE id_categories= ?");
$requser->execute(array(1));
$Allarticle = $requser->fetchAll();
echo('<style>
.art {
  background-color: lightgrey;
  padding: 25px;
  margin-top: 50px;
  margin-left: 150px;
  margin-right: 150px
}
</style>');
foreach ($Allarticle as $art1cle) {
    echo('<div class="art"><div id="'.$art1cle['id_article'].'" align="center"><h3>'.$art1cle['nom_article'].'</h3><hr/><p>&nbsp;</p></div>');
    echo('<div>'.$art1cle['text_article'].'</div></div><br>');
}

?>