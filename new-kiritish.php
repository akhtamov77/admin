<?php include_once 'yangi/head.php'; ?>
<body>
  <div class="container-scroller">
    
    
    <div class="container-fluid page-body-wrapper">
      <?php include_once 'yangi/navbar.php'; ?>
      
     <?php include_once 'yangi/saidbar.php'; ?>
     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Yangilik qushish</h4>
                    
                    <form class="forms-sample" method="POST" action="send/newSend.php" >
                      <div class="form-group">
                        <label for="exampleInputUsername1">Sarlavha</label>
                        <input name="Sarlavha" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Batafsil</label>
                        <textarea name="Batafsil" id="sarlavha" cols="30" rows="10"></textarea>
                    
                      <input name="yuborilmoqda" type="submit" class="btn btn-primary me-2" value="Submit"/>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <?php include_once 'yangi/footer.php' ?>
</body>

</html>









