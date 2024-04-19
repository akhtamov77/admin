

<html lang="en">
<?php include_once 'yangi/head.php'; ?>
<?php include_once 'ximoya.php'; ?>


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
                  <h4 class="card-title">kurs</h4>
                  
                  <form class="form-sample" method=POST action='send/kursSend.php'>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">nomi</label>
                          <div class="col-sm-9">
                            <input name="nomi" type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">vaqt</label>
                          <div class="col-sm-9">
                            <input name="vaqti" class="form-control" placeholder="dd/mm/yyyy"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">uqituvchi</label>
                          <div class="col-sm-9">
                            <input name="uqituvchi" type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group d-flex align-items-center" >
                          <label class="col-sm-3 col-form-label">narx</label>
                          <div class="col-sm-9">
                            <input name="narx" type="text" class="form-control"/>
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


