<?php
require_once 'model.php';

class Uqituvchi extends Model{

public $table = 'uqituvchi';

public function insert($arr){

    $fio = $arr['fio'];
    $kurs = $arr['kurs'];
    $maosh = $arr['maosh'];
    
$sql = "INSERT INTO uqituvchi (`fio`,`kurs`,`maosh`) VALUES ('$fio','$kurs','$maosh')";

if(mysqli_query($this->db,$sql)){

    return 200;
}
else {

    return 409;
}

}
public function tahrirlash($id){

    $sql = "SELECT * FROM " .$this->table. " WHERE id=".$id;

    $qaytish = mysqli_query($this->db,$sql);

    return mysqli_fetch_assoc($qaytish);
}
public function update($arr){
    $fio = $arr['fio'];
    $kurs = $arr['kurs'];
    $maosh = $arr['maosh'];
    $id = $arr['id'];

    $sql = "UPDATE uqituvchi SET fio = '$fio',kurs = '$kurs',maosh = '$maosh' WHERE id=".$id;

    $qaytish = mysqli_query($this->db,$sql);
    

    if($qaytish){

        return 200;
    }else{

        return 409;
    }
}
}
?>