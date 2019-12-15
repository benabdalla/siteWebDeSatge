<?php
class cl{

    private $np;
    private $em;
    private $mdp;
    private $nt;
    private $ad;

   
    private $nc;
    private $nsc;
    private $cv;
    private $de;
    private $id;
    public function __construct($id,$np,$em,$mdp,$nt,$ad,$nc,$nsc,$cv,$de)
    {   $this->id=$id;
        $this->np=$np;
        $this->em=$em;
        $this->mdp=$mdp;
        $this->nt=$nt;
        $this->ad=$ad;
        $this->nc=$nc;
        $this->nsc=$nsc;
        $this->cv=$cv;
        $this->de=$de;
     

     
        


    }

    public function getNp(){
        return $this->np;
    }
public function setNp($np)
{
    $this->np=$np; 
}
public function getMdp(){
    return $this->mdp=$mdp;
}
public function setMdp($mdp)
{
    $this->mdp=$mdp;
}

public function getEm(){
    return $this->em;
}
public function setEm($em)
{
    $this->em=$em;
}
public function getNt(){
    return $this->nt;
}
public function setNt($nt)
{
    $this->nt=$nt;
}
public function getAd(){
    return    $this->ad;
}
public function setAd($ad)
{
    $this->ad=$ad;
}
public function getNc(){
    return $this->nc;
}
public function setNc($nc)
{
    $this->nc=$nc;
}
public function getNsc(){
    return  $this->nsc;
}
public function setNsc($nsc)
{
    $this->nsc=$nsc;
}
public function getCv(){
    return $this->cv;
}
public function setCv($cv)
{
    $this->cv=$cv;
}
public function getId(){
    return $this->Id;
}
public function setId($id)
{
    $this->id=$id;
}

public function ajout()
{
    try{
    include "connexion.php";
    $req=$pdo->exec("INSERT INTO `client`(`id`, `npm`, `addr`, `mp`, `nt`, `adl`, `nc`, `nomc`, `cvv`, `de`) VALUES ($this->id,$this->np,$this->ad,$this->mdp,$this->nt,$this->em,$this->nc,$this->nsc,$this->cv,$this->de)");

echo"<h4> insertion dans une table  et reussie </h4>";

    }catch(PDOException $e){
        echo"$e->getMessage()";

    }



}
}




?>