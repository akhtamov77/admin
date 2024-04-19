<!DOCTYPE html>
<html lang="en">
<?php include_once 'yangi/head.php';
include_once 'core/uqituvchicontroller.php';

$obj = new Uqituvchi;
$uqituvchi = $obj->select();
?>

<body>
  <div class="container-scroller">
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial --><?php include_once 'yangi/navbar.php'; ?>
      <!-- partial:partials/_sidebar.html -->
      <?php include_once 'yangi/saidbar.php'; ?>
      <!-- partial -->
      
        <div class="content-wrapper">
          <div class="row">
          
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">uqituvchi</h4>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>fio<th>
                          <th>kurs</th>
                          <th>maosh</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($uqituvchi as $key => $value){ ?>
                        <tr>
                          <td><?php echo $value['id'] ?></td>
                          <td><?php echo $value['fio'] ?></td>
                          <td><?php echo $value['kurs'] ?></td>
                          <td><?php echo $value['maosh'] ?></td>
                          <td> <a href="delete/uqituvchidelete.php?id=<?=$value['id']?>">
                              <button type="button" class="btn btn-danger shaxzod">O'chirish</button>
                            </a>
                            <a href="uqituvchiupdate.php?id=<?=$value['id']?>">
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
            </div>
          </div>
        </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once 'yangi/footer.php'; ?>
</body>

</html>
