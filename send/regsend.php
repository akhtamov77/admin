<?php
if(isset($_POST['yuborilmoqda'])){
    include_once '../core/model.php';
    $obj = new Model();
   // $reg = $obj->reg();
    if($obj->reg($_POST)==200){?>
        <script>
            alert("yozildi");
            window.location="../index.php";
        </script>
<?php
}else{
?>
<script>
    alert("Xatolik yuz berdi");
    window.location="../registration.php";
</script>
<?php
}
}
?>