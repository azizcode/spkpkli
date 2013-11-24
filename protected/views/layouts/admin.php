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
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tiny/tinymce.min.js"></script>

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
							<span class="glyphicon-class">Halaman Admin</span>
						</a>
		  	</nav><!-- /.navbar-collapse -->
		</header>
		<div id="wrapper">
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
				<li class="active sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
				<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/laporan"><i class="fa fa-table"></i>Laporan</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>Kelola User<b class="caret"></b></a>
					<ul class="dropdown-menu">
                    	<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/datamahasiswa"><i class="fa fa-caret-right "></i>Mahasiswa</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/datainstansi"><i class="fa fa-caret-right "></i>Instansi</a></li>
						</li>
                    </ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>Pengumuman<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/input"><i class="fa fa-caret-right "></i>Input Pengumuman</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/pengumuman"><i class="fa fa-caret-right "></i>View Pengumuman</a></li>
					</ul>
				</li>	

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
  			$('.detail-instansi').click(function(e) {
				e.preventDefault();
				var id = $(this).attr('detail-instansi');
				$.getJSON("<?php echo Yii::app()->request->baseUrl; ?>/admin/profilinstansi/"+id, function(json) {
	                $.each(json, function(k, v) {    
						$('#nama-instansi').text(json.nama);
						$('#jenis-instansi').text(json.jenis);
						$('#alamat-instansi').text(json.alamat);
						$('#telepon-instansi').text(json.telepon);
						$('#email-instansi').text(json.email);
	                });
				});
			});
			$('.detail-mahasiswa').click(function(e) {
				e.preventDefault();
				var id = $(this).attr('detail-mahasiswa');
				$.getJSON("<?php echo Yii::app()->request->baseUrl; ?>/admin/profilmahasiswa/"+id, function(json) {
	                $.each(json, function(k, v) {    
						$('#nama-mahasiswa').text(json.nama);
						$('#nim-mahasiswa').text(json.nim);
						$('#alamat-mahasiswa').text(json.alamat);
						$('#telepon-mahasiswa').text(json.telepon);
						$('#email-mahasiswa').text(json.email);
	                });
				});
			});
			  $('.dropdown-toggle').dropdown();
			  $('.dropdown input, .dropdown label').click(function(e) {
			    e.stopPropagation();
			  });
			});
	  	</script>
	</body>
</html>