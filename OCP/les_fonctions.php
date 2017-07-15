<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href=""/>
        <title>Cours OpenClassRooms</title>
    </head>
    <body>
        <div>
            <p>Cette page contient du code HTML<br/>Voici quelques petits test: </p>
            <ul>
                <li style="color: blue">element 1</li>
                <li style="color: red">element 2</li>
                <li style="color: green">element 3</li>
                <li style="color: gray">element 4</li>
            </ul>
            <div style="border: 2px solid black; margin: auto; height: 460px; width: 70%; padding: 20px; color: red;">
                <?php
                    $ma_chaine = "Hello je suis une phrase ecrite en PHP";
                    echo $ma_chaine;
                    echo "</br>";
                    $position = strlen($ma_chaine);
                    echo 'Cette phrase contient : '.$position.' caracteres';
                    echo "</br></br/>";
                    $chaine2 = str_replace('PHP', 'HTML', $ma_chaine);
                    echo $chaine2;
                    $chaine2 = str_shuffle($chaine2);
                    echo '</br>'.$chaine2.'</br>';
                    echo date('h:i:s');
                    echo "</br>";
                    echo date('d/m/Y');
                    echo "</br>";
                    echo 'Nous sommes le: '.date('d/m/y').' et il est '.date('H:i').'</br>';
                
                ?>
            </div>
            <div>
                <?php
                    function direBonjour($nom){
                        echo 'Bonjour '.$nom.' !</br>';
                    }
                    direBonjour('Marie');
                    direBonjour('Julien');
                    direBonjour('Valerie');
                    direBonjour('Myriam');
                ?>
            </div>
        
        
        </div>
    </body>
</html>