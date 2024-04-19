<?php
if(isset($_POST['id'])){
   
    include_once '../core/kurscontroller.php';
$obj = new Kurs();

$result = $obj->update($_POST);

if($result==200){
    ?>
    <script>
    alert('tahrirlandi');
    window.location='../kurs-kurish.php';
    </script>
    <?
}else{
?>
    <script>
alert('tahrirlandi');
window.location='../kurs-kurish.php';
</script>
<?
}

}
?>