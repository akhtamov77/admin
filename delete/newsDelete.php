<?php 
    include_once '../core/newsController.php';
    $id = $_GET['id'];
    $obj = new News();

    if($obj->delete($id)==200){
        ?>
        <script>
            alert("O'chirildi");
            window.location="../new-kurish.php";
        </script>
        <?php
        }else{
            ?>
            <script>
                
                
                alert("xatolik yuz berdi");
                window.location="../new-kurish.php";
            </script>
            <?php
        }
        
        ?>