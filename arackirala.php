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
    <div class="clearfix"></div>
    <div class="row">

      <p>CarSharing</p>
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="row">
              <div class="col-md-4">

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
                 <div class="thumbnail" >

                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="images/media.jpg" alt="image"/> 
                  </div>
                  <div class="caption">
                    <input type="text" value="<?php echo $cekilen_veri['marka'] ?>">
                    <input type="text" value="<?php echo $cekilen_veri['fiyat'] ?>">
                    <div class="caption">
                      <button type="submit" ></button></a>
                    </div>
                  </div>
                </div> 
              <?php }
              ?>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->


<?php
include 'footer.php';
?>