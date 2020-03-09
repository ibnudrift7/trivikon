
<div class="sidenav">
         <div class="login-main-text">
            <h2>TRIVIKON<br> Login Page</h2>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                   'id'=>'login-form',
                   // 'type'=>'horizontal',
                   //'htmlOptions'=>array('class'=>'well'),
                  'enableClientValidation'=>false,
                  'clientOptions'=>array(
                     'validateOnSubmit'=>false,
                  ),
               )); ?>
                  <?php echo CHtml::errorSummary($modelLogin, '', '', array('class'=>'alert alert-danger')); ?>
                  <div class="form-group">
                     <?php echo $form->labelEx($modelLogin, 'username', array('class'=>'')) ?>
                     <?php echo $form->textField($modelLogin, 'username', array('class'=>'form-control', 'placeholder'=> 'Username')) ?>
                  </div>
                  <div class="form-group">
                     <?php echo $form->labelEx($modelLogin, 'password', array('class'=>'')) ?>
                     <?php echo $form->passwordField($modelLogin, 'password', array('class'=>'form-control', 'placeholder'=> 'Password')) ?>
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
               <?php $this->endWidget(); ?>

            </div>
         </div>
      </div>