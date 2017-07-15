<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    
    <div>
    
    
    <?php
    if(isset($_POST["button1"]))
    {
        echo 'Nom: '.$_POST["txt_nom"];
        echo "<br/>";
        echo 'Password'.$_POST["modpas"];
    
    }

    if(isset($_POST["button2"]))
    {
        echo 'DEscription: '.$_POST["description"];
        echo "<br/>";
        foreach($_POST["loisir"] as $l)
        {
            echo $l;
            echo " ";
        }
    }

    ?>
    </div>
    </body>


</html>


