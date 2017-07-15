<!DOCTYPE>
<html>
    <head>
        <title>Tableau en php</title>
    </head>
    <body>
        <div id="master">
            <form action="form.php" method="post">
                <label for="pseudo">Nom : </label> <input type="text" name="txt_nom" id="pseudo" placeholder="Entrez votre nom"/>
                <label for="Modpas">Password : </label> <input type="password" name="modpas" id="modpas" />
                <input type="submit" name="boutton1" value="Envoyer"/>
                <br/><br/>
                
                
            </form>
            <form action="form.php" method="post">
                <h5>Description</h5>
                <textarea rows=5 cols=40 name="description"> </textarea>
                <br/>
                <label for="loisir">Choisissez: </label>
                <input type="checkbox" name="loisir[]" value="sport"/>Sport
                <input type="checkbox" name="loisir[]" value="cinema"/>cinema
                <input type="checkbox" name="loisir[]" value="lecture"/>lecture
                <input type="checkbox" name="loisir[]" value="sex"/>sex
                <br/><br/>
                <span>SEX: </span>Masculin<input type="radio" checked name="sexe1" value="M"/>  Feminin<input type="radio" name="sexe1" value="F"/>
                <br/><br/>
                <select name="nationalite">
                    <option>USA</option>
                    <option>Haiti</option>
                    <option>Mexique</option>
                    <option>Honduras</option>
                    <option>Canada</option>
                </select>
                <select name="annee">
                    <?php
                        for($i=1894; $i<=2017; $i++){
                            echo '<option>'.$i.'</option>';
                        }
    
                    ?>
                </select>
                <br/>
                <input type="submit" name="button2" value="envoyer"/>
                
            </form>
        </div>
        <div id="info">
            <?php
                if(isset($_POST["boutton1"]))
                    {
                        echo 'Nom: '.$_POST["txt_nom"];
                        echo "<br/>";
                        echo 'Password: '.$_POST["modpas"];
    
                    }
                ?>
        
        </div>
        <div id="info2">
            <?php

                if(isset($_POST["button2"]))
                    {
                        echo 'Description: '.$_POST["description"];
                        echo "<br/>";
                        foreach($_POST["loisir"] as $l)
                        {
                            echo $l;
                            echo " ";
                        }
                        echo "<br/>";
                        echo 'sexe: '.$_POST["sexe1"];
                        echo "<br/>";
                        echo 'Nationalite: '.$_POST["nationalite"];
    
    
                    }

                ?>
        
        </div>
    </body>
    <style>
        body
        {
            
        }
        #info{
            width: 400px;
            height: 200px;
            margin: auto;
            border: 2px solid gray;
        }
        #info2{
           width: 400px;
            height: 200px;
            margin: auto;
            border: 2px solid red; 
        }
        #master
        {
            width: 800px;
            height: 300px;
            border: 4px dashed blue;
            padding: 20px;
            margin: auto;
        }
        input{
            margin-left: 5px;
        }
        label
        {
            margin-left: 15px;
        }
        
    </style>

</html>