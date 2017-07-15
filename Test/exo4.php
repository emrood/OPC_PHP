<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 4</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <h1>Utilisation de if</h1>
        <?php
            $prix_table = 150;
            $prix_armoire= 50;
            $nombre = 10;
            $total_armoire = $prix_armoire * $nombre;
            $total_table = $prix_table * $nombre;
            echo 'Le prix total des 10 armoires est : <span>'.$total_armoire.'</span> gourdes. <br/><br/>';
            if($prix_table > $prix_armoire){
                echo "Le prix de la table est superieur a celui de l'armoire.";
            }
            else{
                echo "Le prix de l'amoire est superieur a celui de la table.";
            }
                
        
        
        ?>
    
    
    </body>
    <style>
        body{
            font-size: 1.7em;
            font-family: sans-serif;
            color: dimgrey;
            margin-left: 50px;
        }
        span
        {
            color: red;
            font-weight: bold;
        }
    
    </style>
</html>