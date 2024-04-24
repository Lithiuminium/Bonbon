<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Boutique de bonbons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <!--La navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Haribo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Les Bonbons</a>
        </li>
      </ul>
      <form action="ajout.php">
      <button class="btn btn-outline-dark me-3" type="submit">Ajouter un produit</button>
      </form>
      <form class="d-flex" role="search" method="POST" action="recherche.php">
        <input class="form-control me-2" name="produit" type="search" placeholder="rechercher un produit" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">rechercher</button>
      </form>
    </div>
  </div>
</nav>
  <?php
include "config.php";
$bdd = connect();

//requête
$recherche = strtoupper($_POST['produit']);
$sql = "select * from produit where upper(nom)LIKE '%$recherche%'" ;

//execution de la requête
$resultat = $bdd->query($sql);

//affichage des résultats dans un objet
while ($produit = $resultat->fetch(PDO::FETCH_OBJ)){
  ?>
  <div class="card ms-4 mt-3" style="width: 14rem;">
  <img src= "images/<?php echo $produit->photo ?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit->nom ?></h5>
    <p class="card-text"><?php echo $produit->prix  ?></p>
  
  </div>
</div>
    
<?php
  }
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

