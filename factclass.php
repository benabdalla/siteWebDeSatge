<?php
class fact{

    private $mois;
    private $recp;
 

   
 
    public function __construct($mois,$recp)
    {   $this->mois=$mois;
        $this->recp=$recp;
   
    }

    public function getMois(){
        return $this->mois;
    }
public function setMois($mois)
{
    $this->mois=$mois; 
}
public function getRecp(){
    return $this->recp=$recp;
}
public function setRecp($recp)
{
    $this->recp=$recp;
}

public function prix()
{
    include "connexion.php";

    $req=$pdo->prepare("SELECT * FROM `tell` WHERE `idtel`=:recp");
    $req->bindValue(':recp', $this->recp, PDO::PARAM_STR);
    $req->execute();

    foreach($req as $ky)       
    {
$pr=$ky['prix'];


    }  

    $tot=$pr*$this->mois;
    echo"<h4> $tot  DT</h4>";

   






}
}



?>