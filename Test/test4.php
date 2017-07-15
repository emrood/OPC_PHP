<!DOCTYPE>
<html>
    <head>
        <title>Tableau en php</title>
    </head>
    <body>
        <?php
            $tableau = array('Janvier'=>31, 'Fevrier'=>28, 'Mars'=>31, 'Avril'=>30, 'Mai'=>31, 'Juin'=>30, 'Juillet'=>31, 'Aout'=>31, 'Septembre'=>30, 'Octobre'=>31, 'Novembre'=>30, 'Decembre'=>31);
            
            foreach($tableau as $val)
            {
                echo $val." | ";
            }
            echo "<br/><br/>**********************************************<br/>";
            $tableau1 = array('Nom'=>'Noel', 'Prenom'=>'Emmanuel');
            foreach($tableau1 as $cle=>$valeur)
            {
                echo $cle." : ".$valeur."<br/>";
            }
            echo "<br/><br/>**********************************************<br/>";
            $tableau3 = array(1,2,3,4,5);
            echo "Le nombre d'element du tableau est: ".count($tableau3);
            echo "<br/><br/>**********************************************<br/>";
            echo "<table>";
            $i = 1;
            foreach($tableau as $cle=>$val)
            {
                echo '<tr><td>'.$cle.'</td><td>'.$i++.'</td><td>'.$val.'</td></tr>';
            }
            echo "<table/>";
                
        ?>
    
    
    </body>
    <style>
        table
        {
            border: 3px solid black;
            border-collapse: collapse;
        }
        td
        {
            border: 2px solid green;
            padding: 7px;
            
        }
    </style>

</html>