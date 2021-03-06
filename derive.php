<?php
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script rel="stylesheet" type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script rel="stylesheet" type="text/javascript" src="bootstrap-3.3.7-dist/js/npm.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
      var page = $(this).attr('href'); // Page cible
      var speed = 750; // Durée de l'animation (en ms)
      $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
      return false;
    });
  });
</script>
<head>
	<title>Classement des 10 meilleurs anime</title>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #0174DF; border-color: #0174DF;">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF">Notre liste<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="js-scrollTo" href="index.html#page-1">Attaque des Titans</a></li>
              <li><a class="js-scrollTo" href="index.html#page-2">Berserk</a></li>
              <li><a class="js-scrollTo" href="index.html#page-3">Death note</a></li>
              <li><a class="js-scrollTo" href="index.html#page-4">Erased</a></li>
              <li><a class="js-scrollTo" href="index.html#page-5">Hajime no Ippo</a></li>
              <li><a class="js-scrollTo" href="index.html#page-6">Hero Academia</a></li>
              <li><a class="js-scrollTo" href="index.html#page-7">Magi : Sinbad no Bouken</a></li>
              <li><a class="js-scrollTo" href="index.html#page-8">Nanatsu no Taizai</a></li>
              <li><a class="js-scrollTo" href="index.html#page-9">One Punch Man</a></li>
              <li><a class="js-scrollTo" href="index.html#page-0">Terra Formars</a></li>
            </ul>
          </li>
        </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="derive.html" style="color: #FFFFFF">Produits Dérivés</a></li>
   </ul>
 </div>
</nav>
<img src="img/baniere.jpg" class="img-responsive" id="baniere">

<h1 class="deriv">Les Dérivés</h1>
<div class="statues">
   <div class="row galerie">
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-haji.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Hajime no Hippo</h3>
            <p>Makunouchi Hippo et 5 grands adversaires</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-berserk.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Berserk</h3>
            <p>Guts utilisant son hand canon</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-eren.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Attaque des Titans</h3>
            <p>Eren et son équipement tridimensionnel</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-boku.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Boku no hero Academia</h3>
            <p>Tsuyu Asui accroupie sur un rocher</p>
          </div>
        </div>
      </div>
   </div>
   <div class="row galerie">
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-opm.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>One Punch Man</h3>
            <p>Saitama en version POP</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/fig-terra.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Terra Formars</h3>
            <p>Akari Hizamaru en version POP</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/fig-mikasa.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Attaque des titans</h3>
            <p>Mikasa en version POP</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-genos.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>One Punch Man</h3>
            <p>Genos en version POP</p>
          </div>
        </div>
      </div>
   </div>
   <div class="row galerie">
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-saitama.jpeg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>One Punch Man</h3>
            <p>Saitama et son célèbre PUNCH</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-riuk.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Death Note</h3>
            <p>Le dieu de la mort Riuk</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-sinbad.jpeg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Magi : Sinbad no bouken</h3>
            <p>Sinbad de pleins pied</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail bord_thumb">
          <img src="img/statue-meliodas.jpg" alt="figurine" class="figurine">
          <div class="caption">
            <h3>Nanatsu No Taizai</h3>
            <p>Meliodas et son épée</p>
          </div>
        </div>
      </div>
   </div>
</div>




</body>
<?php include('footer.php'); ?>
</html>