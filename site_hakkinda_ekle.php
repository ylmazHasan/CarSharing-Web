<?php 
include 'admin_header.php';

$baglan=mysqli_connect("localhost","root","12345678","carsharingdb");
    // Form Gönderilmişmi Kontrolü Yapalım
    // Veritabanı Insert işlemleri Başlangıç.
if(isset($_POST['insert'])){
            // Formdan Gelen Kayıtlar
	$hakkinda= $_POST["hakkinda"];

	if (empty($hakkinda)) {
		echo "Alanları boş geçmeyınız";
	}
	else{
   // Veritabanına Ekleyelim.
		if($parola != $parola_tekrar)  {
			echo "Parola ve parola tekrar eşleşmiyor";
		}

		else
		{
			$sqlekle= "INSERT INTO site_hakkinda(hakkinda) VALUES ('$hakkinda')";
			$kaydet= mysqli_query($baglan,$sqlekle);
			if($kaydet){

			//	header(sprintf("Location: " .$_SERVER['site_hakkinda_ekle.php']));
			}}


		}
	}
	?>

	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Site Bilgileri</h3>
				</div>


			</div>


			<form action="site_hakkinda_ekle.php" method="post">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Site Bilgilerini Giriniz<small></small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>

								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div id="alerts"></div>
							<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
									<ul class="dropdown-menu">
									</ul>
								</div>

								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>
											<a data-edit="fontSize 5">
												<p style="font-size:17px">Huge</p>
											</a>
										</li>
										<li>
											<a data-edit="fontSize 3">
												<p style="font-size:14px">Normal</p>
											</a>
										</li>
										<li>
											<a data-edit="fontSize 1">
												<p style="font-size:11px">Small</p>
											</a>
										</li>
									</ul>
								</div>

								<textarea name="descr" id="descr" style="display:none;"></textarea>

								<br />

								<div class="ln_solid"></div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Site Bilgileri:</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea class="resizable_textarea form-control" placeholder="Site Bilgilerini Giriniz..." name="hakkinda"></textarea>
										<button type="submit" name="insert" class="btn btn-success">Kaydet</button> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
include 'footer.php';
?>