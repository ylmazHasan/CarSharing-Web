<?php include 'header.php'; ?>
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
				<?php  
				session_start();
				$user_deger=$_SESSION["user_id"];
				$baglan = mysqli_connect("localhost", "root", "12345678", "carsharingdb");
				$sqlekle="SELECT * FROM odemeyap Where parent_ode=$user_deger ";
				$sonuc = mysqli_query($baglan, $sqlekle);
				while ($cekilen_veri = mysqli_fetch_array($sonuc)){
					$cekilen_veri['gun'];
					$cekilen_veri['odeme_tutar'];
					?>
					<div class="x_content">
						<div class="table-responsive">
							<table class="table table-striped jambo_table bulk_action">
								<thead>
									<tr class="headings">
										<th>
											<input type="checkbox" id="check-all" class="flat">
										</th>

										<th class="column-title no-link last"><span class="nobr">Gün</span>
											<th class="column-title no-link last"><span class="nobr">Günlük Ödenen Fiyat</span>
											</th>
											<th class="column-title no-link last"><span class="nobr">Toplam Ödenen Fiyat</span>
											</th>
											<th class="bulk-actions" colspan="7">
												<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
											</th>
										</tr>
									</thead>

									<tbody>
										<tr class="even pointer">
											<td class="a-center ">
												<input type="checkbox" class="flat" name="table_records">
											</td>

											<td class=" "><?php echo $cekilen_veri["gun"]; ?></td>
											<td class=" "><?php echo $cekilen_veri["odeme_tutar"]; ?></td>
											<td class=" "><?php echo $cekilen_veri["gun"]*$cekilen_veri["odeme_tutar"]; ?></td>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php include 'footer.php'; ?>