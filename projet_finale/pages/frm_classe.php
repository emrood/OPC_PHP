<!DOCTYPE HTML>
<html>
<head>
<link href="../style.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<title>classe</title>
</head>

<body>
   <form action="frm_classe.php" method="post" class="form-horizontal">
      <div id="main">
          <?php
            include('head_menu.php')
          ?>
            <div class="form-group" style="margin-top: 15px;">
               <label class="col-sm-2 control-label">Classe</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" name="txt_classe_name"/>
                  </div>
               </div>
               <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Enregistrer" class="btn btn-primary" name="btn_Enregistrer" />
                     <input type="submit" value="Modifier" class="btn btn-warning" name="btn_Modifier" />
                      <input type="submit" value="Supprimer" class="btn btn-danger" name="btn_Supprimer" />
               </div>
           </div>
       </form>
       <?php
           require_once('cls_domaine.php');
           
           $cls_classe = new cls_domaine();
           $select = $cls_classe->Select();
           
           echo '<table class="table table-striped table-bordered" style="width:80%; margin:auto; margin-top:6 %;">';
           echo '<tr><th>Nom Classe</th><th>Selection</th></tr>';
           $i=0;
           while($i<count($select))
           {
               echo '<tr><td>'.$select[$i]['Libelle_Domaine'].'</td>';
               echo '<td><a href="frm_classe.php?id='.$select[$i]['Code_Domaine'].'">Selectionner</a></td></tr>';
               $i++;
           }
           
           echo '</table>';
           
           if(isset($_POST['btn_Enregistrer']))
           {
               $classe_name = $_POST['txt_classe_name'];
               
               $cls_classe = new cls_domaine();
               $cls_classe->insert($classe_name);
           }
	
       ?>

</body>
</html>