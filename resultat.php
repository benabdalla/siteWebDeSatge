
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
          
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
            
        <link href="css/app.css" rel="stylesheet" type="text/css"> 
        
   
        <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css"> 
        <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css" /> 
        <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2-bootstrap.css" /> 
        <link href="css/pages/tables.css" rel="stylesheet" type="text/css"> 
      
         
    </head>   

  
    <body class="skin-josh"> 
                    
          
                <section class="content"> 
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="panel panel-success filterable" style="overflow:auto;"> 
                                <div class="panel-heading"><?php 
                                if (isset($_POST["envoyer"])){
  
                                    $np=$_POST['np'];
                                    $em=$_POST['em'];
                                    $mdp=$_POST['mdp'];
                                    $nt=$_POST['nt'];
                                    $ad=$_POST['adr'];
                                    
                                    
                                    $recp=$_POST['recp'];
                                    $den=$_POST['r3'];
                                    $nc=$_POST['number'];
                                    $nsc=$_POST['name'];
                                    $cv=$_POST['cvc'];
                                    $de=$_POST['expiry'];
                                    echo"<h4 style={'margin-right:100px;'>Nom de client : $np<h4>"?>

                                    </div>                                 
                                <div>
                                   
                                    <table class="table table-striped table-bordered" > 
                                        <thead> 
                                            <tr> 
                                                <th>Code</th> 

                                                <th> Marque</th> 

                                                <th>Desc</th> 

                                                <th>Image</th>

                                                <th>Prix</th> 

                                            </tr>                                
                                        </thead>  

                                        <tbody>
                                     
                                       
                                        <?php
                                        
include "classaajout.php";

$cl= new cl($recp,$np,$em,$mdp,$nt,$ad,$nc,$nsc,$cv,$de);
$cl->ajout();
include "factclass.php";


include "connexion.php";
$fact=new fact($den,$recp);

    $req=$pdo->prepare("SELECT * FROM `tell` WHERE `idtel`=:recp");
    $req->bindValue(':recp',$recp, PDO::PARAM_STR);
    $req->execute();


foreach($req as $ky)       
    {?>
    <tr><td><?php echo$ky['idtel'];?></td>
    
    <td><?php echo$ky['marque'];?></td>

<td class="col-md-3 control-label"><?php echo$ky['desc'];?></td>



<td class="col-md-3 control-label"><?php $src=$ky['src']; echo"<img src='$src' >";?></td>

  
<td>
    <?php $fact->prix(); ?></td>
    

<?php

}}

?>                                           
                        </tr>
                               </tbody>                                         
                                                                         
                                    </table>  
                                                                  
                                </div>                                 
                            </div>                             
                        </div>                         
                                    </div>                     
                                  
                                    <button   style="width:300px;margin-left:500px; "     class="btn btn-success"  type="submit"  value="tell"><a href="accueil.php"><cite style="color:white;" > RETOUR </cite></a></button> 

                    