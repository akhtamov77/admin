<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
if(isset($_POST['yuborilmoqda'])){
    
    include_once "../core/kursController.php";
    $obj = new kurs;

    if($obj->insert($_POST)==200){
?>
<script>
    alert("yozildi");
    window.location="../kurs-kiritish.php";
</script>
<?php
}else{
    ?>
    <script>
        alert("xatolik yuz berdi");
        window.location="../kurs-kiritish.php";
    </script>
    <?php
}}
else
{
    echo "notugri surov";
}
?>
