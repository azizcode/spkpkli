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
            <h1>Input<small>Kebutuhan</small></h1>
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
              'clientOptions'=>array(//.;
              'validateOnSubmit'=>true,
              'htmlOptions' => array("class"=>"form-horizontal",'role' => 'form'),
              ),
              )); ?>

                <fieldset>
                  <div class="row">
                    <label class="col-lg-2">Nama Instansi</label>
                    <div class="col-lg-10 ">
                      <?php echo $this->identitas->Nama_instansi ?>
                    </div>
                  </div>

                  <div class="row">
                  <label class="col-lg-2 ">Jenis Perusahan</label>
                    <div class="col-lg-10 ">
                      <?php echo $jenis[$this->identitas->Jenis_instasni]; ?>
                    </div>
                    </div>

                   <div class="row">
                    <label class="col-lg-2">Alamat Instansi</label>
                    <div class="col-lg-10 ">
                      <?php echo $this->identitas->Alamat ?>
                    </div>
                  </div>

                   <div class="row">
                    <label class="col-lg-2 ">Nomor Telpon</label>
                    <div class="col-lg-10 ">
                      <?php echo $this->identitas->No_tlp ?>
                    </div>
                  </div>

                  <div class="row">
                  <label for="select" class="col-lg-2 control-label">Bidang Keahlian</label>
                    <div class="col-lg-10">
                        <?php echo $form->dropDownList($program_pkli,'Bidang_Keahlian', $b_keahlian,array('class'=>'form-control','id' => 'select','required'=>'required')); ?>
                    </div>
                    </div>

                   <div class="row">
                    <label for="inputEmail" class="col-lg-2 control-label">Jumlah Peserta</label>
                    <div class="col-lg-10">
                      <?php echo $form->textField($program_pkli,'Jumlah_peserta',array('class'=>'form-control')); ?>
                    </div>
                  </div> 
                  
                  <div class="row">
                    <label for="inputEmail" class="col-lg-2 control-label"> Awal Pelaksanaan</label>
                          <div class="col-lg-10">
                          <div class='input-group date' id='datetimepicker5'>
                          <?php $program_pkli->awal = strtotime($program_pkli->awal); ?>
                          <?php $program_pkli->awal = date("d-m-Y", $program_pkli->awal); ?>
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

                  <div class="row">
                    <label for="inputEmail" class="col-lg-2 control-label"> Akhir Pelaksanaan</label>
                          <div class="col-lg-10">
                          <div class='input-group date' id='datetimepicker6'>
                          <?php $program_pkli->akhir = date("d-m-Y",strtotime($program_pkli->akhir)); ?>
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

                  <div class="row">
                    <label for="textArea" class="col-lg-2 control-label">Keterangan</label>
                    <div class="col-lg-10">
                      <?php echo $form->textArea($program_pkli,'keterangan',array('class'=>'form-control')); ?>
                      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                  </div>
                 <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                      <a href="<?php echo Yii::app()->request->baseUrl; ?>/instansi/view" class="btn btn-default">Cancel</a> 
                      <button type="submit" class="btn btn-primary">Submit</button> 
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