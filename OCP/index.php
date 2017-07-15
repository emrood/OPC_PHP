<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MApage morceler en PHP</title>
    </head>
    <body>
        <header>
            <?php include("menu.php") ?>
        </header>
        <div id="corps">
            <form method="post" action="cible3.php" enctype="multipart/form-data">
                <h5>Formulaire d'envoie de fichier</h5>
                <input type="file" name="fichier" />
                <input type="submit" name="envoyer" value="envoyer"/>
            </form>
        
        </div>
        <footer>
            <?php include("pied.php") ?>
        </footer>
    
    </body>
    <style>
        #corps{
            height: 600px;
            border: 2px solid red;
        }
        div{
            height: 600px;
        }
        #pied{
            border: 2px solid grenn;
        }
    </style>
</html>