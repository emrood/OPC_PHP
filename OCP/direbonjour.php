<?php
    if(isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['repeter'])){
        $_GET['repeter'] = (int) $_GET['repeter'];
        if($_GET['repeter'] >= 1  and $_GET['repeter'] <= 15){
            for($i = 0; $i < $_GET['repeter']; $i++)
            {
                echo 'Bonjour '.$_GET['nom'].' !</br>';
                echo 'Comment allez-vous '.$_GET['prenom'].' ?</br>';
            }
        }
        else{
            echo 'Le nombre de repetition n\'est pas valide';
        }
    }
    else{
        echo 'Vous devez rendeignez un nom et un prenom';
    }
?>