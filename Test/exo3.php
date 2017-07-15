<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 3</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <h1>Calcule sur les variables</h1>
        <?php
            $TVA = 0.206;
            $Prix = 150;
            $nombre = 10;
            $HT = $Prix * $nombre;
            $TTC = $Prix + ($TVA * $nombre);
            echo 'le prix hors taxe est : <span>'.$HT.'</span> gourdes </br>';
            echo 'Le prix avec la taxe incluse est: <span>'.$TTC.'</span> gourdes <br/>';
            echo "<br/><br/>";
            echo 'Le type de la variable TVA est : '.gettype($TVA).'<br/>';
            echo 'Le type de la variable Prix est : '.gettype($Prix).'<br/>';
            echo 'Le type de la variable TTC est : '.gettype($TTC).'<br/>';
            echo 'Le type de la variable HT est : '.gettype($HT).'<br/>';
        
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