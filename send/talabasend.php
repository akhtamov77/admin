<?php
 include_once '../core/talabacontroller.php';
 $obj = new Talaba();
if(isset($_POST)){
    

   
  
    if($obj->insert($_POST)==200){
?>

<script>
    alert("yozildi");
    window.location="../talaba-kiritish.php";
</script>
        <?php
    }else{ 
        ?>

<script>
    alert('yozilmadi');
    window.location="../talaba-kiritish.php";
</script>
<?php
    }
}else{
    echo "noto`g`ri so`rov";
}?>