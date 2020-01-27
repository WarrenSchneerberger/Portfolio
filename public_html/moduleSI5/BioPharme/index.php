<?php
session_start();
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    include("menu.php");
}
else{
    include("menuoff.php");
}
?>

<body>
    <h1 align="center">Bienvenu sur BioPharme, le laboratoire qui changera votre vie!!!!</h1>
</body>
</html>