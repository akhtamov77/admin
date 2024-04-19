<?php
if(isset($_POST['yuborilmoqda'])){
    
    include_once "../core/newsController.php";
    $obj = new News();

    if($obj->insert($_POST)==200){
?>
<script>
    alert("yozildi");
    window.location="../new-kiritish.php";
</script>
<?php
}else{
    ?>
    <script>
        alert("xatolik yuz berdi");
        window.location="../new-kiritish.php";
    </script>
    <?php
}}
else
{
    echo "notugri surov";
}
?>
