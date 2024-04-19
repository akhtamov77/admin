<?php
if(isset($_POST['id'])){
require_once '../core/newsController.php';
$obj = new News();
$update = $obj->update($_POST);


if($update==200){
?>
<script>
alert('tahrirlandi');
window.location='../new-kurish.php';
</script>
    
<?php
}else{
    ?>
    <script>
alert('tahrirlandi');
window.location='../new-kurish.php';
</script>
<?
}

}

?>