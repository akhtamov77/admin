

<html lang="en">
<?php include_once 'yangi/head.php'; ?>
<?php include_once 'core/talabacontroller.php'; 

$obj = new Talaba();
$talaba = $obj->select();
?>
<body>
  <div class="container-scroller">
    
      <!-- partial --><?php include_once 'yangi/navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include_once 'yangi/saidbar.php'; ?>
      <!-- partial:partials/_sidebar.html -->
     
      <!-- partial -->
      
        <div class="content-wrapper">
          <div class="row">
          
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kurs</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            nomi
                          </th>
                          <th>
                            vaqti
                            
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                         <?php foreach($talaba as $key => $value){ ?>
                        <tr>
                          <td class="py-1">
                           <?php echo $value['id'] ?>
                          </td>
                          <td>
                          <?php echo $value['nomi'] ?>
                          </td>
                         
                          <td>
                          <?php echo $value['vaqt'] ?>
                          </td> 
                          <td>
                          <a href="delete/talabadelete.php?id=<?=$value['id']?>">
                              <button type="button" class="btn btn-danger shaxzod">O'chirish</button>
                            </a>
                            <a href="talabaupdate.php?id=<?=$value['id']?>">
                            <button type="button" class="btn btn-warning btn-rounded btn-fw">Tahrirlash</button>
                            </a>
                          </td>
                        </tr>
                        <? }?>
                      </tbody>
                    </table>
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

