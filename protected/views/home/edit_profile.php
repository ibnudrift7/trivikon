<section class="outer_content_inside">

  <section class="top_section mb-5 py-5">
    <div class="prelatife container">
      <div class="inside">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-0">Profile</h2>
            <div class="clear clearfix"></div>
          </div>
          <div class="col-md-6">
            <nav aria-label="breadcrumb" class="nbreadcrumb text-right">
              <ol class="breadcrumb m-0 text-right">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
              </ol>
            </nav>
            <div class="clear clearfix"></div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section>

  <section class="middle-content">
    <div class="prelatife container">
      <div class="inside">
        
        <div class="row">
          <div class="col">
            <h5>View your Profile</h5>
          </div>
          <div class="col">
            <div class="text-right">
              <small><a href="#" onclick="window.history.back();" class="btn btn-link btns_back"><i class="fa fa-chevron-left"></i> BACK</a></small>
            </div>
          </div>
        </div>
        <div class="py-3"></div>

        <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id'=>'user-form',
            'type'=>'horizontal',
            'htmlOptions'=>array('class'=>'defaults_form_front'),
            'enableClientValidation'=>false,
            'clientOptions'=>array(
                'validateOnSubmit'=>false,
            ),
        )); ?>
        <?php echo CHtml::errorSummary($model, '', '', array('class'=>'alert alert-danger')); ?>
        <!-- start content -->
        <div class="form-group">
          <?php echo $form->labelEx($model, 'username', array('class'=>'')) ?>
          <?php echo $form->textField($model, 'username', array('class'=>'form-control', 'placeholder'=> 'Username')) ?>
        </div>
        <div class="form-group">
          <?php echo $form->labelEx($model, 'first_name', array('class'=>'')) ?>
          <?php echo $form->textField($model, 'first_name', array('class'=>'form-control', 'placeholder'=> 'Username')) ?>
        </div>
        <div class="form-group">
          <?php echo $form->labelEx($model, 'last_name', array('class'=>'')) ?>
          <?php echo $form->textField($model, 'last_name', array('class'=>'form-control', 'placeholder'=> 'Username')) ?>
        </div>
        <div class="form-group">
          <?php echo $form->labelEx($model, 'email', array('class'=>'')) ?>
          <?php echo $form->textField($model, 'email', array('class'=>'form-control', 'placeholder'=> 'Username')) ?>
        </div>
        <div class="form-group">
          <?php echo $form->labelEx($model, 'hp', array('class'=>'')) ?>
          <?php echo $form->textField($model, 'hp', array('class'=>'form-control', 'placeholder'=> 'Username')) ?>
        </div>
        <div class="form-group">
          <?php echo $form->labelEx($model, 'no_ktp', array('class'=>'')) ?>
          <?php echo $form->textField($model, 'no_ktp', array('class'=>'form-control', 'placeholder'=> 'Username')) ?>
        </div>
        <div class="form-group">
          <?php echo $form->labelEx($model, 'address', array('class'=>'')) ?>
          <?php echo $form->textField($model, 'address', array('class'=>'form-control', 'placeholder'=> 'Username')) ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        
        <!-- end content -->
        <?php $this->endWidget(); ?>

      </div>
    </div>
  </section>

  <div class="py-4"></div>

</section>