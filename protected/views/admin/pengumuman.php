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
				<h2><i class="icon-edit"></i>Tambah Pengumuman</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				</div>
			<div class="box-content">
				<form class="form-horizontal" action="aksi/insert/tulisan" method="POST" enctype="multipart/form-data">
				  <fieldset>
					<div class="form-group">
						<label class="control-label" for="typeahead">Judul</label>
						  <div class="controls">
								<input type="text" name="judul" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
						  </div>
					</div>
					<div class="form-group">
						<label class="control-label" for="userfile">Gambar Sampul</label>
						  <div class="controls">
							<input class="input-file uniform_on" id="userfile" type="file" name="userfile" required="required">
						  </div>
					</div>
					<div class="form-group">
					  <label class="control-label" for="textarea2">Tulisan</label>
					  <div class="controls">
						<textarea id="elm1" name="elm1" rows="20" cols="80" style="width: 100%"></textarea>
					  </div>
					</div>
					<div class="form-group">
						  <div class="controls">
							<div class="accordion" id="accordion2">
							  <div class="accordion-group">
								<div class="accordion-heading">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
									<h6><i class="icon-calendar"></i>Edit Waktu Terbit</h6>
								  </a>
								</div>
								<div id="collapseOne" class="accordion-body collapse">
								  <div class="accordion-inner">
										<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
											<input class="span8" size="16" type="text" name="edit_tanggal" >
											<span class="add-on"><i class="icon-th"></i></span>
									   </div>
										<div class="input-append bootstrap-timepicker-component" style="margin-left:-27px;">
											<input class="timepicker-1 input-small" type="text" name="jam"/><span class="add-on"><i class="icon-time"></i></span>
										</div>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
					</div>
					<div class="form-actions">
						  <button type="submit" class="btn btn-primary">Tambah</button>
						  <button type="reset" class="btn">Cancel</button>
					</div>
				  </fieldset>
				</form>   
			</div>
		</div>
	</div>
	</div>
</div>