<div id="page-wrapper">
     <div class="row">
          <div class="col-lg-12">
          <button type="button" class="btn btn-primary pull-right" onclik="#myModal3" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-import"></span> Import Data Mahasiswa</button>
          <button type="button" class="btn btn-primary pull-right" onclik="#input-mahasiswa" data-toggle="modal" data-target="#input-mahasiswa"><span class="glyphicon glyphicon-import"></span> Input Data Mahasiswa</button>
          <a href="<?php echo Yii::app()->request->baseUrl.'/admin/nilai'; ?>" class="btn btn-primary pull-right" ><span class="glyphicon glyphicon-import"></span> Input Nilai Mahasiswa</a>
            <h2>Data Mahasiswa</h2>
				<?php echo Yii::app()->user->getFlash('status'); ?>
				<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Import Data Mahasiswa </h4>
                      </div>
                      <div class="modal-body">
        						  <?php echo CHtml::form('','post',array('enctype'=>'multipart/form-data','role'=>'form')); ?>
        							  <div class="row">
        								<label for="exampleInputFile">File input</label>
        								<?php echo CHtml::activeFileField($upload, 'file'); ?>
        								<p class="help-block">tipe file sql.</p>
        							  </div>
        							  <button type="submit" class="btn btn-default">Submit</button>
        							<?php echo CHtml::endForm(); ?>
                      </div>
                      <div class="modal-footer">
                        <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
           <div class="modal fade" id="data-mahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <div class="modal-dialog2">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel2"><b>Detail Peserta PKLI</b></h4>
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
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
           <div class="modal fade" id="input-mahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <div class="modal-dialog2">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel2"><b>Input Data Mahasiswa</b></h4>
                </div>
                <div class="modal-body">
                <div class="bs-docs-section">
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
                          <div class="row">
                            <label class="col-lg-3 control-label">NIM</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'NIM',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Nama Lengkap</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Nama_lengkap',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Jenis Kelamin</label>
                            <div class="col-lg-9">
                            <?php echo $form->radioButton($mahasiswa,'Jenis_kelamin',array('value'=>'laki-laki','uncheckValue'=>null )); ?><label>Laki-Laki</label>
                            <?php echo $form->radioButton($mahasiswa,'Jenis_kelamin',array('value'=>'perempuan','uncheckValue'=>null )); ?><label>Perempuan</label>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Tempat Lahir</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Tempat_lahir',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label"> Tanggal Lahir</label>
                                  <div class="col-lg-9">
                                  <div class='input-group date' id='datetimepicker5'>
                                  <?php $mahasiswa->Tanggal_lahir = strtotime($mahasiswa->Tanggal_lahir); ?>
                                  <?php $mahasiswa->Tanggal_lahir = date("d-m-Y", $mahasiswa->Tanggal_lahir); ?>
                                  <?php echo $form->textField($mahasiswa,'Tanggal_lahir',array('class'=>'form-control','data-format'=>"DD-MM-YYYY" )); ?>
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
                            <label class="col-lg-3 control-label">Nama Orangtua</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Nama_orangtua',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Pekerjaan orangtua</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Pekerjaan_orangtua',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Alamat orangtua</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Alamat_orangtua',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Kota Orangtua</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Kota_orangtua',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Provinsi Orangtua</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Profinsi_orangtua',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Tahun Masuk</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Tahun_masuk',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Pendidikan Terakhir</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Pendidikan_terakhir',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Alamat Malang</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Alamat_dmalang',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Alamat Asal</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Alamat_asal',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">No Telepon</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'No_tlp',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-lg-3 control-label">Email</label>
                            <div class="col-lg-9">
                            <?php echo $form->textField($mahasiswa,'Email',array('class'=>'form-control')); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
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
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
				<div class="table-responsive">
				<form role="form" method="post">
				  <table class="table table-bordered table-hover tablesorter">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Username</th>
						<th>Level</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
						 <?php foreach ($user as $list) { ?>
						<tr>
						<td><?php echo $list->id_user; ?></td>
						<td><?php echo $list->username; ?></td>
						<td><?php echo $list->Level; ?></td>
						<td>
							<div class="checkbox">
							  <label>
								<input type="checkbox" name="status[<?php echo $list->id_user; ?>]" <?php if($list->status=='1'){ ?>checked="checked"<?php } ?>>
								Aktif
							  </label>||
							  <a href="" class="detail-mahasiswa linktabel" data-toggle="modal" data-target="#data-mahasiswa" detail-mahasiswa="<?php echo $list->username; ?>" > Detail</a>
							</div>
						</td>
					  </tr>
					  <?php } ?>
					</tbody>
				  </table>
				  <input class="pull-right btn btn-primary pull-right" type="submit" name="update"/>
				 </form>
				</div>
        </div>
        </div>
        </div>
