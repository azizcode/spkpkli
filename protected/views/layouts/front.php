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

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
		  	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav col-md-10 col-xs-7">
					<li class="menu <?php if($this->action=='home'){ ?>odd<?php } ?>">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>">
							<span class="glyphicon glyphicon-home"></span>
							<span class="glyphicon-class">Home</span>
						</a>
					</li>
					<li class="menu <?php if($this->action=='pengumuman'){ ?>odd<?php } ?>">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/pengumuman">
							<span class="glyphicon glyphicon-warning-sign"></span>
							<span class="glyphicon-class">Pengumuman</span>
						</a>
					</li>
					<li class="menu <?php if($this->action=='about'){ ?>odd<?php } ?>">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/about">
							<span class="glyphicon glyphicon-info-sign"></span>
							<span class="glyphicon-class">About</span>
						</a>
					</li>
					<li class="dropdown menu pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
						<i class="glyphicon glyphicon-user" style="padding-right:4px;"></i><?php if(!empty($this->identitas)){ echo $this->identitas->Nama_instansi; }else{ echo"Akun"; } ?><b class="caret"></b>
						</a> 
						<div class="dropdown-menu col-md-9">
							<?php if(!empty($this->user)){ ?>
								<?php $form=$this->beginWidget('CActiveForm', array(
								  'enableClientValidation'=>true,
								  'clientOptions'=>array(
								  'validateOnSubmit'=>true,
								  'htmlOptions' => array("class"=>"form-horizontal",'role' => 'form'),
								  ),
								  )); ?>
								<?php echo $form->error($this->user,'login'); ?>  
								<div class="row login">
									<div class="col-md-4">Username</div>
									<div class="col-md-8">
										<?php echo $form->textField($this->user,'username',array('class'=>'form-control','required'=>'required')); ?>
									</div>
								</div>
								<div class="row login">
									<div class="col-md-4">Password</div>
									<div class="col-md-8">
										<?php echo $form->passwordField($this->user,'password',array('class'=>'form-control','required'=>'required')); ?>
									</div>
								</div>
								<div class="row" style="margin-top:6px;">
									<div class="col-md-6"><button type="submit" class="btn btn-primary">Masuk</button></div>
									<div class="col-md-6"><button class="btn btn-success pull-right" onclick="location.href = 'daftar';">Daftar</button></div>
								</div>
							<?php $this->endWidget(); ?>

							<?php } ?>	
						</div>
					</li>	
				</ul>
		  	</div><!-- /.navbar-collapse -->
		</nav>
		<?php if(isset($this->admin) && $this->admin->level!='admin'){ ?>
			<div id="wrapper">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
					<li class="active sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/instansi"><i class="fa fa-bar-chart-o"></i>Instansi</a></li>
					<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/pengumuman"><i class="fa fa-bar-chart-o"></i>Pengumuman</a></li>
					<li class="sidebar"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/slider"><i class="fa fa-table"></i>Slider</a></li>
					</ul>
				</div>
			</div>
		<?php } ?>
		<?php echo $content; ?>
		<div class="footer">
	 		 <div class="footer-left"><span> Copyright &copy; <?php echo date('Y'); ?> SIC 2013 All Rights Reserved</span></div>
	 		 <div class="footer-right"><span><?php echo Yii::powered(); ?></span></div>
	  	</div>
<<<<<<< HEAD
		</div>
=======
	  </div>
>>>>>>> 37ee3ac26c7a66cb5c26b0dd57ac0f6f52886657
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