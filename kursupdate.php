
<?php include_once 'yangi/head.php'; 
include_once 'core/kurscontroller.php'; 
$id = $_GET['id'];
$obj = new Kurs();

$kurs = $obj->tanlash($id);


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
                  
                  <form  action='update/kursup.php' method="POST" class="forms-sample">
                    <div class="form-group">
                      <label  for="exampleInputUsername1" >nomi</label>
                      <input name='nomi'type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="<?=$kurs['nomi']?>">
                    </div>
                    <div class="form-group">
                      <label  for="exampleInputEmail1">vaqti</label>
                      <input name="vaqti" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?=$kurs['vaqti']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">uqituvchi</label>
                      <input name="uqituvchi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?=$kurs['uqituvchi']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">narx</label>
                      <input name="narx" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?=$kurs['narx']?>">
                      <input  name="id" type="hidden" value="<?=$kurs['id']?>">
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









