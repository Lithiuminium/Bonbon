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
  <form action="recupajout.php" method="POST" class="w-25 mt-3 ms-3" enctype="multipart/form-data">
    <input class="form-control mb-2" type="text" placeholder="Nom Produit" aria-label="Default input " name ="nom">
    <input class="form-control" type="text" placeholder="Prix Produit" aria-label="Default input" name ="prix">
    <div>
    <label for="formFile" class="form-label">Choisir un fichier</label>
    <input class="form-control" type="file" id="formFile" name="fichier">
    <input type="submit" class="btn btn-primary mt-3" value="Enregistrer">

  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

