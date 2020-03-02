<?php
$this->breadcrumbs=array(
	($_GET['tipe'] == 'market')? 'Penawaran List Cari' : 'Penawaran List Jual',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>($_GET['tipe'] == 'market')? 'Penawaran List Cari' : 'Penawaran List Jual',
	'subtitle'=>($_GET['tipe'] == 'market')? 'Penawaran List Cari' : 'Penawaran List Jual',
);

$this->menu=array(
	// array('label'=>'Add Penawaran List', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Penawaran List <?php echo ($_GET['tipe'] == 'market')? 'Cari' : 'Jual' ?></h1>

<table class="items table table-bordered">
<thead>
	<tr>
		<th id="penawaran-list-grid_c0">No</th>
		<th id="penawaran-list-grid_c1">Post Market</th>
		<th id="penawaran-list-grid_c2">User Post</th>
		<th id="penawaran-list-grid_c3">Nama</th>
		<th id="penawaran-list-grid_c4">Keterangan Deal</th>
		<th class="button-column" id="penawaran-list-grid_c5">&nbsp;</th>
	</tr>
</thead>
<tbody>
<?php foreach ($model as $key => $value): ?>
<tr class="odd">
	<td><?php echo $key + 1; ?></td>
	<td><?php echo TbMarket::model()->findByPk($value['market_id'])->nama_post ?></td>
	<td><?php echo MeMember::model()->findByPk($value['user_post_id'])->first_name ?></td>
	<td><?php echo $value['nama'] ?></td>
	<td><?php echo ($value['deal_data'] == 1)? 'Deal' : 'No Deal'; ?></td>
	<td class="button-column">
		<a class="update" title="Update" rel="tooltip" href="<?php echo CHtml::normalizeUrl(array('/admin/penawaranList/update', 'id'=> $value['id'])); ?>">
			<i class="fa fa-pencil"></i>
		</a>

		<a class="delete" title="Delete Apps" rel="tooltip" href="<?php echo CHtml::normalizeUrl(array('/admin/penawaranList/delete_apk', 'id'=> $value['id'])); ?>"><i class="fa fa-trash-o"></i>
		</a>
	</td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<?php /*$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'penawaran-list-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		// 'market_id',
		array(
            'header' => 'No',
            'type'=>'raw',
            'value' => '$row + ($this->grid->dataProvider->pagination->currentPage
                * $this->grid->dataProvider->pagination->pageSize) + 1',
            ),
		array(
			'header'=>'Post Market',
			'type'=>'raw',
			'value' => 'TbMarket::model()->findByPk($data->data_penawar->market_id)->nama_post',
		),

		// 'user_post_id',
		array(
			'header'=>'User Post',
			'type'=>'raw',
			'value' => 'MeMember::model()->findByPk($data->data_penawar->user_post_id)->first_name',
		),
		array(
			'header'=>'Nama',
			'type'=>'raw',
			'value' => '$data->data_penawar->nama',
		),

		// 'nama',
		// 'user_tawar_id',
		// array(
		// 	'name'=>'deal',
		// 	'type'=>'raw',
		// 	'value'=>'($data->deal == 1)? "Deal" : "No Deal"',
		// ),
		// 'deal',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}' ,
		),
		// &nbsp; {delete}
	),
));*/ ?>
