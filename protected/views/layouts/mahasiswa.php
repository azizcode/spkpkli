<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SISTEM REKOMENDASI PKLI - <?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="description" content="A form is a collection of user input elements" />
		<meta name="keywords" content="rekomendasi,tempat pkli, pkli, sistem informasi,magang" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sb-admin.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.0.3.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/moment.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modal.js"></script>

	</head>
	<body>
		<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>">SPK PKLI</a>
			</div>
		  	<!-- Collect the nav links, forms, and other content for toggling -->
		  	<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
					<li class="menu <?php if($this->action=='home'){ ?>odd<?php } ?>">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>">
							<span class="glyphicon glyphicon-home"></span>
							<span class="glyphicon-class">Home</span>
						</a>
					</li>
					<li class="menu <?php if($this->action=='pengumuman'){ ?>odd<?php } ?>">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/mahasiswa/pengumuman">
							<span class="glyphicon glyphicon-warning-sign"></span>
							<span class="glyphicon-class">Pengumuman</span>
						</a>
					</li>
					<li class="menu <?php if($this->action=='about'){ ?>odd<?php } ?>">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/mahasiswa/about">
							<span class="glyphicon glyphicon-info-sign"></span>
							<span class="glyphicon-class">About</span>
						</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">	
					<li class="menu pull-right" style="border:none;">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/mahasiswa/profil">
							<span class="glyphicon glyphicon-user"></span>
							<span class="glyphicon-class"><?php echo $this->identitas->Nama_lengkap; ?></span>
						</a>
					</li>	
				</ul>
		  	</nav><!-- /.navbar-collapse -->
		</header>
		<div id="wrapper">
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
				<li class="active sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/mahasiswa"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/mahasiswa/rekomendasi"><i class="fa fa-bar-chart-o"></i>Rekomendasi</a></li>
				<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/mahasiswa/pkli"><i class="fa fa-table"></i>Program PKLI</a></li>
				<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/logout"><i class="fa fa-sign-out"></i>Keluar</a></li>
				</ul>
			</div>
			<?php echo $content; ?>
			<div class="footer">
				 <div class="footer-left"><span> Copyright &copy; <?php echo date('Y'); ?> SIC 2013 All Rights Reserved</span></div>
				 <div class="footer-right"><span><?php echo Yii::powered(); ?></span></div>
			</div>
		</div>
	  	<script>
	  		$(function() {
			  $('.dropdown-toggle').dropdown();
			  $('.dropdown input, .dropdown label').click(function(e) {
			    e.stopPropagation();
			  });
			});
	  	</script>
	</body>
</html>