 <?php 
 include  'baglan.php';
 include 'khead.php'; 
    // Form Gönderilmişmi Kontrolü Yapalım 
    // Veritabanı Insert işlemleri Başlangıç.
        if(isset($_POST['register'])){
            // Formdan Gelen Kayıtlar
            $kad= $_POST["kad"];
            $ad= $_POST["ad"];
            $soyad= $_POST["soyad"];
            $email= $_POST["email"];
            $tc= $_POST["tc"];
            $telno= $_POST["telno"];
            $parola= $_POST["parola"]; 
            if (empty($kad)||empty($ad)) {
            	echo "Alanları boş geçmeyınız";
            }
            else{
            	 // Veritabanına Ekleyelim.
            $kaydet= mysql_query("INSERT INTO hesapacdb(kad,ad,soyad,email,tc,telno,parola) values('$kad','$ad','$soyad','$email','$tc','$telno','$parola')");
         if($kaydet){
   			   header(sprintf("Location: " .$_SERVER['login.php']));
 		}
		 else{
   		  echo "İşlem başarısız..";
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
          <form>
            <h1>Kullanıcı Giriş Paneli</h1>
          
            <div>
              <input type="text" name="dfdsfds" class="form-control" placeholder="Email" required="" />
            </div>
     
          
            <div>
              <input type="parola" class="form-control" placeholder="Parola" required="" />
            </div>
           
            <div>
              <a class="btn btn-default submit" name="admingiris" href="index.php">Giriş Yap</a>

            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Yeni misiniz?
                <a href="#signup" class="to_register"> Hesap Aç </a>
              </p>

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
          <form action="login.php" method="post">

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
              <input type="text"  required="" name="parola"  placeholder="Parola"  />
            </div>
            <br>
      
            <div>
              <button type="submit" name="register">Kaydol</button>  
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Zaten bir üye misiniz?
                <a href="#signin" class="to_register"> Oturum Aç</a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Kullanıcı Kayıt </h1>
                <p>©2018 Hasan Yılmaz & Fatih Berber / E-Ticaret Proje</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>

</body>
</html>
