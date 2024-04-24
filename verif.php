<?php
session_start(); 
require "config.php"; 
$bdd = connect();
$login = $_POST['admin'];
$mdp = md5($_POST['login']);
$sql="select * from admin where login = '$login' AND mdp = '$mdp'"; 
echo $sql ;
$resultat=$bdd->query($sql);

if($nb_lignes=$resultat->rowCount()==0){
 
    header("Location:non_connect.php");
}
else{
    $_SESSION["autorisation"]="OK";
    header("Location:oui_connect.php");
  
}
?>
