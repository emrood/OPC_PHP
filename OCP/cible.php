<?php
    if(isset($_POST['bouton_envoi'])){
        echo 'Bonjour '.htmlspecialchars($_POST['pseudo']).', comment allez-vous? <br/>';
        echo 'Vous vous porter surement bien '.strip_tags($_POST['pseudo']).'<br/>';
        echo '<br/> Si vous voulez changer de pseudo, <a href="cours7.php">Cliquez-ici</a>';
    }
?>