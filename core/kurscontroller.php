<?php
require_once 'model.php';

class Kurs extends Model 
{
 public $table = 'kurs';
   public function insert($arr){
    $nomi = $arr['nomi'];
    $vaqti = $arr['vaqti'];
    $uqituvchi = $arr['uqituvchi'];
    $narx = $arr['narx'];

    $sql = "INSERT INTO kurs (`nomi`,`vaqti`,`uqituvchi`,`narx`) VALUES ('$nomi','$vaqti','$uqituvchi','$narx')";

    if(mysqli_query($this->db,$sql)){

        return 200;
    }else{

        return 409;
    }
   }
   public function tanlash($id){

    $sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
    $qaytish = mysqli_query($this->db,$sql);

    return mysqli_fetch_assoc($qaytish);

   }
   public function update($arr){

    $nomi = $arr['nomi'];
    $vaqti = $arr['vaqti'];
    $uqituvchi = $arr['uqituvchi'];
    $narx = $arr['narx'];
    $id = $arr['id'];
    $sql = "UPDATE ".$this->table." SET nomi='$nomi', vaqti='$vaqti', uqituvchi='$uqituvchi', narx='$narx' WHERE id=".$id;

       

    if(mysqli_query($this->db,$sql)){
return 200;

    }else{

        return 409;
    }
   }

}
?>