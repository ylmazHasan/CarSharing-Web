 <?php include 'header.php';
 include 'baglan.php';
 ?>

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
                $al_arac = " SELECT * FROM hesapacdb as he INNER JOIN arac as ar WHERE  he.id=ar.parent_hesapid";
                $sonuc = mysqli_query($baglan, $al_arac);
                while ($cekilen_veri = mysqli_fetch_array($sonuc)) {
                  $marka = $cekilen_veri['marka'];
                  $fiyat = $cekilen_veri['fiyat'];
                  $aciklama = $cekilen_veri['aciklama'];
                  $image = $cekilen_veri['image'];

                  ?>
                  <div class="thumbnail" >

                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="images/media.jpg" alt="image"/> 
                    </div>
                    <div class="caption">
                      <input type="text" value="<?php echo $cekilen_veri['marka'] ?>">
                      <input type="text" value="<?php echo $cekilen_veri['fiyat'] ?>">
                      <div class="caption">
                        <a href="arackirala.php?arac_id=<?php echo $cekilen_veri['arac_id']; ?>"><button type="submit">Özellikler</button></a>
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
<!-- /page content -->
<?php include 'footer.php'; ?>
