<?php
session_start();
 
include 'header.php';
 include 'baglan.php';
 ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Profil</h3>
      </div>

      <div class="title_right">
    
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Profil<small>CarSharing</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    <?php 
              session_start();
              $user_deger=$_SESSION["user_id"];
              $baglan = mysqli_connect("localhost", "root", "12345678", "carsharingdb");
              $profil = " SELECT * FROM hesapacdb  WHERE   id='$user_deger'";
              $sonuc = mysqli_query($baglan, $profil);
              while ($cekilen_veri = mysqli_fetch_array($sonuc)) {
                $kad = $cekilen_veri['kad'];
                $ad = $cekilen_veri['ad'];
                $soyad = $cekilen_veri['soyad'];
                $email = $cekilen_veri['email'];
                $tc=$cekilen_veri['tc'];
                $telno=$cekilen_veri['telno'];
                $parola=$cekilen_veri['parola'];
                ?>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı* <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text"  id="first-name" required="required" value="<?php echo $cekilen_veri['kad'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ad* <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name"  required="required" value="<?php echo $cekilen_veri['ad'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Soyad* </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name"  class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['soyad'] ?>" type="text" name="middle-name">
                </div>
              </div>
                <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name"  class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['email'] ?>" type="text" >
                </div>
              </div>
                     <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tc*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name"  class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['tc'] ?>" type="text" name="middle-name">
                </div>
              </div>
                     <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefon Numarası*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['telno'] ?>" type="text" name="middle-name">
                </div>
              </div>
                     <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Parola* </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name"  class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['parola'] ?>" type="text" name="middle-name">
                </div>
              </div>
            
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" class="btn btn-success">Guncelle</button>
                </div>
              </div>
  <?php   } ?>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>