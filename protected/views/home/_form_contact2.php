<!-- start form c -->
<div class="box-form tl-contact-form">
  <div class="mw665">
    <div class="text-left">
  <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                  'type'=>'',
                  'enableAjaxValidation'=>false,
                  'clientOptions'=>array(
                      'validateOnSubmit'=>false,
                  ),
                  'htmlOptions' => array(
                      'enctype' => 'multipart/form-data',
                  ),
              )); ?>
   <?php echo $form->errorSummary($model, '', '', array('class'=>'alert alert-danger')); ?>
    <?php if(Yii::app()->user->hasFlash('success')): ?>
        <?php $this->widget('bootstrap.widgets.TbAlert', array(
            'alerts'=>array('success'),
        )); ?>
    <?php endif; ?>

    <div class="row default">
      <div class="col-md-30 col-sm-30">
        <div class="form-group">
            <!-- <label for="exampleInputName">Nama</label> -->
            <?php echo $form->textField($model, 'name', array('class'=>'form-control', 'placeholder'=>'Name')); ?>
        </div>
      </div>
      <div class="col-md-30 col-sm-30">
        
        <div class="form-group">
            <!-- <label for="exampleInputCompany">Perusahaan</label> -->
            <?php echo $form->textField($model, 'company', array('class'=>'form-control', 'placeholder'=>'Company')); ?>
        </div>
      </div>
    </div>

    <div class="row default">
      <div class="col-md-30 col-sm-30">
        <div class="form-group">
            <!-- <label for="exampleInputEmail">Email</label> -->
            <?php echo $form->textField($model, 'email', array('class'=>'form-control', 'placeholder'=>'Email')); ?>
        </div>
      </div>
      <div class="col-md-30 col-sm-30">
        <div class="form-group">
          <!-- <label for="exampleInputPhone">Telepon</label> -->
          <?php echo $form->textField($model, 'phone', array('class'=>'form-control', 'placeholder'=>'Telephone')); ?>
        </div>
      </div>
    </div>

    <div class="row default">
      <div class="col-md-60">
        <div class="form-group">
            <!-- <label for="exampleInputMessage">Pesan</label>  -->
            <div class="clear"></div>
            <?php echo $form->textArea($model, 'body', array('class'=>'form-control', 'rows'=>3, 'placeholder'=> 'Message')); ?>
        </div>
      </div>
      <div class="clear"></div>

      <div class="col-md-60">
        <div class="row default">
          <div class="col-md-30 col-sm-30">
            <div class="text-left">
              <div class="form-group mb-0">
                <div class="text-left">
                  <div class="g-recaptcha" data-sitekey="6Lc5ExQUAAAAALB4V8LnnmdlQT8TYGIqNqXWZ_Rf"></div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div class="col-md-30 col-sm-30">
            <div class="text-right">
              <button type="submit" class="btn btn-info btns-submit-bt">Submit Inquiry &nbsp;<i class="fa fa-chevron-right"></i></button>
            </div>
          </div>
        </div>

      </div>
    </div>

  <?php $this->endWidget(); ?>
      <div class="clear height-30"></div>
    <div class="clear"></div>
  </div>

  <div class="clear"></div>
</div>

<div class="clear"></div>
</div>
<!-- end form c -->
<script src='https://www.google.com/recaptcha/api.js'></script>