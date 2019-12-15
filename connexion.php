<?php 
 try{
    $pdo= new PDO('mysql:host=localhost;dbname=apptt','root','');
    echo"--------------------------------------------------------------------------->";
 }
 catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    
    
    
    }

 


?>