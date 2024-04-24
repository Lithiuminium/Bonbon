<?php 
define("BDD", "bonbons2") ;

function connect() {
    try{
        $connect = new PDO ("mysql:host=localhost; dbname=".BDD, "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    }

    catch(PDOException $e){
        echo "le problème de connexion à la base de données <br>" . $e->getMessage();
    }
    return $connect;
}

?>