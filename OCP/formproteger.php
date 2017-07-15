<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Connection</title>
    </head>
    <body>
        <div>
            <p>Veillez entrez le mot de passse afin de pouvoir vous connecter: </p>
            <form method="post" action="formproteger.php">
                <input type="password" name="modpas" id="modpas"/>
                <input type="submit" id="connection" name="connection" value="connection"/>
            </form>
            <div>
                <?php
                include("secret.php");
                ?>
            </div>
        </div>
    </body>
    <style>
        div{
            width: 400px;
            height: 150px;
            border: 4px dashed blue;
            margin:auto;
            margin-top: 50px;
            padding: 15px;
        }
        #modpas{
            border: none;
            border-bottom: 1px solid black;
        }
        #connection{
            border-radius: 5px;
            background: -webkit-linear-gradient(right,gray,grey);
        }
    </style>
</html>