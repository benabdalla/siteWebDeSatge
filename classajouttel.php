<?php

 class telphonne{

    private $id;
    private $mar;
    private $desc;
    private $src;
    private $px;

   
    
    public function __construct($id,$mar,$desc,$src,$px)
    {   $this->id=$id;
        $this->mar=$mar;
        $this->desc=$desc;
        $this->src=$src;
        $this->px=$px;
    }

    public function getId(){
        return $this->Id;
    }

    public function setId($id)
    {
        $this->id=$id;
    }


    public function getMar(){
        return $this->mar;
    }
public function setMar($mar)
{
    $this->mar=$mar; 
}
public function getDesc(){
    return $this->desc=$desc;
}
public function setDesc($desc)
{
    $this->desc=$desc;
}

public function getSrc(){
    return $this->src;
}
public function setSrc($src)
{
    $this->src=$src;
}
public function getPx(){
    return $this->px;
}
public function setPx($px)
{
    $this->px=$px;
}

public function ajouttel()
{
    try{
    include "connexion.php";
    $inser=$pdo->exec("INSERT INTO `tell`VALUES ($this->id,$this->mar,$this->desc,$this->src,$this->px)");

echo"<h4> insertion dans une table  et reussie </h4>";

    }catch(PDOException $e){
        echo"$e->getMessage()";

    }



}
public function suptel()
{
    include "connexion.php";

 $sql=$pdo->prepare("DELETE FROM `tell` WHERE `idtel`= :id");
        
        $sql->bindValue(':id',$this->id, PDO::PARAM_STR);
        try{
        $sql=$sql->execute();
        echo"<h4> supprission dans une table  et reussie </h4>";
        }
    catch(PDOException $e){
        echo"$e->getMessage()";}
}
        

}




?>