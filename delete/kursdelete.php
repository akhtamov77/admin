
<?php
$id = $_GET['id'];
require_once '../core/kurscontroller.php';
$obj = new Kurs();

if($obj->delete($id)==200)
{
?>
<script>
    alert("uchdi");
    window.location="../kurs-kurish.php";
</script>
   <?php
}else{
?>
    <script>
    alert("xatolik");
    window.location="../kurs-kurish.php";
</script>
<?php
}
?>