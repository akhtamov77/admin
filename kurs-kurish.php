

<html lang="en">
<?php include_once 'yangi/head.php'; ?>
<?php include_once 'core/kurscontroller.php'; ?>
<?php
$obj = new kurs();

$kurs =$obj->select(); ?>
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
                          <th>
                            uqituvchi
                          </th>
                          <th>
                            narx
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      foreach( $kurs as $key=>$value){
                        ?>
                        <tr>
                          <td class="py-1">
                            <?=$value['id']?>
                          </td>
                          <td>
                          <?=$value['nomi']?>
                          </td>
                          <td>
                          <?=$value['vaqti']?>
                          </td>
                          
                          <td>
                          <?=$value['uqituvchi']?>
                          </td>
                          <td>
                          <?=$value['narx']?>
                          </td> 
                          <td>
                              <button onclick="delet(<?=$value['id']?>)"  type="button" class="btn btn-danger shaxzod">O'chirish</button>
                            <a href="kursupdate.php?id=<?=$value['id']?>">
                            <button type="button" class="btn btn-warning">tahrirlash</button>
                              
                            </a>
                          </td>
                        </tr>
                        <?php } ?>
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

