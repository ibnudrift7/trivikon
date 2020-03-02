<section class="content-1-col blocks-events-detail block-Details-eventsln">
    <div class="prelatife container">
        <div class="inners-content d-block mx-auto text-center">
            <h3 class="text-center"><?php echo $detail->description->title; ?></h3>
            <div class="clear"></div>
            <span class="dates"><?php echo date('d F Y', strtotime($detail->date_input)) ?></span>
            <div class="clear height-25"></div>
            <div class="picture">
                <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(830,606, '/images/blog/'.$detail->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="<?php echo $detail->description->title; ?>" class="img-fluid">
            </div> 
            <?php echo $detail->description->content ?>
            
            <div class="clear height-50"></div>
            <div class="clear height-35"></div>
        </div>
    </div>
</section>

<section class="content-2-col blocks-home block-events-home">
    <div class="container">
        <h3 class="text-center">Other Events</h3>

        <div class="list-blocks-eventData mt-65">
            <?php if ($blog->getItemCount() > 0): ?>
            <div class="row">
                <?php foreach ($blog->getData() as $ke_event => $val_event): ?>
                <div class="col-md-15 col-30">
                    <div class="items">
                        <div class="picture">
                            <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(322,235, '/images/blog/'. $val_event->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid">
                        </div>
                        <div class="info">
                            <span class="catEvent"><?php echo ucwords($val_event->topik_id); ?></span>
                            <span class="dates"><?php echo date('d F Y', strtotime($val_event->date_input)); ?></span>
                            <h4 class="title"><?php echo $val_event->description->title; ?></h4>
                        </div>
                        <div class="blocks_s-detail">
                            <a href="<?php echo CHtml::normalizeUrl(array('/home/eventdetail', 'id'=> $val_event->id)); ?>" class="btn btn-light bmores_event">Read More &nbsp;<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <?php else: ?>
                <h4>No Data Found</h4>
            <?php endif; ?>
            <div class="clear"></div>
        </div>

        <div class="clear height-45"></div>
        <div class="d-block mx-auto text-center"><a href="<?php echo CHtml::normalizeUrl(array('/home/event')); ?>" class="btn btn-light btns_defsl">see more events</a></div>

        <div class="clear height-50"></div>
        <div class="clear height-50"></div>
        <div class="clear height-5"></div>
        <h3 class="text-center">Bulletin Board</h3>

        <?php
        $folderArchived = Blog::model()->getMenu($this->languageID, 'archived');
        ?>
        <div class="list-blocks-eventData mt-65">
            <div class="row">
                
                <?php foreach ($folderArchived as $key => $value){ ?>
                <div class="col-md-15">
                    <div class="items <?php if ($_GET['year'] == $value['year'] AND $_GET['month'] == $value['month']): ?>active<?php endif ?>">
                        <div class="info">
                            <h4 class="title"><?php echo $value['label'] ?></h4>
                        </div>
                        <div class="blocks_s-detail">
                            <a href="<?php echo CHtml::normalizeUrl(array('/home/event', 'year'=>$value['year'], 'month'=>$value['month'])); ?>" class="btn btn-light bmores_event">Read More &nbsp;<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <div class="clear"></div>
        </div>

        <div class="clear height-30"></div>
    </div>
</section>


<?php /*
<div class="blocks_subpage_banner product mah225">
  <div class="container prelatife">
    <div class="clear h70"></div>
    <h3 class="sub_title_p">EVENTS</h3>
    <div class="clear"></div>
    <div class="lines_browns_md tengah"></div>
    <div class="clear height-20"></div>
    <h5>Don&rsquo;t miss the show!</h5>
    <div class="clear"></div>
  </div>
</div>

<div class="clear"></div>
<div class="subpage static">
  <div class="prelatife container">
    <div class="clear height-50"></div><div class="height-40"></div>
    
    <div class="box_event_list">
        <div class="row">
            <?php foreach ($gallery->getData() as $key => $value): ?>
                
            <div class="col-md-4">
                <div class="items">
                    <div class="pict"><a href="<?php echo CHtml::normalizeUrl(array('/home/eventdetail', 'id'=>$value->id)); ?>"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(393,209, '/images/gallery/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></a></div>
                    <div class="descs text-center">
                        <span class="nm"><?php echo $value->description->title ?></span>
                        <div class="clear"></div>
                        <span class="green"><?php echo $value->description->sub_title ?></span>
                        <div class="clear"></div>
                        <span class="date"><?php echo date('F j, Y',strtoupper($value->date_input)) ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </div>

        <div class="clear"></div>
    </div>
    <div class="clear height-50"></div><div class="height-25"></div>

    <div class="banner_register_events">
        <div class="linesbrown_event tengah"></div>
        <div class="clear height-50"></div>
        <p>To keep up with these regular events, register your contact details below</p>
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
   <?php echo $form->errorSummary($model, '', '', array('class'=>'alert alert-danger')); ?>
    <?php if(Yii::app()->user->hasFlash('success')): ?>
        <?php $this->widget('bootstrap.widgets.TbAlert', array(
            'alerts'=>array('success'),
        )); ?>
    <?php endif; ?>
            <div class="form-group">
                <?php echo $form->textField($model, 'name', array('class'=>'form-control', 'placeholder'=>"NAME")); ?>
            </div>
            <div class="form-group">
                <?php echo $form->textField($model, 'email', array('class'=>'form-control', 'placeholder'=>"EMAIL")); ?>
            </div>
            <div class="form-group">
                <?php echo $form->textField($model, 'phone', array('class'=>'form-control', 'placeholder'=>"MOBILE PHONE")); ?>
            </div>
            <button type="submit" class="btn btn-default btns_submit_browns">SUBMIT</button>
<?php $this->endWidget(); ?>
        <div class="clear height-50"></div>
        <div class="linesbrown_event tengah"></div>
        <div class="clear"></div>
    </div>

    <div class="clear height-40"></div>
    <div class="clear height-40"></div>
  </div>

  <div class="clear"></div>
</div>
*/ ?>