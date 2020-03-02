<?php
    $model = new ContactForm;
    $model->scenario = 'insert';

    if(isset($_POST['ContactForm']))
    {
      $model->attributes=$_POST['ContactForm'];

      if($model->validate())
      {
        // config email
        $messaged = $this->renderPartial('//mail/contact2',array(
          'model'=>$model,
        ),TRUE);
        $config = array(
          'to'=>array($model->email, $this->setting['email'], $this->setting['contact_email']),
          'subject'=>'[Gapura Surya] Contact from '.$model->email,
          'message'=>$messaged,
        );
        if ($this->setting['contact_cc']) {
          $config['cc'] = array($this->setting['contact_cc']);
        }
        if ($this->setting['contact_bcc']) {
          $config['bcc'] = array($this->setting['contact_bcc']);
        }
        // kirim email
        Common::mail($config);

        Yii::app()->user->setFlash('success','Thank you for contact us. We will respond to you as soon as possible.');
        $this->refresh();
      }

    }

?>
<section class="block_bottom_banner_fcs">
    <div class="prelatife container">
      <div class="insides">
        <div class="row">
          <div class="col-md-4">
            <div class="block_info_left">
              <div class="pict fleft padding-right-15">
                <img src="<?php echo $this->assetBaseurl ?>pict_human_left_green_bannerFcs.png" alt="">
              </div>
              <div class="fleft descs">
                <span>Need more information</span>
                <p>We will help you for further information, please leave your contact details.</p>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="clear height-40"></div>
            <div class="bx_form_banner">
              <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                'type'=>'inline',
                'enableAjaxValidation'=>false,
                'clientOptions'=>array(
                    'validateOnSubmit'=>false,
                ),
                'htmlOptions' => array(
                    'enctype' => 'multipart/form-data',
                ),
            )); ?>
              <?php echo $form->errorSummary($model, '', '', array('class'=>'alert alert-danger', 'role'=>'alert')); ?>
              <?php if(Yii::app()->user->hasFlash('success')): ?>
                  <?php $this->widget('bootstrap.widgets.TbAlert', array(
                      'alerts'=>array('success'),
                  )); ?>
              <?php endif; ?>

                <div class="form-group">
                  <label for="">NAME</label><div class="clear"></div>
                  <?php echo $form->textField($model, 'name', array('class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                  <label for="">EMAIL</label><div class="clear"></div>
                  <?php echo $form->textField($model, 'email', array('class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                  <label for="">MOBILE PHONE</label><div class="clear"></div>
                  <?php echo $form->textField($model, 'phone', array('class'=>'form-control')); ?>
                </div>
                <div class="form-group last">
                  <label for="">&nbsp;</label><div class="clear"></div>
                  <button class="btn btn-default">SUBMIT</button>
                </div>
              <?php $this->endWidget(); ?>
              <div class="clear"></div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section>