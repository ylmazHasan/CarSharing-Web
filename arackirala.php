<?php 
 // include 'baglan.php';
session_start();
include 'header.php';
$user_deger=$_SESSION["a_id"];

?>

<!-- page content -->
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> Otomobil <small> CarSharing </small> </h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Otomobil...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ara!</button>
            </span>
          </div>
        </div>
      </div>
    </div>


    <?php
    $baglan = mysqli_connect("localhost", "root", "12345678", "carsharingdb");
    $id=(mysql_real_escape_string(abs(intval($_GET['arac_id']))));
    $sqlekle="SELECT * FROM arac  Where arac_id=$id";
    $sonuc = mysqli_query($baglan, $sqlekle);

    while ($cekilen_veri = mysqli_fetch_array($sonuc)) {
     $cekilen_veri["arac_id"]."-".$cekilen_veri["marka"];
     $cekilen_veri["arac_id"]."-".$cekilen_veri["fiyat"];
     $cekilen_veri["arac_id"]."-".$cekilen_veri["aciklama"];
     $cekilen_veri["arac_id"]."-".$cekilen_veri["image"];
     ?>


     <br /><form id="demo-form2" action="ode.php" method="post" data-parsley-validate class="form-horizontal form-label-left">

      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Marka</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $cekilen_veri["marka"]; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fiyat</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $cekilen_veri["fiyat"]; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Açıklama</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $cekilen_veri["aciklama"]; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fiyat</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $cekilen_veri["image"]; ?>">
        </div>
      </div>  
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
         <a href="arackirala.php?arac_id=<?php echo  $cekilen_veri["id"];?>"><button type="submit" >Ödeme Yap</button> 
        </div>
      </div>

  </form>

   <?php }
    ?>  
</div>
</div>
</div>
</div>
<!-- /page content -->


<?php
include 'footer.php';
?>