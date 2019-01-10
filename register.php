 <?php 
 include 'khead.php';

 $baglan=mysqli_connect("localhost","root","12345678","carsharingdb");
    // Form Gönderilmişmi Kontrolü Yapalım
    // Veritabanı Insert işlemleri Başlangıç.
 if($_POST){
            // Formdan Gelen Kayıtlar
  $kad= $_POST["kad"];
  $ad= $_POST["ad"];
  $soyad= $_POST["soyad"];
  $email= $_POST["email"];
  $tc= $_POST["tc"];
  $telno= $_POST["telno"];
  $parola= $_POST["parola"];
  $parola_tekrar=$_POST["parola"];
  $yetki=$_POST["yetki"];
  if (empty($kad)||empty($ad)) {
   echo "Alanları boş geçmeyınız";
 }
 else{
   // Veritabanına Ekleyelim.
  if($parola != $parola_tekrar)  {
   echo "Parola ve parola tekrar eşleşmiyor";
 }

 else
 {
  $sqlekle= "INSERT INTO hesapacdb(kad,ad,soyad,email,tc,telno,parola,yetki) VALUES ('$kad','$ad','$soyad','$email','$tc','$telno','$parola','$yetki')";
  $kaydet= mysqli_query($baglan,$sqlekle);
  if($kaydet){

   header(sprintf("Location: " .$_SERVER['login.php']));
 }}
 

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
          <form action="register.php" method="post">

            <h1>Yeni Kayıt</h1>
            <div>
              <input type="text" required="" name="kad" placeholder="KullanıcıAdı" />
            </div>
            <div>
              <input type="text" required="" name="ad" placeholder="Ad" />
            </div>
            <div>
              <input type="text" required="" name="soyad"  placeholder="SoyAd" />
            </div>
            <div>
              <input type="text" required="" name="email" placeholder="Email"  />
            </div>
            <div>
              <input type="text" required="" name="tc"  placeholder="TC" />
            </div>
            <div>
              <input type="text" required=""  name="telno" placeholder="Telefon No"  />
            </div>
            <div>
              <input type="password"  required="" name="parola"  placeholder="Parola"  />
            </div>
            <div>
              <input type="password"  required="" name="parola_tekrar"  placeholder="Parola Tekrar"  />
            </div>
            <br>
            <?php $yetki=0; ?>
            <div>
              <button type="submit" name="_POST">Kaydol</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Zaten bir üye misiniz?
                <a href="login.php" class="to_register"> Oturum Aç</a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Kullanıcı Kayıt </h1>
                <p>©2018 Hasan Yılmaz & Fatih Berber / E-Ticaret Proje</p>
              </div>
            </div>
          </form>
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
