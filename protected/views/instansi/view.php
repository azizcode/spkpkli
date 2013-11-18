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
                    <?php foreach ($program as $list) { ?>
                    <tr>
                    <td><?php echo $ahli[$list->Bidang_Keahlian]; ?></td>
                    <td><?php echo $list->Jumlah_peserta; ?></td>
                    <td>
                      <?php
                        $date= date_create($list->awal);
                        echo $awal = date_format($date, 'd-m-Y'); 
                      ?>
                    </td>
                    <td>
                      <?php 
                        $date=date_create($list->akhir);
                        echo $akhir = date_format($date, 'd-m-Y'); 
                      ?>
                    </td>
                    <td><?php echo $list->keterangan; ?></td>
                    <td><a href="<?php echo Yii::app()->request->baseUrl.'/instansi/input/edit/'.$list->Id_program_pkli; ?>">Edit</a>
                       | <a href="#myModal2" data-toggle="modal" data-target="#myModal2">Delete</a>
                       | <a href="#myModal" data-toggle="modal" data-target="#myModal">Detail</a></td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
            </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog2">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><b>Detail Peserta PKLI</b></h4>
                      </div>
                      <div class="modal-body">
                      <table class="table table-bordered table-hover tablesorter">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Alamat Malang</th>
                            <th>Nomer telpon</th>
                            <th>E-mail</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Novi Anto</td>
                            <td>10650098</td>
                            <td>Merjosari</td>
                            <td>085607070290</td>
                            <td>novianto74@gmail.com</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Konfirmasi Delete </h4>
                      </div>
                      <div class="modal-body">
                        Apakah Anda yakin ingin menghapus ini ?
                      </div>
                      <div class="modal-footer">
                        <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                        <a href="<?php echo Yii::app()->request->baseUrl.'/instansi/input/delete/'.$list->Id_program_pkli; ?>" type="button" class="btn btn-primary">Delete</a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            <?php $this->endWidget(); ?>  
          </div>
          </div>
          </div>
        </div><!-- /.row -->