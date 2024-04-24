<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La boutique de bonbons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
 
  <?php 
    $id=$_POST["id"];
    $nom=$_POST["nom"];
    $prix=$_POST["prix"];
    $fichier=$_OST["fichier"];

  //connexion à la BDD
  require "config.php"; 
  $bdd = connect(); 
  try
  {
    //requête
    $sql = "update produit set nom=$nom , prix=$prix, photo=$fichier where id=$id";
  echo $sql ;

  //execution de la requête
  $resultat = $bdd-> exec($sql);

  //affichage d'un message

  echo "$resultat produit modifié" ;

}

catch (PDOException $e){
    echo "erreur dans la requête <br>". $e ->getMessage() ;
}
header("location:oui_connect.php")
  

  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>