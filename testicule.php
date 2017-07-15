<html>
    <head>
    
    </head>
    <body>
        <div>
            <form method="post" action=testicule.php>
                <input type="submit" value="Afficher" name="affichage">
            </form>
        </div>
        <div>
            <?php
                include('myii.php');
                if(isset($_POST['affichage'])){
                    $c = new Carnets();
                    $v = $c->connection();
                    $c->affichage($v);
                }   
            ?>
        </div>
        <style>
            tr{
                border: 1px solid red;
            }
        </style>
    
    </body>

</html>