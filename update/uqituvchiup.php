<?php

include_once '../core/uqituvchicontroller.php';

$obj = new Uqituvchi();
if(isset($_POST['id'])){
$id = $obj->update($_POST);
if($id==200){
?>
<script>
    alert('tahrirlandi');
    window.location="../uqituvchiupdate.php";
</script>
<?php
}else{?>

<script>
    alert('tahrirlanmadi');
    window.location="../uqituvchiupdate.php";
</script>
<?php
}
}
?>