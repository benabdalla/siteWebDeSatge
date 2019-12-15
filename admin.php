<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css\bootstrap.css" />
<link rel="stylesheet" href="assets/css/main.css" />

<link rel="stylesheet" href="css\stylepa.css" />


</head>
<?php   
if(!isset($_SESSION["login"])){
    
    
    ?>


<body>
<header id="header" style="background-color:#b7b7b7; border-bottom: solid 9px rgb(251, 0, 189);">

 <img class="logo" alt="TUNISE TELECOM" src="img/tt.PNG" width="20%" >


<marquee class="container"><p class="tit">Page Admin</p></marquee>


<nav class="colr">
	<a href="#menu">Accueil</a> 
	</nav><br>

	</header>

	<nav id="menu" style="background-color:#b7b7b7; color: black">
<ul   class="links">
					<li  class="ov"><a href="accueil.php">Accueil</a></li>
					<li><a href="categore.php">CATALOGUES</a></li>
					<li><a href="admin.php"><h1>Admin</h1></a> </li>
				</ul>
		</nav>

    <div class="container">
        <div class="row vertical-offset-100">
            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">ENREGISTRE</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="key" data-size="18" data-c="#484848" data-hc="#484848" data-loop="true">ENTRE LE MOT DE PASSE</i>
                                    </div>

                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="key" data-size="18" data-c="#484848" data-hc="#484848" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="MOT DE PASSE" name="pasword" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                   
                                </div>
                                <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">ENREGISTRE</button>
                            </fieldset>
                        </form>
                        </div></div> </div></div>
                        <div hidden="true">
                        <?php
}
 
  require "connexion.php";

  $pwd=$_POST['pasword']; 
 
$res= $pdo->query("select * from admin"); 

foreach($res as $key)
{
$pa=$key['password'];
}





    if(isset($_POST['login']))
     { 
        
    if($pa==$pwd)
    {
        session_name("session_admin");
        session_start();
        $_SESSION["login"] = "admin";
        header("Location:./affiche.php");
    }
else{
    session_name("session_admin");
    session_start();

    header("Location:admin.php");
}


     }
?>
<!-- cookie  enregistre  login par 1jour -->
<?php
$name="save";
$log=$_POST['pasword'];
$tm=time()+(60*60*24);
setcookie($name,$log,$tm);




?>
   </div>
<footer  style="background-color:rgb(241, 239, 239);" >
	<div style="border-bottom:solid 3px rgb(169, 169, 255);">
	<article class="row">
			<article  class="col-3" >
				
					<p style="margin-bottom:15px;" class="container" >
						
							<div  class="text-muted">
									<Strong>​MY TT ​​</Strong><br>
								
									Recharge TT Cash<br>
									Achat carte de recharge<br>
									Forfait 3G ++ / 4G <br>
									MobilPay<br>
									Paiement facture<br>
								</div>
							</p>
			
				</article>
				<article  class="col-3" >
			
							
						<div  class="text-muted">
								<Strong>​	A PROPOS DE TT​ ​​</Strong><br>
							
								

								button du président<br>
								Notre entreprise<br>
								Nos valeurs<br>
								Carrières​​<br>
								​Appels d'offres<br>​​
							


							</div>
						</p>
			
				</article>
				<article class="col-3">
				
				 <p style="margin-bottom:10px;" > 
					
						<div class="text-muted">
								​​<strong>PRODUITS ET SERVICES</strong>
						<br>
						MobiDinar<br>
						​Prélévement<br>
						Codes des services<br>
					</div>
				 </p>
				 
	</article>

								

<article class="col-3">
		​​<strong>SUIVEZ NOUS</strong>
	<ul class="plain"><li><a href="https://twitter.com/_TunisieTelecom"><i class="icon fa-twitter">&nbsp;</i>	TT sur Twitter</a> </li>

	<li><a href="https://www.facebook.com/TunisieTelecom"><i class="icon fa-facebook">&nbsp;</i>TT sur Facebook</a> </li>
		<li><a href="https://www.youtube.com/user/groupeTT"><i class="icon fa-youtube">&nbsp;</i>TT sur Youtube </a>
</li></ul>
</article>




</article>
<div class="container">
</div>
</div>

		<div class="container">
			<br>
			<div class="poss">
		&copy; <a href="https://www.tunisietelecom.tn/Fr"><u>www.tunisetelecom.tn</u></a> </div>
	</div>
</footer>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
</body>


</html>
