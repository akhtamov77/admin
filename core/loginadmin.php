<?php
require_once 'model.php';
session_start();
class Admin extends Model{

public $table = 'admin';

public function tekshir($login, $parol, $crf){

    $sql = "SELECT * FROM ".$this->table." WHERE login='$login' AND parol='$parol' ";

    $back = mysqli_query($this->db,$sql);

    $admin = mysqli_fetch_assoc($back);

    if($admin['login'] == $login and $parol == $admin['parol'] and $crf == $_SESSION['_crf']){
        $_SESSION['login'] = $admin['login'];
        $_SESSION['id'] = $admin['id'];
        return 200;
    }else{
 
        return 409;
    }

}

}
?>