<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="" />
        <title>PHP</title>
    </head>
    <body>
        <?php
        session_start();
        
        ?>
        <header>
            <form action="test6.php" method="post">
                <label for="txt_nom">Nom: </label><input type="text" name="txt_nom" maxlength="40" place_holder="Jean"/>
                <br/>
                <label for="txt_prenom">Prenom: </label><input type="text" name="txt_prenom" maxlength="40" place_holder="Jean"/>
                <br/>
                <label for="txt_sexe">Sexe: </label> M<input type="radio" name="txt_sexe" maxlength="40" value="M" checked/>
                F<input type="radio" name="txt_sexe" maxlength="40" value="F" checked/>
                <br/>
                <input type="submit" name="button_sbt" value="Envoyer">
            
            </form>
            <form action="test6.php" method="post">
                <input type="search" name="txt_search" placeholder="Jean"/>
                <input type="submit" name="bt" value="search" />
            </form>
        </header>
        <section>
            <?php
              $Tableau = array(/*
                array('Nom'=>'Jean', 'Prenom'=>'Charles', 'sexe'=>'M'),
                array('Nom'=>'Miliace', 'Prenom'=>'Sovelino', 'sexe'=>'M'),
                array('Nom'=>'Machubudu', 'Prenom'=>'Fulmina', 'sexe'=>'M'),
                array('Nom'=>'NOIL', 'Prenom'=>'primoury', 'sexe'=>'M')*/);
            if(isset($_POST["button_sbt"])){
                $Tableau[0] = array('Nom'=>$_POST["txt_nom"], 'Prenom'=>$_POST["txt_prenom"], 'sexe'=>$_POST["txt_sexe"]);
            $_SESSION["personne"][] = $Tableau[0];
            //print_r($Tableau);
            $Tableau = $_SESSION["personne"];
            echo "<table border>";
            echo "<tr><th> Nom </th><th> Prenom </th> <th> sexe </th><tr>";
            for($i = 0; $i<sizeof($Tableau); $i++){
                echo '<tr><td>'.$Tableau[$i]['Nom'].'</td><td>'.$Tableau[$i]['Prenom'].'</td><td>'.$Tableau[$i]['sexe'].'</td><tr>';
            }
                
            echo "</table>";
            }
            if(isset($_POST["bt"])){
                $Tableau = array();
                $Tableau = $_SESSION["personne"];
                echo "<table border>";
                echo "<tr><th> Nom </th><th> Prenom </th> <th> sexe </th></tr>";
                for($i = 0; $i<sizeof($Tableau); $i++){
                    if($Tableau[$i]["Nom"] == $_POST["txt_search"]){
                        echo '<tr><td>'.$Tableau[$i]['Nom'].'</td><td>'.$Tableau[$i]['Prenom'].'</td><td>'.$Tableau[$i]['sexe'].'</td></tr>';
                    }
                echo "</table>";
            }
            }
            ?>
            
        
        </section>
        <style>
            header{
                margin-bottom: 30px;
            }
            form{
                line-height: 40px;
            }
            td{
                padding: 10px;
            }
            table{
                
            }
        </style>
    
    </body>
</html>