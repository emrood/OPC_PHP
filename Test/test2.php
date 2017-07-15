<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8"/>
        <title>Test inv</title>
    </head>
    <body>
        <?php
            $chaine1 = "Je ne suis pas un hero. ";
            $chaine2 = "Cette phrase est ecrit en php";
            $chaine3 = $chaine1.$chaine2;
            echo $chaine3;
        ?>
        <br/>
        <?php
            echo "cette phase a: ".strlen($chaine3)." caracteres";
            //caractere en majuscule
        ?>
        <br/>
        <?php
            echo "Affichage de la phrase en majuscule: ".strtoupper($chaine3)."----- ".strtoupper("Et voila");
        ?>
        <br/>
        <?php
            echo strtolower($chaine2);
        ?>
        <br/>
        <?php
            echo ucfirst("enigmatique \n ");
            echo ucwords("allo la terre, comment allez vous? et votre journee? ");
            echo strstr($chaine3, "est");
            //remplacement
            echo "<br/>.".str_replace("hero","cretin",$chaine3);
            echo "<br/>".substr($chaine3, 5, 25);
            
        ?>
        
    </body>
</html>