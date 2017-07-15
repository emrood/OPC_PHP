<?php
if(isset($_POST['connection']))
{
    if($_POST['modpas'] == 'kangourou')
        {
?>
            <h3>Voici les codes secrets: </h3>
            <p>MJKI-LKJ256-GG856D-O85OGK-NJLP8</p>
            <p>MJKI-LKJ256-GG856D-O85OGK-NJLP8</p>
            <p>MJKI-LKJ256-GG856D-O85OGK-NJLP8</p>

<?php
        }
    else{
        echo "<p>Mot de passe incorrect<p>";
    }
}

?>