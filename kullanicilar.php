<?php include 'admin_header.php';
if(isset($_GET['delete']))
{
	$baglan=mysqli_connect("localhost","root","12345678","carsharingdb");
	$id=$_GET['delete'];
	$delete = mysqli_query($baglan,"DELETE FROM arac WHERE parent_hesapid='$id'");
	$delete2 = mysqli_query($baglan,"DELETE FROM hesapacdb WHERE id='$id'");
	if ($delete2)
	{
		echo "Silme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
	}
	else
	{
		echo "Hata";
	}
}

?>
<form action="kullanicilar.php" method="get">
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Odemelerim <small>CarSharing</small></h3>
				</div>


			</div>

			<div class="clearfix"></div>

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Geçmiş Ödemelerim <small>CarSharing</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>

					<div class="x_content">
						<div class="table-responsive">
							<table class="table table-striped jambo_table bulk_action">

								<thead>

									<tr class="headings">
										<th>
											<input type="checkbox" id="check-all" class="flat">
										</th>
										<?php  

										$baglan = mysqli_connect("localhost", "root", "12345678", "carsharingdb");
										$sqlekle="SELECT * FROM kullanici_menuler  ";
										$sonuc = mysqli_query($baglan, $sqlekle);
										while ($cekilen_veri = mysqli_fetch_array($sonuc)){
											$cekilen_veri['kad'];
											?>
											<th class="column-title no-link last"><span class="nobr"><?php echo $cekilen_veri["menu1"]; ?></span>
											</th>
											<th class="column-title no-link last"><span class="nobr"><?php echo $cekilen_veri["menu2"]; ?></span>
											</th>
											<th class="column-title no-link last"><span class="nobr"><?php echo $cekilen_veri["menu3"]; ?></span>
											</th>
											<th class="column-title no-link last"><span class="nobr"><?php echo $cekilen_veri["menu4"]; ?></span>
											</th>
											<th class="column-title no-link last"><span class="nobr"><?php echo $cekilen_veri["menu5"]; ?></span>
											</th>
											<th class="column-title no-link last"><span class="nobr"><?php echo $cekilen_veri["menu6"]; ?></span>
											</th>
										</tr>
									<?php } ?>
								</thead>

								<tbody>
									<?php  
									$yetki=0;
									$baglan = mysqli_connect("localhost", "root", "12345678", "carsharingdb");
									$sqlekle="SELECT * FROM hesapacdb WHERE yetki='$yetki' ";
									$sonuc = mysqli_query($baglan, $sqlekle);
									while ($cekilen_veri = mysqli_fetch_array($sonuc)){
										$cekilen_veri['kad'];
										?>
										<tr class="even pointer">
											<td class="a-center ">
												<a href="kullanicilar.php?delete=<?php echo $cekilen_veri["id"]; ?>"><i class="fa fa-trash-o"></i></a>												
											</td>

											<td class=" "><?php echo $cekilen_veri["kad"]; ?></td>
											<td class=" "><?php echo $cekilen_veri["ad"]; ?></td>
											<td class=" "><?php echo $cekilen_veri["soyad"]; ?></td>
											<td class=" "><?php echo $cekilen_veri["email"]; ?></td>
											<td class=" "><?php echo $cekilen_veri["tc"]; ?></td>
											<td class=" "><?php echo $cekilen_veri["telno"]; ?></td>


										</td>
									</tr>
								<?php } ?>
							</tbody>

						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</form>

<?php include 'footer.php' ?>