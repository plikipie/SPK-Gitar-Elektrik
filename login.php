<?php  

  include_once 'layout/header.php';
  include_once 'controller/koneksi.php';

  // include 'modal.php';

  $config = new koneksi();
  $db = $config->getConnection();
    
  if($_POST){
    
    include_once 'controller/login.php';
    $login = new Login($db);

    $login->username = $_POST['username'];
    $login->password = md5($_POST['password']);
    
    if($login->login()){
      echo "<script>location.href='admin.php'</script>";
    }
    
    else{
      echo "<script>alert('Gagal Login')</script> <script>location.href='login.php'</script>";
    }
  }
?>

      <section id="contact">
          <div id="portfolio2" style="height:542px"></div>
          <div class="container-wrapper">
              <div class="container">
                  <div class="row wow fadeInUp">
                      <div class="col-sm-4 col-sm-offset-4">
                          <div class="contact-form">
                              <h3>Masuk</h3>
                              <form method="post">
                                  <div class="form-group">
                                      <input type="text" name="username" class="form-control" placeholder="Username" required>
                                  </div>
                                  <div class="form-group">
                                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Login</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--/#bottom-->

<?php

    include 'Admin/footer.php';

?>
