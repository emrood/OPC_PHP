<?php
   class bel_koneksyon
   {
     public function connect()
     {
        try
        {
           $con_pdo=new PDO("mysql:host=localhost; dbname=esih_db;",'root',''); 
           return $con_pdo;
        }
        catch(exeption $ex)
        {
            die("erreur de connexion: ".$ex->getmessage());
        }
        
     }
   }


?>