
<?php
require_once 'model.php';

class Talaba extends Model{
public $table = 'talaba';
    public function insert($arr){

        $nomi = $arr['nomi'];
        $vaqt = $arr['vaqt'];

            $sql = "INSERT INTO  talaba (`nomi`,`vaqt`) VALUES ('$nomi','$vaqt')";

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

    $nomi = $arr['nomi'];
    $vaqt = $arr['vaqt'];
    $id = $arr['id'];

    $sql = "UPDATE ".$this->table." SET nomi='$nomi', vaqt='$vaqt' WHERE id=".$id;

    $qaytish = mysqli_query($this->db,$sql);

    
    if($qaytish){

        return 200;
    }else{

        return 409;

    }

}

    }



?>