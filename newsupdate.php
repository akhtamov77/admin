
<?php include_once 'yangi/head.php'; 
include_once 'core/newsController.php'; 
$id = $_GET['id'];
$obj = new News();

$new = $obj->tahrirlash($id);


?>
<body>
  <div class="container-scroller">
    
    
    <div class="container-fluid page-body-wrapper">
      <?php include_once 'yangi/navbar.php'; ?>
      
     <?php include_once 'yangi/saidbar.php'; ?>
     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tahrirlash</h4>
                  
                  <form  action='update/newupdate.php' method="POST" class="forms-sample">
                    <div class="form-group">
                      <label  for="exampleInputUsername1" >Id</label>
                      <input name='id'type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?=$new['id']?>">
                    </div>
                    <div class="form-group">
                      <label  for="exampleInputEmail1">Sarlavha</label>
                      <input name="Sarlavha" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?=$new['Sarlavha']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">batafsil</label>
                      <input name="Batafsil" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?=$new['Batafsil']?>">
                    </div>
                   
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    
                  </form>
                </div>
              </div>
</div>
        </div>
        
        <?php include_once 'yangi/footer.php' ?>
</body>

</html>









