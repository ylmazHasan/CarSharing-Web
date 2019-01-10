 <?php
 include  'baglan.php';
 include 'khead.php';
    // Form Gönderilmişmi Kontrolü Yapalım
 $baglan=mysqli_connect("localhost","root","12345678","carsharingdb");
    // Veritabanı Insert işlemleri Başlangıç.
 if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $parola = $_POST['parola'];
  
  if (empty($email) || empty($parola)) {
  
    $bilgi_email="*Boş geçmeyiniz alanları";

  } 
  else {
    $yetki=1;
        //$email = $con->escape_string($_POST['email']);
    $sonuc ="SELECT * FROM hesapacdb WHERE email='$email' AND parola='$parola' AND yetki='$yetki' ";
    $result = mysqli_query($baglan,$sonuc);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    echo $row;
    $active = $row['active'];
    $count= mysqli_num_rows($result);
    if($count == 1){
      session_start();
      $userad=$row['id'];
      var_dump($userad);
      $_SESSION["user_id"]=$userad;
      header('Location: admin_ayarlar.php');
    }
    else{
      $bilgi_email="E-mail veya parola yanlıştır";
    }
  }
}
        //Veritabanı Insert işlemleri Son.
?>
<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="admin_login.php" method="post">
            <h1>Admin Giriş Paneli</h1>

            <div>
              <input type="text" name="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" name="parola" class="form-control"  placeholder="Parola" required="" />
            </div>
            <div>
              <button  type="submit" name="login">Giriş Yap</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
           
              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Kullanıcı Giriş</h1>
                <p>©2018 Hasan Yılmaz & Fatih Berber / E-Ticaret Proje</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">

        </section>
      </div>
    </div>
  </div>

</body>
</html>
