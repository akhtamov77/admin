<?php

if(isset($_POST['yuborilmoqda'])){
include_once '../core/uqituvchicontroller.php';
    $obj = new Uqituvchi;
    
    if($obj->insert($_POST)==200){
?>

<script>
alert('yozildi');
window.location='../uqituvchi-kiritish.php';
</script>
<?php
    }else{
        ?>
        <script>
alert('xatolik');
window.location='../uqituvchi-kiritish.php';
</script>
<?php

    }
}else{

    echo 'notugri surov';
}
?>