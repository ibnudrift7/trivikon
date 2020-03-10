<?php
$this->breadcrumbs=array(
	'Tugas Item',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas Item',
	'subtitle'=> (isset($_GET['subject']))? 'Data Tugas Item > '. ucwords($kepentingan->nama_kepentingan) : 'Data Tugas Item',
);

$this->menu=array(
	array('label'=>'Add Tugas Item', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<?php
$criteria = new CDbCriteria;
$criteria->addCondition('t.subject_kepentingan = :dns_t');
$criteria->params[':dns_t'] = intval($_GET['subject']);
?>
<h1>Total Tugas: <?php echo count( TugasLists::model()->findAll($criteria) ); ?></h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tugas-lists-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		array(
            'header' => 'No',
            'type'=>'raw',
            'value' => '$row + ($this->grid->dataProvider->pagination->currentPage
                * $this->grid->dataProvider->pagination->pageSize) + 1',
            ),
		array(
			'header'=>'Tgl Input',
			'type'=>'raw',
			'value'=>'date("d M Y", strtotime($data->date_input))',
		),
		'prioritas',
		'dari',
		'kepada',
		// 'subject_kepentingan',
		// 'deskripsi',
		array(
			'header'=> 'Deskripsi',
			'type'=> 'raw',
			'value'=> 'substr($data->deskripsi, 0, 55)."..."',
		),
		'status',
		'status_selesai',
		// 'date_input',
		// 'date_finish',
		array(
			'header'=>'Tgl Selesai',
			'type'=>'raw',
			'value'=>'date("d M Y", strtotime($data->date_finish))',
		),

		array(
			'header'=>'Countdown',
			'type'=>'raw',
			'value'=>'TugasLists::get_coundDown($data->date_finish)',
		),

		/*
		'deskripsi',
		'member_id',
		'admin_id',
		'data',
		*/

		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
			// 'template'=>'{update}',
		),
	),
)); ?>


<script src="<?php echo Yii::app()->baseUrl; ?>/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
<script type="text/javascript">
jQuery(function($){
  $('span.countddown_ls').each(function() {
    
    var $this = $(this), finalDate = $(this).attr('data-countdown');
    $this.countdown(finalDate, function(event) {
      $this.html(event.strftime('%D hari %H:%M:%S'));
    });

    $(this).on('finish.countdown', function(event){
      console.log("teste");
    });

  });
});
</script>