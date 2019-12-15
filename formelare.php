<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    <link href="css/jasny-bootstrap.css" rel="stylesheet">
    <link href="css/form_layouts.css" rel="stylesheet" type="text/css" />
    <link href="css/formelements.css" rel="stylesheet" />
    


    <style>
            .pos{margin-left: 100px;}

.tit{color:#000;
margin-bottom: 8px;
text-shadow: 5px 5px 5px;
font-size:30px;
text-decoration-style:italic;
}
img{ height: 80px;}
                </style>
</head>


    
<header >

        <img class="logo" alt="TUNISE TELECOM" src="img/tt.PNG" width="100%">
       
       
           </header>
           <body  >
        <form class="pos"  method="post" action="resultat.php">

                            <div class="col-lg-9">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Confirmation
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                                <div action="#" class="form-horizontal">
                                                    <div class="form-position">
                                                    
                                                    </div>
                                                   
                                                    <div class="form-body">
                                                        <div class="form-group pad-top40">
                                                            <label for="inputUsername" class="col-md-3 control-label">
                                            Nom et prénom
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" placeholder="Nom et prénom" name="np">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-md-3 control-label">
                                                                Email
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="em" placeholder="Email Address" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Mode passe
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                                    <input type="password" name="mdp" placeholder="Mode passe" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputnumber" class="col-md-3 control-label">
                                                              numéro téléphonne
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="number" name="nt"placeholder="numéro teléphonne" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for="inputAddress" class="col-md-3 control-label">
                                                                Addressé
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                    </span>
                                                                    <input type="text" name="adr" class="form-control" id="inputAddress" placeholder=" Addresé">
                                                                </div>

                                                                <div>
                                                                    <br>
                                                                    <div class="form-group">
                                                            <label for="inputAddress" class="col-md-3 control-label">
                                                              
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                 
                                                                    <?php
                                                                    if(isset($_POST["tell1"]))
                                                                    {
                                                                       $id=$_POST['tel1'];
                                                                       echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                        
                                                                      else if(isset($_POST["tell2"]))
                                                                       {
                                                                          $id=$_POST['tel2'];
                                                                          echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                         
                                                                              else if(isset($_POST["tell3"]))
                                                                             {
                                                                                $id=$_POST['tel3'];
                                                                                echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                 else if(isset($_POST["tell4"]))
                                                                                {
                                                                                   $id=$_POST['tel4'];
                                                                                   echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                    else if(isset($_POST["tell5"]))
                                                                                   {
                                                                                      $id=$_POST['tel5'];
                                                                                      echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                       else if(isset($_POST["tell6"]))
                                                                                      {
                                                                                         $id=$_POST['tel6'];
                                                                                         echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";} 
                                                                                         else if(isset($_POST["tell7"]))
                                                                                         {
                                                                                            $id=$_POST['tel7'];
                                                                                            echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                             else if(isset($_POST["tell8"]))
                                                                                            {
                                                                                               $id=$_POST['tel8'];
                                                                                               echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                else if(isset($_POST["tell9"]))
                                                                                               {
                                                                                                  $id=$_POST['tel9'];
                                                                                                  echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";} 
                                                                                                  else if(isset($_POST["tell10"]))
                                                                                                  {
                                                                                                     $id=$_POST['tel10'];
                                                                                                     echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";} 
                                                                                                     else if(isset($_POST["tell11"]))
                                                                                                     {
                                                                                                        $id=$_POST['tel11'];
                                                                                                        echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                         else if(isset($_POST["tell13"]))
                                                                                                        {
                                                                                                           $id=$_POST['tel13'];
                                                                                                           echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                            else if(isset($_POST["tell14"]))
                                                                                                           {
                                                                                                              $id=$_POST['tel14'];
                                                                                                              echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";} 
                                                                                                              else if(isset($_POST["tell15"]))
                                                                                                              {
                                                                                                                 $id=$_POST['tel15'];
                                                                                                                 echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";} 
                                                                                                                 else if(isset($_POST["tell16"]))
                                                                                                                 {
                                                                                                                    $id=$_POST['tel16'];
                                                                                                                    echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";} 
                                                                                                                    else if(isset($_POST["tell17"]))
                                                                                                                    {
                                                                                                                       $id=$_POST['tel17'];
                                                                                                                       echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";} 
                                                                                                                       else if(isset($_POST["tell18"]))
                                                                                                                       {
                                                                                                                          $id=$_POST['tel18'];
                                                                                                                          echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                           else if(isset($_POST["tell19"]))
                                                                                                                          {
                                                                                                                             $id=$_POST['tel19'];
                                                                                                                             echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";} 
                                                                                                                             else if(isset($_POST["clee20"]))
                                                                                                                             {
                                                                                                                                $id=$_POST['cle20'];
                                                                                                                                echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                                else if(isset($_POST["tell21"]))
                                                                                                                                {
                                                                                                                                   $id=$_POST['tel21'];
                                                                                                                                   echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                                   else if(isset($_POST["tell22"]))
                                                                                                                                   {
                                                                                                                                      $id=$_POST['tel22'];
                                                                                                                                      echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>  $id  </strong></p>";}
                                                                                                                                      else if(isset($_POST["clee1"]))
                                                                                                                                      {
                                                                                                                                         $id=$_POST['cle1'];
                                                                                                                                         echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                                    
                                                                                                                                         else if(isset($_POST["clee2"]))
                                                                                                                                         {
                                                                                                                                            $id=$_POST['cle2'];
                                                                                                                                            echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                                            else if(isset($_POST["clee3"]))
                                                                                                                                            {
                                                                                                                                               $id=$_POST['cle3'];
                                                                                                                                               echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                                               else if(isset($_POST["clee4"]))
                                                                                                                                               {
                                                                                                                                                  $id=$_POST['cle4'];
                                                                                                                                                  echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                                                  else if(isset($_POST["cle4"]))
                                                                                                                                                  {
                                                                                                                                                     $id=$_POST['clee5'];
                                                                                                                                                     echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                                                     else if(isset($_POST["cle5"]))
                                                                                                                                                     {
                                                                                                                                                        $id=$_POST['clee5'];
                                                                                                                                                        echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}
                                                                                                                                                        else if(isset($_POST["clee7"]))
                                                                                                                                                        {
                                                                                                                                                           $id=$_POST['cle7'];
                                                                                                                                                           echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>$id</strong></p>";}

                                                                                                                                         else{
                                                                            echo"<h1 style='color:dodgerblue;'>Code téléphonne</h1><p style='color:rgb(50,205,50);'><strong>   !!!!!!!!  </strong></p>";
                                                                        }
                                                                        ?>
                                                                       
                                                                </div></div>
                                                         <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Récopier
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                                    <input type="password" name="recp" placeholder="Récopier" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                                 <br><br>
                                                                <div class="input-group mb-3"  >
                                                                      
                                                                    <label>   durée engagment  </label>
                                                                        
                                            <div class="input-group-append">   
                                          
                                                                          <span class="input-group-text">3 mois</span> <input type="radio" name="r3" value="3" class="flat-red" />     &nbsp;&nbsp;&nbsp;&nbsp;
                                                                          <span class="input-group-text">6 mois</span> <input type="radio" name="r3" value="6"class="flat-red"  /> &nbsp;&nbsp;&nbsp;&nbsp;
                                                                          <span class="input-group-text">12 mois</span> <input type="radio" name="r3" value="12"class="flat-red"  /> &nbsp;&nbsp;&nbsp;&nbsp;
                                                                          <span class="input-group-text">24 mois</span> <input type="radio" name="r3" value="24"class="flat-red"  /> &nbsp;&nbsp;&nbsp;&nbsp;
                                                                        </div></div>
                                                                   
                                                                 
                                                                   
                                               </div>
                                            </div> 
                                        </div> 
                                    </div>
                                            </div></div>    
                                      



                                            <div class="col-md-12">
                                          <div class="panel panel-primary">
                                                                        <div class="panel-heading">
                                                                            <h3 class="panel-title">
                                                                                <i class="livicon" data-name="credit-card" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Carte de crédit
                                                                            </h3>
                                                                            <span class="pull-right clickable">
                                                                                <i class="glyphicon glyphicon-chevron-up"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            <div class="box-body">
                                                                                <div class="card-wrapper"></div>
                                                                                <br />
                                                                                <div id="card">
                                                                                    <div>
                                                                                        <div >
                                                                                            <label class="col-md-3 control-label">  Numéro de carte</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"  
                                                                                                name="number" placeholder="" class="form-control"required  />
                                                                                            </div>
                                                                                        </div></div>
                                                                                        <div class="form-group">
                                                                                            <label class="col-md-3 control-label">Nom sur carte</label>
                                                                                            <div class="col-md-9">
                                                                                                <input name="name" type="text" class="form-control" minlength="16"  maxlength="16" required />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="col-md-3 control-label">CVV</label>
                                                                                            <div class="col-md-9">
                                                                                                <input name="cvc" required type="text" placeholder="" class="form-control" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="col-md-3 control-label">Date d'expiration</label>
                                                                                            <div class="col-md-9">
                                                                                                <input name="expiry" placeholder="" class="form-control" />
                                                                                            </div>

                                                                                        </div>
                                                                                    
                                                                                        </div></div></div></div></div></div></div>
                                                                                   
                                                                                   
                                                                                    </div>
                                                                              
                                                                                   </div>
                                                                                   </div>
                                            
                                </div> 
                            
                                <div class="col-md-offset-3 col-md-9">
                              
                                        <button   style="width:150px; "class="btn btn-primary"  type="submit"  name="envoyer"><cite style="color:white;" > Envoyer </cite></button> 
                                   
                                   
                                        <button   style="width:150px; "     class="btn btn-danger"  type="submit"  value="tell"><cite style="color:white;" ><a href="categore.php"> Annuler </a></cite></button> 
                                        &nbsp;</div>                                 
                             </form>
                                                                        
                                                              

                                                                </body>
                                                            
                                                        <script src="js/app.js" type="text/javascript"></script>
                                                        <script src="js/jasny-bootstrap.js"></script>                                                                                                        
                                                        <script src="js/jquery.card.js" type="text/javascript"></script>
                                                        <script src="js/formelements.js" type="text/javascript"></script>
                                                       

                                                    </body>
                                                    
                                                    </html>
                                                    