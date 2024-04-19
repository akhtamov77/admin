
<!DOCTYPE html>
<html lang="en">
<?php include_once 'yangi/head.php'; 
include_once 'core/talabacontroller.php'; 
$id = $_GET['id'];
$obj = new Talaba();
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
                  <h4 class="card-title">talaba</h4>
                 
                  <form  action="update/talabaup.php"class="  forms-sample" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">nomi</label>
                      <input name="nomi" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?=$talaba['nomi']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">vaqti</label>
                      <input name="vaqt" type="number" class="form-control" id="exampleInputEmail1" placeholder="name" value="<?=$talaba['vaqt']?>">
                      <input name="id" type="number" class="form-control" id="exampleInputEmail1" placeholder="id" value="<?=$talaba['id']?>">
                    </div>
                   
                    <a href="update/talabaup.php">
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


