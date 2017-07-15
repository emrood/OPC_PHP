<!DOCTYPE html>
<html>
    <head>
        <title>sefi</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div>
            <a href="direbonjour.php?nom=Emmanuel&amp;prenom=Roodly&amp;repeter=8">Dis moi bonjour!</a>
        </div>
        <div>
            <form method="post" action="cible.php">
                <label for="pseudo">Ton pseudo: </label><input type="text" name="pseudo" placeholder="Entrer votre pseudo"/><br/>
                <label for="mot_de_passe">Mot de passe: </label><input id="pass" type="password" name="mot_de_passe"/><br/>
                <input type="submit" name="bouton_envoi" id="connect" value="connection"/>
            </form>
            <br/>
            <form method="post" action="cible2.php">
                <label for="message">Entrez votre message: </label><br/>
                <textarea name="message" rows="8" cols="40"> </textarea><br/>
                <select name="choix">
                    <option value="Haiti">Haiti</option>
                    <option value="France">France</option>
                    <option value="USA" selected="selected">USA</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Panama">Panama</option>
                </select>
                <input type="submit" id="envoyer" value="envoyer"/> 
            </form>
            <form method="post" action="cible3.php" enctype="multipart/form-data">
                <h5>Formulaire d'envoie de fichier</h5>
                <input type="file" name="monfichier" />
                <input type="submit" id="envoyer" name="envoyer" value="envoyer"/>
            </form>
        </div>
    </body>
    <style>
        div{
            width: 70%;
            height: 400px;
            border: 2px solid green;
            border-radius: 20px;
            margin: auto;
            padding: 10px;
        }
        input{
            border: none;
            border-bottom: 2px solid red;
            margin-left: 5%;
            border-radius: 4px;
        }
        form{
            border: 2px solid green;
            padding-left: 10px;
            width: 50%;
            padding-bottom: 10px;
        }
        #connect{
            border-radius: 20px;
            margin-top: 10px;
        }
        #envoyer{
            border-radius: 20px;
            margin-top: 10px;
        }
    </style>
</html>