<?php
$id = $_GET['id'];
include_once '../core/uqituvchicontroller.php';
$obj = new Uqituvchi();

if($obj->delete($id) == 200){
?>
<script>
    alert('uchirildi');
    window.location='../uqituvchi-kurish.php';
</script>
<?php
    
}else{
?>
<script>
    alert("xatolik yuz berdi");
    window.location='../uqituvchi-kurish.php';
</script>

<?php
}
?>