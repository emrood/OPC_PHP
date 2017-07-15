<!DOCTYPE>
<html>
    <head>
        <title>Tableau en php</title>
    </head>
    <body>
        <?php
            //tableau1
            $tab = array('matyas', 'mathier', 'junior', 'pierre', 'valeur');
            //tableau2
            $tab1[0] = "Bouboul";
            $tab1[1] = "Zebede";
            print_r($tab);
            echo "<br/>Affichage deuxieme element<br/>";
            print_r($tab[1]);
            //tableau associative
            echo "<br/><br/>Tableau associative<br/><br/>";
            $tableau = array('nom'=>'Noel', 'prenom'=>'Emmanuel');
            print_r($tableau);
            echo "<br/>///////////////////////////////////////////<br/>";
            foreach($tab as $val)
            {
                echo $val."</br>";
            }
            echo "<br/>///////////////////////////////////////////<br/><br/>";
            echo "Fonction foreach avec tableau associative <br/><br/>";
            foreach($tableau as $cle=>$val)
            {
                echo $cle." : ".$val."<br/>";
            }
                
        ?>
    
    
    </body>

</html>