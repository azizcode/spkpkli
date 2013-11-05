<div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Pendaftaran Instansi</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="well">
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
                      <?php echo $form->textField($instansi,'Nama_instansi',array('class'=>'form-control')); ?>
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
                    <?php echo $form->labelEx($instansi,'Alamat',array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                      <?php echo $form->textField($instansi,'Alamat',array('class'=>'form-control')); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <?php echo $form->labelEx($instansi,'No_tlp',array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                      <?php echo $form->textField($instansi,'No_tlp',array('class'=>'form-control')); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <?php echo $form->labelEx($user,'username',array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                      <?php echo $form->textField($user,'username',array('class'=>'form-control')); ?>
                    </div>
                  </div>

                   <div class="form-group">
                    <?php echo $form->labelEx($user,'password',array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                      <?php echo $form->textField($user,'password',array('class'=>'form-control')); ?>
                    </div>
                  </div> 

                  <div class="form-group">
                    <label for="konfirmasi" class="col-lg-2 control-label">Konfirmasi Password</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="konfirmasi">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <?php echo $form->labelEx($instansi,'email',array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                      <?php echo $form->textField($instansi,'email',array('class'=>'form-control')); ?>
                    </div>
                  </div>
                 <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Batal</button> 
                      <button type="submit" class="btn btn-primary">Masuk</button> 
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