<?php
include('./include/menu.php');
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Galerie Photo</h5>
            <p class="card-text">Toute les photos exposer sur cette page on était pris par nous lors de la visite du musée</p>
        </div>
    
    <p></p>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
        <img src="http://btsio.org/2018/schneebergerw/CNAM/img/galerie/1.jpg" class="d-block w-100" alt="oui">
        </div>
        <?php
            for($i=2;$i<88;$i++){
            echo('<div class="carousel-item" data-interval="2000">
            <img src="http://btsio.org/2018/schneebergerw/CNAM/img/galerie/'.$i.'.jpg" class="d-block w-100">
            </div>');
            }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
</div>
<?php
include('./include/footer.php');
?>