
<!DOCTYPE html>
<html lang="en">
<?php include_once 'yangi/head.php'; ?>

<body>
  
  <div class="container-scroller">
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial --><?php include_once 'yangi/navbar.php'; ?>
      <!-- partial:partials/_sidebar.html -->
       
             
      <!-- partial -->
      
        <div class="content-wrapper">
          <div class="row">
          <?php include_once 'yangi/saidbar.php'; ?>
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Regsitration</h4>
                  
                  <form class="forms-sample" method= "POST" action="send/regsend.php">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input name="user" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input name="confirm" type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    
                    <button name="yuborilmoqda" type="submit" class="btn btn-primary me-2">Submit</button>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once 'yangi/footer.php'; ?>
</body>

</html>


