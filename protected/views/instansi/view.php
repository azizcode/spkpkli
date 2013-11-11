<?php $ahli = array('1'=>'Pemrogramman', '2'=>'Jaringan', '3'=>'Hardware', '4' => 'Sistem Informasi','5'=>'Multimedia'); ?>
  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
      <ol class="breadcrumb-inp">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
          </div>
        </div><!-- /.row -->
      <div id="page-wrapper">
<!-- Forms
      ================================================== -->
     <div class="row">
          <div class="col-lg-12">
            <h2>View Peserta Program PLKI</h2>
            <?php echo Yii::app()->user->getFlash('status'); ?>
              <?php $form=$this->beginWidget('CActiveForm', array(
              'enableClientValidation'=>true,
              'clientOptions'=>array(//.;
              'validateOnSubmit'=>true,
              'htmlOptions' => array("class"=>"form-horizontal",'role' => 'form'),
              ),
              )); ?>
            <div class="table-responsive">
              <table class="table table-bordered table-hover tablesorter">
                <thead>
                  <tr>
                    <th>Bidang Keahlian</th>
                    <th>Jumlah Peserta</th>
                    <th>Awal Pelaksanaan</th>
                    <th>Akhir Pelaksanaan</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php foreach ($program as $list) { ?>
                    <td><?php echo $ahli[$list->Bidang_Keahlian]; ?></td>
                    <td><?php echo $list->Jumlah_peserta; ?></td>
                    <td><?php echo $list->awal; ?></td>
                    <td><?php echo $list->akhir; ?></td>
                    <td><?php echo $list->keterangan; ?></td>
                    <td><a href="<?php echo Yii::app()->request->baseUrl.'/instansi/input/edit/'.$list->Id_program_pkli; ?>">Edit</a><a href="">Delete</a><a href="">Detail</a></td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
            </div>
            <?php $this->endWidget(); ?>  
          </div>
          </div>
          </div>
        </div><!-- /.row -->
