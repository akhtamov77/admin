<?php
if(isset($_POST['id'])){
include_once '../core/talabacontroller.php';
    $obj = new Talaba();

    $update = $obj->update($_POST);
    if($update==200){
?>
        <script>
                alert('tahrirlandi');
                window.location="../talaba-kurish.php";
        </script>
        <?php
    }else{
?>
       <script>
                alert('xatolik yuz berdi');
                window.location="../talaba-kurish.php";
        </script>
  <?php  }
}
?>