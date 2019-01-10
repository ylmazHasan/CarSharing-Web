<?php include 'header.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Typography</h3>
			</div>

			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Typography <small>different design elements</small></h2>
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

						<div class="col-md-12 col-lg-12 col-sm-12">
							<!-- blockquote -->
							<?php 
							session_start();
							$user_deger=$_SESSION["user_id"];
							$baglan = mysqli_connect("localhost", "root", "12345678", "carsharingdb");
							$profil = " SELECT * FROM site_hakkinda";
							$sonuc = mysqli_query($baglan, $profil);

							while ($cekilenveri = mysqli_fetch_array($sonuc)) {

								?>
								<blockquote>
									<p>
										<?php echo $cekilenveri['hakkinda']; ?>

									</p>
									</footer>
								</blockquote>
<?php } ?>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page content -->
	<?php include 'footer.php'; ?>