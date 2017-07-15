<?php

    require_once('bel_koneksyon.php.inc');
    
   class cls_domaine
{
    public function Insert($Libelle_Domaine)
    {
        try
        {
            $cls_conn = new bel_koneksyon();
            $con = $cls_conn->connect();
            
            $requet = $con->prepare("INSERT INTO `domaine`(`Libelle_Domaine`) VALUES (:domaine)");
            $requet->bindParam(':domaine',$Libelle_Domaine);
            
            return $requet->execute();
        }
        catch(exeption $ex)
        {
            die("Erreur d'Insertion: ".$ex->getmessage());
        }
    }
    
    public function Select()
    {
       try
        {
            $cls_conn = new bel_koneksyon();
            $con = $cls_conn->connect();
            
            $requete = $con->prepare("SELECT * FROM `domaine`");
           
            $requete->execute(); 
            
            return $requete->fetchAll();
        }
        catch(exeption $ex)
        {
            die("Erreur de Selection: ".$ex->getmessage());
        } 
    }
    
    public function Update($Code_Domaine,$Libelle_Domaine)
    {
        try
        {
            
        }
        catch(exeption $ex)
        {
            die("Erreur de Modification: ".$ex->getmessage());
        }
    }
    
    public function Delete($Code_Domaine)
    {
      try
        {
            
        }
        catch(exeption $ex)
        {
            die("Erreur de Suppression: ".$ex->getmessage());
        }  
    }
    
}

?>