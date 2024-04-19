<?php 
  include_once 'yangi/head.php'; 
  include_once 'core/newsController.php';

  $obj = new News();
  
  $news = $obj->select();
?>
<body>
  <div class="container-scroller">
    
  <?php include_once 'yangi/navbar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      
      
     <?php include_once 'yangi/saidbar.php'; ?>
     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kurish</h4>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                        <th>ID</th>
                          <th>Sarlavha</th>
                          <th>Batafsil</th>
                          <th>amallar</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          foreach($news as $key => $value){
                        ?>
                        <tr>
                        <td><?=$value['id']?></td>
                          <td><?=$value['Sarlavha']?></td>
                          <td><?=$value['Batafsil']?></td>
                          <td>
                            <a href="delete/newsDelete.php?id=<?=$value['id']?>">
                            
                              <button type="button" class="btn btn-danger shaxzod">O'chirish</button>
                              
                            </a>
                            <a href="newsupdate.php?id=<?=$value['id']?>">
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
            </div>
        </div>
        <!-- https://sweetalert2.github.io/ -->
        <?php include_once 'yangi/footer.php' ?>
</body>

</html>
