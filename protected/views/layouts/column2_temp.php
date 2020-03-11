<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>

<main role="main">
<section class="outer_content_inside">

  <section class="top_section mb-5 py-5">
    <div class="prelatife container">
      <div class="inside">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-0"><?php echo $this->pageHeader['title'] ?></h2>
            <div class="clear clearfix"></div>
            <h5>(<?php echo $this->pageHeader['subtitle'] ?>)</h5>
          </div>
          <div class="col-md-6">
            <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
                'homeLink'=>CHtml::link('<i class="fa fa-home"></i>',array('/')),
                'separator'=>'',
                'htmlOptions'=>array(
                    'class'=>'breadcrumb text-right float-right add_libread mb-0',
                )
            )); ?><!-- breadcrumbs -->
            <script type="text/javascript">
                $(function(){
                    $('ul.add_libread').find('li').addClass('breadcrumb-item');
                });
            </script>
            <div class="clear clearfix"></div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section>

  <section class="middle-content">
    <div class="prelatife container">
      <div class="maincontentinner inside">
        
        <!-- start content -->
        <?php echo $content; ?>
        <!-- end content -->

      </div>
    </div>
  </section>

  <div class="py-4"></div>

</section>
</main>

<?php echo $this->renderPartial('//layouts/_footer', array()); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.theme.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript">
  $(function(){
        $('.datepicker2').datepicker({ 
            dateFormat: 'yy-mm-dd',
            // changeYear: true,
            // changeMonth: true,
        });
  })
</script>
<?php $this->endContent(); ?>