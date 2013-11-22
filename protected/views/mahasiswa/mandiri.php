<?php $jenis= array('1'=>'Sekolah', '2'=>'Perusahaan', '3'=>'Pemerintah', '4' => 'Lain-lain'); ?>

  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
      <ol class="breadcrumb-inp">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
          </div>
        </div><!-- /.row -->
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>PKLI Mandiri</h1>
<!-- Forms
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="well">
				<?php echo Yii::app()->user->getFlash('status'); ?>
						<?php $form=$this->beginWidget('CActiveForm', array(
						'enableClientValidation'=>true,
						'clientOptions'=>array(
						'validateOnSubmit'=>true,
						'htmlOptions' => array("class"=>"form-horizontal",'role' => 'form'),
						),
						)); ?>
							<fieldset>
								<div class="form-group">
									<?php echo $form->labelEx($instansi,'Nama_instansi',array('class'=>'col-lg-2 control-label')); ?>
									<div class="col-lg-10">
										<?php echo $form->textField($instansi,'Nama_instansi',array('class'=>'form-control','required'=>'required')); ?>
									</div>
								</div>
								<div class="form-group">
									<label for="select" class="col-lg-2 control-label">Jenis Perusahan</label>
									<div class="col-lg-10">
										<?php echo $form->dropDownList($instansi,'Jenis_instasni', $j_instansi,array('class'=>'form-control','id' => 'select','required'=>'required')); ?>
									</div>
								</div>
								<div class="form-group">
									<?php echo $form->labelEx($instansi,'Alamat',array('class'=>'col-lg-2 control-label')); ?>
									<div class="col-lg-10">
										<?php echo $form->textArea($instansi,'Alamat',array('class'=>'form-control','required'=>'required')); ?>
									</div>
								</div>
								<div class="form-group">
									<?php echo $form->labelEx($instansi,'No_tlp',array('class'=>'col-lg-2 control-label')); ?>
									<div class="col-lg-10">
										<?php echo $form->textField($instansi,'No_tlp',array('class'=>'form-control','required'=>'required')); ?>
									</div>
								</div>
								<div class="form-group">
									<?php echo $form->labelEx($instansi,'email',array('class'=>'col-lg-2 control-label')); ?>
									<div class="col-lg-10">
									<?php echo $form->textField($instansi,'email',array('class'=>'form-control','required'=>'required')); ?>
									</div>
								</div>
								<div class="form-group">
								  <label for="select" class="col-lg-2 control-label">Bidang Keahlian</label>
									<div class="col-lg-10">
										<?php echo $form->dropDownList($program_pkli,'Bidang_Keahlian', $b_keahlian,array('class'=>'form-control','id' => 'select','required'=>'required')); ?>
									</div>
									</div>

								   <div class="form-group">
									<label for="inputEmail" class="col-lg-2 control-label">Jumlah Peserta</label>
									<div class="col-lg-10">
									  <?php echo $form->textField($program_pkli,'Jumlah_peserta',array('class'=>'form-control')); ?>
									</div>
								  </div> 
								  
								  <div class="form-group">
									<label for="inputEmail" class="col-lg-2 control-label"> Awal Pelaksanaan</label>
										  <div class="col-lg-10">
										  <div class='input-group date' id='datetimepicker5'>
										  <?php echo $form->textField($program_pkli,'awal',array('class'=>'form-control','data-format'=>"DD-MM-YYYY" )); ?>
										  <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
										  </span>
										  </div>
										  <script type="text/javascript">
										  $(function () {
										  $('#datetimepicker5').datetimepicker({
										  });
										  });
										  </script>
										  </div>
								  </div>

								  <div class="form-group">
									<label for="inputEmail" class="col-lg-2 control-label"> Akhir Pelaksanaan</label>
										  <div class="col-lg-10">
										  <div class='input-group date' id='datetimepicker6'>
										  <?php echo $form->textField($program_pkli,'akhir',array('class'=>'form-control','data-format'=>"DD-MM-YYYY")); ?>
										  <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
										  </span>
										  </div>
										  <script type="text/javascript">
										  $(function () {
										  $('#datetimepicker6').datetimepicker({
										  pickTime: false
										  });
										  });
										  </script>
										  </div>
								  </div>

								  <div class="form-group">
									<label for="textArea" class="col-lg-2 control-label">Keterangan</label>
									<div class="col-lg-10">
									  <?php echo $form->textArea($program_pkli,'keterangan',array('class'=>'form-control')); ?>
									  <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
									</div>
								  </div>
								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<button type="submit" class="btn btn-primary">Kirim</button>
										<button type="reset" class="btn btn-danger">Batal</button> 
									</div>
								</div>
							</fieldset>
						<?php $this->endWidget(); ?> 
          </div>
        </div>
      </div>
          </div>
          </div>
        </div><!-- /.row -->