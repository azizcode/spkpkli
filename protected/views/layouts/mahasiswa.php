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
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.0.3.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/moment.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modal.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/locales/bootstrap-datetimepicker.id.js"></script>
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
						<a href="" data-toggle="modal" data-target="#modal-mahasiswa" class="detail-mahasiswa"> 
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
			<div class="modal fade" id="modal-mahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog2">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><b>Profile Mahasiswa</b></h4>
              </div>
              <div class="modal-body">
            	<table class="table table-bordered table-hover table-striped tablesorter">
	                  <tr><td>Nama </td><td id="nama-mahasiswa"></td></tr>
	                  <tr><td>NIM</td><td id="nim-mahasiswa"></td></tr>
	                  <tr><td>Alamat</td><td id="alamat-mahasiswa"></td></tr>
	                  <tr><td>Nomor Telepon</td><td id="telepon-mahasiswa"></td></tr>
	                  <tr><td>E-mail</td><td id="email-mahasiswa"></td></tr> 
	             </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
              </div>
            </div><!-- /.modal-content -->
          </div>
        </div>
		
		<script>
			$(function() {
				$('.detail-mahasiswa').click(function(e) {
					e.preventDefault();
					$.getJSON("<?php echo Yii::app()->request->baseUrl; ?>/mahasiswa/profil", function(json) {
		                $.each(json, function(k, v) {    
							$('#nama-mahasiswa').text(json.nama);
							$('#nim-mahasiswa').text(json.nim);
							$('#alamat-mahasiswa').text(json.alamat);
							$('#telepon-mahasiswa').text(json.telepon);
							$('#email-mahasiswa').text(json.email);
		                });
					});
				});
			$('.detail-instansi').click(function(e) {
				e.preventDefault();
				var url = $(this).attr('data-instansi');
				$.getJSON("<?php echo Yii::app()->request->baseUrl; ?>/mahasiswa/detailpkli/"+url, function(json) {
					$.each(json, function(k, v) {    
						$('#nama-instansi').text(json.nama);
						$('#alamat-instansi').text(json.alamat);
						$('#bidang-keahlian').text(json.bidang);
						$('#pelaksanaan').text(json.pelaksanaan);
						$('#kuota').text(json.kuota);
						$('#terdaftar').text(json.terdaftar);
						$('#tersedia').text(json.tersedia);
						$('#telepon-instansi').text(json.telepon);
						$('#keterangan').text(json.keterangan);
					});
				});
			});
			  $('.dropdown-toggle').dropdown();
			  $('.dropdown input, .dropdown label').click(function(e) {
			    e.stopPropagation();
			  });
			});
	  	</script>
			<div class="footer">
				 <div class="footer-left"><span> Copyright &copy; <?php echo date('Y'); ?> SIC 2013 All Rights Reserved</span></div>
				 <div class="footer-right"><span><?php echo Yii::powered(); ?></span></div>
			</div>
		</div>
	</body>	
</html>
