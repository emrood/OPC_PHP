<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href=""/>
        <title><?php echo "il est: "; echo date('h:i:s'); ?></title>
    </head>
    <body>
        <div>
            <p>Cette page contient du code HTML<br/>
                <?php echo "Bonjour ! <br/>";
                echo date('d/m/Y h:i:s');
                echo "<br/>";
                echo rand(1, 10);
                echo "<br/> Cette phrase a ete ecrite \" entirement \" en php <br/>"
                ?>
                Voici quelques petits test: </p>
            <ul>
                <li style="color: blue">element 1</li>
                <li style="color: red">element 2</li>
                <li style="color: green">element 3</li>
                <li style="color: gray">element 4</li>
            </ul>
            <?php
                    $age = 15;
                if($age <= 12){
                    echo "<strong> Salut gamin bienvenue sur notre site </strong>";
                    $authaurization_entrer = "oui";
                }
                else{
                    echo "Ceci est un site pour enfant, vous n'avez rien a faire la";
                    $authaurization_entrer = "non";
                }
                echo '<br/>Autorisation d\'entrer: '.$authaurization_entrer;
                $repetition = 0;
                while ($repetition < 10)
                {
                    echo "<p>Je ne doit pas copier sur mon voisin</p>";
                    $repetition++;
                }
                $prenom = array('jean','Jacques', 'beaulieu', 'micheline','cataract');
                foreach($prenom as $element){
                    echo ' | '.$element.' | ';
                }
                echo '<br/>';
                $information = array('nom'=>'Jean', 'prenom'=>'Maseillant', 'date'=>'04/05/1987', 'ville'=>'Port-de-Paix');
                foreach($information as $element){
                    echo $element.'<br/>';
                }
                echo "<br/><br/>";
                echo "****************************MON TEST***************************<br/>";
                foreach($information as $cle => $element){
                    echo $cle.' => '.$element.'<br/>';
                }
                echo "***********************Fin Test***********************<br/>";
                echo '<pre>';
                print_r($information);
                echo '</pre>';
                if(array_key_exists('pays', $information)){
                    echo '<strong>Cette cle existe</strong>';
                }
                else{
                    echo 'Cette cle n\'existe pas';
                }
                echo "</br>";
                if(in_array('Maseillant', $information)){
                    $position = array_search('Maseillant', $information);
                    echo 'Maseillant se trouve dans la case: '.$position.'</br>';
                }
                else{
                    echo 'Maseillant ne se trouve pas dans le tableau';
                }
            ?>
        
        
        </div>
    </body>
</html>