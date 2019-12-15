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
      
        <script>
            function msg(){
            alert("deconnexion============>");}
        </script>   

    </head>   
   <?php 
        session_name("session_admin");
       session_start();
       if (isset($_SESSION["login"])) {

           echo "Ceci est l'interface d'administration";
    
    
    
   ?> 
  
    <body class="skin-josh"> 
                    
          <form action="" method="post">
                <section class="content"> 
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="panel panel-success filterable" style="overflow:auto;"> 
                                <div class="panel-heading"> client listes</div>                                 
                                <div>
                                   
                                    <table class="table table-striped table-bordered" > 
                                        <thead> 
                                            <tr> 
                                                <th>id</th> 
                                                <th>nom et prénom</th> 
                                                <th>Email</th> 
                                                <th>mot de passe</th> 
                                                <th>numero telphonne</th> 
                                                <th>Adresse</th> 
                                                <th>numero de carte </th>
                                                <th>Nom de carte</th> 
                                                <th>cvv</th> 
                                         
                                                <th> Date d'expiration</th>

                                            </tr>                                
                                        </thead>                                         
                                        <tbody>
                                     
                                        <div hidden="true">
                                        <?php
                                    require "connexion.php";?></div>
                                    <?php 
                                    $req=$pdo->query("SELECT * FROM `client` ");
                                    foreach($req as $key)
                                    {
                                        
                                    
                                    ?> 
                                            <tr>
                                            
                                            <td><?php echo$key['id'];?></td> 
                                                <td><?php echo$key['npm'];?></td> 
                                                <td><?php echo$key['addr'];?></td> 
                                                <td><?php echo$key['mp'];?></td> 
                                                <td> 
                                                <?php echo$key['nt'];?>
</td> 
                                                <td>   <?php echo$key['adl'];?></td> 

                                              <td>    <?php echo$key['nc'];?></td> 


                                                <td> <?php echo$key['nomc'];?></td> 
                                                <td> <?php echo$key['cvv'];?></td> 
                                                <td> <?php echo$key['de'];?></td> 


                                            </tr>                                             
                                            

                                            <?php }?>                                              
                                        </tbody>                                         
                                                                         
                                    </table>  
                                                                  
                                </div>                                 
                            </div>                             
                        </div>                         
                                    </div>                     
                                  
                    

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info filterable">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title pull-left">
                                    <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Les télphonnes et les clés
                                </h3>
                            </div>
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
                                        
                                  
                                        require "connexion.php";
                                            $req=$pdo->prepare("SELECT * FROM `tell`");
                                        
                                            $req->execute();
                                        
                                        
                                        foreach($req as $ky)       
                                            {?>
                                            <tr><td><?php echo$ky['idtel'];?></td>
                                            
                                            <td><?php echo$ky['marque'];?></td>
                                        
                                        <td class="col-md-3 control-label"><?php echo$ky['desc'];?></td>
                                        
                                        
                                        
                                        <td class="col-md-3 control-label"><?php $src=$ky['src']; echo"<img src='$src' >";?></td>
                                        
                                          
                                        <td>
                                            <?php echo $ky['prix']; ?></td>
                                            
                                        
                                        <?php
                                        
                                        }
                                        
                                        ?>                                           
                                                                </tr>
                                                                </tbody>                               
                                    </table>  
                                                                  
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     

                                   <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info filterable">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title pull-left">
                                    <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> insere une télphonne ou clé
                                </h3>
                            </div>
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
                                               
                                             
                                                   <tr><td>
                                                   <input type="text" name="ct" class="form-control"  placeholder="code tele">

                                                   </td>
                                                   
                                                   <td>
                                                   <input type="text" name="mq" class="form-control"  placeholder="Marque">

                                                   </td>
                                               
                                               <td class="col-md-3 control-label">
                                               <input type="text" name="dc" class="form-control"  placeholder=" Desc">

                                               </td>
                                               
                                               
                                               
                                               <td class="col-md-3 control-label">
                                               <input type="text" name="ig" class="form-control"  placeholder=" Image">

                                               </td>
                                               
                                                 
                                               <td>
                                               <input type="text" name="px" class="form-control"  placeholder=" Prix">

                                                   </td>
                                                   
                                               
                                                                                        
                                                                       </tr>
                                                                       </tbody>                               
                                           </table>  
                                                                         
                                       </div>                                 
                                   </div>                             
                               </div>                         
                           </div>      
                           <button   style="width:300px;margin-left:500px; "  name="ajout"    class="btn btn-success"  type="submit"  value="tell"><a href="accueil.php"><cite style="color:white;" > INSERE </cite></a></button>                
          
              
                    <div class="form-position">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            
                                                       
                                                            
                                                        
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="form-body">
                                                        <div class="form-group pad-top40">
                                                            <label for="inputUsername" class="col-md-3 control-label">
                                                                id telephone
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control"  name="iddel" placeholder="id client">
                                                                    &nbsp;

                                                                    <button type="submit" class="btn btn-danger" name="dell">Supprimer</button>
                                                                    &nbsp;
                                                                    &nbsp;
                                                                    &nbsp;
                                                                    &nbsp;

                                                                    <button type="submit" name="logout" class="btn btn-danger" style="background-color:DodgerBlue;color: white;cursor: pointer;" onclick="msg()">Déconnexion</button>

                                                                </div>
                                                            </div>
                                                        </div> 
                                                    
                                
                </section>                 
                         
              

            </aside>             
           
        </div>         
          
     
        </form>
<?php
}  

require "classajouttel.php";
?>
<div hidden="true">
<?php
$cod=$_POST['ct'];
$marq=$_POST['mq'];
$desc=$_POST['dc'];
$src=$_POST['ig'];
$prix=$_POST['px'];?>
</div><?php
$telphonne =new telphonne($cod,$marq,$desc,$src,$prix);

if(isset($_POST['ajout']))
{

$telphonne->ajouttel();



}
if (isset($_POST['dell'])){
    
 $telphonne->suptel();
}
if (isset($_POST['logout'])){
    
    unset($_SESSION);
    session_destroy();
    header("Location:./accueil.php");
}


?>

    </body> 

</html>
