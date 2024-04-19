<?php 
include_once '../core/loginadmin.php';
$obj =  new Admin();

if(isset($_POST)){

if($obj->tekshir($_POST['login'] , $_POST['parol'], $_POST['_crf'])==200){
?>
<script>
    alert('xush kelibsiz');
    window.location='../index.php';
</script>
<?php
}else{
   
    ?>
<script>
    alert('parol yoki login xato');
    window.location='../loginkirish.php';
</script>
<?php
}
}
?>