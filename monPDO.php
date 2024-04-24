<?php
class monPDO{
    private const HOTE = "localhost";
    private const BDD = "bonbons";
    private const UTILISATEUR = "root";
    private const MDP="";

    private static $monPDOinstance=null;
    
    public static function getPDO(){
        if(is_null(self::$monPDOinstance)){
            try{
                $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
                    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXECPTION
                );
                $connexion = "mysql:host=".self::HOTE.";dbname=".self::BDD;
            self::$monPDOinstance = new PDO($connexion,self::UTILISATEUR,self::MDP,$options);
            
            }catch(PDOExecption $e){
                $message = " Erreur de connexion a la BDD".$e->$getMessage();
                die($message);
            }
        }
        return self::$monPDOinstance;
    }
}