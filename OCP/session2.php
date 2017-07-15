<?php
    session_start();
    setcookie('Mateo', 'jean', time()+24*3600, null, null, false, true);
?>
<html>
    <head>
        <title>session2</title>
    </head>
    <body>
        <?php
        echo 'Quoi!!! encore vous '.$_SESSION['prenom'].', decidement :-(';
        echo "<br/>";
        $monfichier = fopen("hyj.txt", "r+");
        while(fgets($monfichier)){
            $ligne = fgets($monfichier);
            echo $ligne.'<br/>';
            
        }
        fclose($monfichier);    
        ?>
    
    </body>
</html>