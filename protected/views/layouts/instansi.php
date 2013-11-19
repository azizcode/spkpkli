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
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-datetimepicker.min.css">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.0.3.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/moment.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/locales/bootstrap-datetimepicker.id.js"></script>
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
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/instansi/pengumuman">
							<span class="glyphicon glyphicon-warning-sign"></span>
							<span class="glyphicon-class">Pengumuman</span>
						</a>
					</li>
					<li class="menu <?php if($this->action=='about'){ ?>odd<?php } ?>">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/instansi/about">
							<span class="glyphicon glyphicon-info-sign"></span>
							<span class="glyphicon-class">About</span>
						</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">	
					<li class="menu pull-right" style="border:none;">
						<a href="" data-toggle="modal" data-target="#modal-instansi" class="profinstansi"
							<span class="glyphicon glyphicon-user"></span>
							<span class="glyphicon-class"><?php echo $this->identitas->Nama_instansi; ?></span>
						</a>
					</li>	
				</ul>
		  	</nav><!-- /.navbar-collapse -->
		</header>
		<div id="wrapper">
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
				<li class="active sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/instansi/input"><i class="fa fa-bar-chart-o"></i>Input</a></li>
				<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/instansi/view"><i class="fa fa-bar-chart-o"></i>View</a></li>
				<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/logout"><i class="fa fa-sign-out"></i>Keluar</a></li>
				</ul>
			</div>
			<?php echo $content; ?>
			<div class="modal fade" id="modal-instansi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog2">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><b>Profile Instansi</b></h4>
              </div>
              <div class="modal-body">
            	<table class="table table-bordered table-hover table-striped tablesorter">
	                  <tr><td>Nama </td><td id="nama-instansi"></td></tr>
	                  <tr><td>Jenis Instansi</td><td id="jenis-instansi"></td></tr>
	                  <tr><td>Alamat</td><td id="alamat-instansi"></td></tr>
	                  <tr><td>Nomor Telepon</td><td id="telepon-instansi"></td></tr>
	                  <tr><td>E-mail</td><td id="email-instansi"></td></tr> 
	             </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
              </div>
            </div><!-- /.modal-content -->
          </div>
        </div>
			<div class="footer">
				<div class="footer-left"><span> Copyright &copy; <?php echo date('Y'); ?> SIC 2013 All Rights Reserved</span></div>
				<div class="footer-right"><span><?php echo Yii::powered(); ?></span></div>
			</div>
		</div>
	  	<script>
	  		$(function() {
				$('.detail-peserta').click(function(e) {
					$("#peserta > tbody").html("");
					e.preventDefault();
					var url = $(this).attr('data-program');
					$.getJSON("<?php echo Yii::app()->request->baseUrl; ?>/instansi/detailview/"+url, function(json) {
						$.each(json, function(k, v) {    
							$("#peserta").append("<tr><td>" + v.nim + "</td><td>" + v.nama + "</td><td>" + v.alamat + "</td><td>" + v.telp + "</td><td>" + v.email + "</td></tr>");
						});
					});
				});
				$('.profinstansi').click(function(e) {
					e.preventDefault();
					$.getJSON("<?php echo Yii::app()->request->baseUrl; ?>/instansi/profil", function(json) {
		                $.each(json, function(k, v) {    
							$('#nama-instansi').text(json.nama);
							$('#jenis-instansi').text(json.jenis);
							$('#alamat-instansi').text(json.alamat);
							$('#telepon-instansi').text(json.telepon);
							$('#email-instansi').text(json.email);
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