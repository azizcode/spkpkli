  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
			<ol class="breadcrumb-inp">
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </div>
        </div><!-- /.row -->
<div id="page-wrapper">
     <div class="row">
          <div class="col-lg-12">
            <h2>Data Mahasiswa</h2>
				<?php echo Yii::app()->user->getFlash('status'); ?>
				<button type="button" class="btn btn-primary pull-right" onclik="#myModal3" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-import"></span> Import Data Mahasiswa</button>
				<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Import Data Mahasiswa </h4>
                      </div>
                      <div class="modal-body">
						   <form role="form">
							  <div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">tipe file sql.</p>
							  </div>
							  <button type="submit" class="btn btn-default">Submit</button>
							</form>
                      </div>
                      <div class="modal-footer">
                        <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
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
							  </label>/
							  <a href="#myModal" data-toggle="modal" data-target="#myModal">Detail</a>
							</div>
						</td>
					  </tr>
					  <?php } ?>
					</tbody>
				  </table>
				  <input class="pull-right" type="submit" name="update"/>
				 </form>
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
                        <a href="" type="button" class="btn btn-primary">Delete</a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
          </div>
          </div>
          </div>
        </div><!-- /.row -->