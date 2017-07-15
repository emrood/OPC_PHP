<?php
class Carnets
{
    private $Nom;
    private $Prenom;
    private $Adresse;
    private $Telephone;
    private $bdd;
    
    public function __construct()
    {
        
    }
    public function connection()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost; dbname=carnet','root','');
            return $bdd;
        }
        catch(exception $e)
        {
            die('Erreur connection: '.$e-getMessage());
        }
    }
    
    public function affichage($b)
    {
        try
        {
            $reponse = $b->query('SELECT * FROM `carnets`');
            echo '<table style= border: 2px solid black; border-collapse: collapse;>';
            echo '<tr><th>Nom</th><th>prenom</th><th>adresse</th><th>telephone</th></tr>';
            while($donnees = $reponse->fetch())
            {
                echo '<tr><td>'.$donnees[0].'</td>';
                echo '<td>'.$donnees[1].'</td>';
                echo '<td>'.$donnees[2].'</td>';
                echo '<td>'.$donnees[3].'</td></tr>';
            }
            echo "</table>";
        }
        catch(exception $e)
        {
            die('Erreur lecture'.$e-getMessage());
        }
    }
}
?>
<html>
    <style>
        td{
            border: 1px solid red;
        }
        table{
            border: 2px solid red;
            border-collapse: collapse;
        }
    </style>

</html>