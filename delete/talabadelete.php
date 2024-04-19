<?php

include_once '../core/talabacontroller.php';
$id = $_GET['id'];
$obj = new Talaba();
if($obj->delete($id)==200){
    ?>
<script>
alert("o`chirildi");
window.location="../talaba-kurish.php";
</script>
<?

}else{ ?>
    <script>
    alert("xatolik yuz berdi");
    window.location="../talaba-kurish.php";
    </script>
<?
}
?>