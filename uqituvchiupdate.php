
<!DOCTYPE html>
<html lang="en">
<?php include_once 'yangi/head.php'; 
include_once 'core/uqituvchicontroller.php'; 
$id = $_GET['id'];
$obj = new Uqituvchi();
$talaba = $obj->tahrirlash($id);


?>

<body>
  
  <div class="container-scroller">
  <?php include_once 'yangi/navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      
      <!-- partial:partials/_sidebar.html -->
      <?php include_once 'yangi/saidbar.php'; ?>
      <!-- partial -->
      
        <div class="content-wrapper">
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">uqituvchi</h4>
                 
                  <form  action="update/uqituvchiup.php" class="  forms-sample" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">fio</label>
                      <input name="fio" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?=$talaba['fio']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">kurs</label>
                      <input name="kurs" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?=$talaba['kurs']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">maosh</label>
                      <input name="maosh" type="number" class="form-control" id="exampleInputEmail1" placeholder="name" value="<?=$talaba['maosh']?>">
                      <input name="id" type="number" class="form-control" id="exampleInputEmail1" placeholder="id" value="<?=$talaba['id']?>">
                    </div>
                   
                    <a href="update/uqituvchiup.php">
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </a>
                  </form>
                </div>
              </div>
            </div>
          <?php include_once 'yangi/saidbar.php'; ?>
          </div>
        </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once 'yangi/footer.php'; ?>
</body>

</html>


