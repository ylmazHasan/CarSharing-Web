<?php
session_start();
include 'header.php';
$user_deger=$_SESSION["user_id"];
$baglan=mysqli_connect("localhost","root","12345678","carsharingdb");
if(isset($_POST['insert']))
{
            // Formdan Gelen Kayıtlar
	$id=$_POST["arac_id"];
	$gun= $_POST["gun"];
	$kredi_no= $_POST["kredi_no"];
	$kredi_ad= $_POST["kredi_ad"];
	if (empty($kredi_no)||empty($kredi_ad)) {
		echo "Alanları boş geçmeyınız";
	}
	else{
               // Veritabanına Ekleyelim.
		$sqlekle="INSERT INTO odemeyap(parent_ode,parent_arac,gun,kredi_no,kredi_ad) VALUES('$user_deger','$id_deger','$gun','$kredi_no','$kredi_ad')";
		$kaydet= mysqli_query($baglan,$sqlekle);

	}
}

?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Ödeme İşlemi</h3>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2> <small>CarSharing</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br /><form id="demo-form2" action="ode.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
							<?php
							$baglan = mysqli_connect("localhost", "root", "12345678", "carsharingdb");
							$id=(mysql_real_escape_string(abs(intval($_GET['arac_id']))));
							$sqlekle="SELECT * FROM arac  Where arac_id=$id";
							$sonuc = mysqli_query($baglan, $sqlekle);
							while ($cekilen_veri = mysqli_fetch_array($sonuc)) {
								$cekilen_veri["arac_id"]."-".$cekilen_veri["marka"];
								$cekilen_veri["arac_id"]."-".$cekilen_veri["fiyat"];
								?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Marka <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value=" <?php echo $cekilen_veri['marka']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fiyat*<span class="required"></span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $cekilen_veri['fiyat']; ?>">
									</div>
								</div>
							<?php } ?>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kiralanacak Gün*</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="gun">
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kredi Karrtı Numarası*</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kredi_no">
								</div>
							</div>
							<div class="form-group">
								<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kredi Kartı Üstündeki İsim*</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kredi_ad">
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" name="insert" class="btn btn-primary">Ödeme Yap</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>

		<?php include 'footer.php'; ?>