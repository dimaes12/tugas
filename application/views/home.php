<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Blog Mahasiswa</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
								<li><a href="<?php echo site_url()?>/about">About</a></li>
								<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
								<li><a href="<?php echo site_url()?>/news">Berita</a></li>
							</ul>
							<form class="navbar-form navbar-left" role="search">
								
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<div class="jumbotron">
				<div class="container">
					<h1><?php echo $salam ?></h1>
					<p>Hallo guys ...</p>
					<p>
						<a class="btn btn-primary btn-lg">Lainnya</a>
					</p>
				</div>
				
			</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, ipsam harum maxime minus placeat, vel nostrum magnam explicabo saepe in, maiores quia quos, nulla ea blanditiis rem laborum. Nemo, recusandae?
				<!-- <table class="table table-hover">
					<tbody>
						<tr>
							<td><?php echo $nama; ?></td>
						</tr>
						<tr>
							<td><?php echo $alamat; ?></td>
						</tr>
						<tr>
							<td><?php echo $email; ?></td>
						</tr>
					</tbody>
				</table> -->
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
					<!-- <table class="table table-hover">
						<tbody>
						<?php foreach ($tugas as $key) { ?>
							<tr>
								<td><?php echo $key; ?></td>
							</tr>
							<?} ?>
						</tbody>
					</table> -->
				</div>
			</div>

		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>