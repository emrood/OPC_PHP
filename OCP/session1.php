<?php
session_start();
$_SESSION['nom'] = "Jean";
$_SESSION['prenom'] = "Marcelin";
$_SESSION['age'] = 21;
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Session 1</title>
    </head>
    <body>
        <?php
            echo 'salut '.$_SESSION['nom'].', comment allez vous? ';
        ?>
        <a href="session2.php">Mon lien</a>
        
    </body>
</html>