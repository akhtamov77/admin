

<html lang="en">
<?php include_once 'yangi/head.php'; ?>

<body>
  <div class="container-scroller">
    
      <!-- partial --><?php include_once 'yangi/navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial:partials/_sidebar.html -->
      <?php include_once 'yangi/saidbar.php'; ?>
      <!-- partial -->
      
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">uqituvchi</h4>
                  
                  <form class="form-sample" method=POST action='send/uqituvchisend.php'>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">fio</label>
                          <div class="col-sm-9">
                            <input name="fio" type="text" class="form-control" placeholder="fio">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">kurs</label>
                          <div class="col-sm-9">
                            <input name="kurs" type = "text" placeholder="kurs" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">maosh</label>
                          <div class="col-sm-9">
                            <input name="maosh" type="number" class="form-control" placeholder="maosh">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <input name="yuborilmoqda" type="submit" class="btn btn-primary me-2" value="Submit"/>
                  </form>
                </div>
              </div>
            </div>
            
                
                </div>
              </div>
            </div></div>
            </div>
          </div>
        </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once 'yangi/footer.php'; ?>
</body>

</html>


