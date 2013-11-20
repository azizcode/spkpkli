<div id="page-wrapper">
	<div class="table-responsive col-lg-12">
		 <?php echo Yii::app()->user->getFlash('status'); ?>
              <?php $form=$this->beginWidget('CActiveForm', array(
              'enableClientValidation'=>true,
              'clientOptions'=>array(//.;
              'validateOnSubmit'=>true,
              'htmlOptions' => array("class"=>"form-horizontal",'role' => 'form'),
              ),
              )); ?>
		<h3 align="center">Input Pengumuman</h3>
		<!-- Place inside the <head> of your HTML -->
		<div class="form-group">
						<label class="control-label" for="typeahead">Judul</label>
						  <div class="controls">
								<?php echo $form->textField($pengumuman,'judul',array('class'=>'form-control')); ?>
						  </div>
					</div>
		<script type="text/javascript">
			tinymce.init({
			        selector: "textarea",
			        plugins: [
			                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
			                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
			        ],

			        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
			        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
			        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

			        menubar: false,
			        toolbar_items_size: 'small',

			        style_formats: [
			                {title: 'Bold text', inline: 'b'},
			                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			                {title: 'Example 1', inline: 'span', classes: 'example1'},
			                {title: 'Example 2', inline: 'span', classes: 'example2'},
			                {title: 'Table styles'},
			                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
			        ],

			        templates: [
			                {title: 'Test template 1', content: 'Test 1'},
			                {title: 'Test template 2', content: 'Test 2'}
			        ]
			});</script>

			    <?php echo $form->textArea($pengumuman,'isi',array('class'=>'form-control')); ?>

			<div class="form-group">
				<label class="control-label" for="userfile">Gambar Sampul</label>
				  <div class="controls">
					<?php echo $form->fileField($pengumuman,'cover',array('class'=>'form-control')); ?>
				  </div>
			</div>

			<div class="form-actions">
			  <button type="submit" class="btn btn-primary">Tambah</button>
			  <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/input" class="btn">Cancel</a>
			</div>
			 <?php $this->endWidget(); ?>  

		</div>
</div>

