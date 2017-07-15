<?php
if(isset($_FILES['fichier'])){
    if($_FILES['fichier']['error'] == 0){
        if($_FILES['fichier']['size'] <= 1000000 ){
            $info_fichier = pathinfo($_FILES['fichier']['name']);
            $extension = $info_fichier['extension'];
            $extension_auth = array('jpeg', 'png', 'jpg', 'gif');
            if(in_array($extension, $extension_auth)){
                move_uploaded_file($_FILES['fichier']['tmp_name'], 'upload/'.basename($_FILES['fichier']['name']));
                echo "L'envoie a ete effectue";
            }
            else{
                echo "Le format ne correspond pas";
            }
        }
        else{
            echo "Fichier trop lourd";
        }
    }
    else{
        echo "L'envoie comporte une erreur";
    }
}
else{
    echo "La variable n'existe pas";
}
?>