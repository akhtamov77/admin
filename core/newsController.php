<?php
require_once 'model.php';

class News extends Model 
{
 public $table = 'new';
   public function insert($arr){

    $sarlavha = $arr['Sarlavha'];
    $batafsil = $arr['Batafsil'];

    $sql = "INSERT INTO new (`Sarlavha`,`Batafsil`) VALUES ('$sarlavha','$batafsil')";

    if(mysqli_query($this->db,$sql)){

        return 200;
    }else{
    
        return 409;
    }
   }
   public function tahrirlash($id){

   

        $sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
        $qaytish = mysqli_query($this->db,$sql);

        return mysqli_fetch_assoc($qaytish);
    }
public function update($arr){

$Batafsil = $arr['Batafsil'];
$Sarlavha = $arr['Sarlavha'];
$id = $arr['id'];

$sql = "UPDATE ".$this->table." SET Batafsil='$Batafsil', Sarlavha='$Sarlavha' WHERE id=".$id;

$qaytish = mysqli_query($this->db,$sql);


if($qaytish){
return 200;

}else{

return 409;

}

}

   }
    


?>