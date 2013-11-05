<div id="wrapper-inp">

      <!-- Sidebar -->
      <div id="wrapper-inp">
<div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
          <li style="
            padding: 7;
            color: rgb(170, 168, 168);
              ">Navigation</li>
          <li class="active sidebar"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="sidebar"><a href="#"><i class="fa fa-bar-chart-o"></i>Input</a></li>
          <li class="sidebar"><a href="#"><i class="fa fa-table"></i>View</a></li>
          <li class="sidebar"><a href="#"><i class="fa fa-table"></i>Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>    
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
              'clientOptions'=>array(
              'validateOnSubmit'=>true,
              'htmlOptions' => array("class"=>"form-horizontal",'role' => 'form'),
              ),
              )); ?>

                <fieldset>
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Nama Instansi</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="namaInstansi">
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="select" class="col-lg-2 control-label">Jenis Perusahan</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Lain-Lain</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="lain">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Alamat Instansi</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="namaInstansi">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Nomor Telpon</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="namaInstansi">
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
                    <label for="inputEmail" class="col-lg-2 control-label">Waktu Pelaksanaan</label>
                    <div class="col-lg-10">
                      <?php echo $form->textField($program_pkli,'Waktu_pelaksanaan',array('class'=>'form-control')); ?>
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
                      <button class="btn btn-default">Cancel</button> 
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

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>