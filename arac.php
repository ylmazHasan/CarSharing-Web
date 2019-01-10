<?php 
 // include 'baglan.php';
session_start();
include 'header.php';
$user_deger=$_SESSION["user_id"];
$baglan=mysqli_connect("localhost","root","12345678","carsharingdb");
if(isset($_POST['insert']))
{
            // Formdan Gelen Kayıtlar
  $marka= $_POST["marka"];
  $fiyat= $_POST["fiyat"];
  $aciklama= $_POST["aciklama"];
  $image= $_POST["image"];

  if (empty($marka)||empty($fiyat)) {
    echo "Alanları boş geçmeyınız";
  }
  else{
               // Veritabanına Ekleyelim.
    $sqlekle="INSERT INTO arac(parent_hesapid,marka,fiyat,aciklama,image) VALUES('$user_deger','$marka','$fiyat','$aciklama','$image')";
    $kaydet= mysqli_query($baglan,$sqlekle);

  }
}
?>
<?php
if(isset($_POST['delete']))
{
  session_start();
  $user_deger=$_SESSION["user_id"]; 
  $delete = mysql_query("DELETE FROM arac WHERE parent_hesapid='$user_deger'");
}
  ?>


  <!-- page content -->

  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Araç Kayıt</h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">

              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form  action="arac.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Marka <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required"  name="marka" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fiyat <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="last-name" name="fiyat" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Aciklama <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="last-name" name="aciklama" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Image <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="last-name" name="image" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="insert" class="btn btn-success">Araç Ekle</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Benim Aracım-->
      <?php 
      session_start();
      $user_deger=$_SESSION["user_id"];
      $baglan = mysqli_connect("localhost", "root", "12345678", "carsharingdb");
      $profil = " SELECT * FROM arac  WHERE   parent_hesapid='$user_deger'";
      $sonuc = mysqli_query($baglan, $profil);
      while ($cekilen_veri = mysqli_fetch_array($sonuc)) {
        ?>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">

                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>

                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                <form  action="arac.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Marka <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required"  name="marka" class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['marka'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fiyat <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="last-name" name="fiyat" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['fiyat'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Aciklama <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="last-name" name="aciklama" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['aciklama'] ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Image <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="last-name" name="image" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['image'] ?>">
                    </div>
                  </div>

                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" name="" class="btn btn-success">Araç Güncelle</button>
                      <button type="submit" name="delete" class="btn btn-success">Araç Sil</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      <?php   } ?>
      <?php
      include 'footer.php';
      ?>