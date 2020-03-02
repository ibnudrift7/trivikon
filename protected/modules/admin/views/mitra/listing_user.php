<?php
$this->breadcrumbs=array(
	'Komunitas',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Master Komunitas User',
	'subtitle'=>'Total Member: '. count($model),
);

$this->menu=array(
	// array('label'=>'Add Komunitas User', 'icon'=>'th-list','url'=>array('create')),
);
?>
<h1>Komunitas User</h1>

<table class="items table table-bordered">
	<thead>
		<tr>
			<th>Nama Perusahaan</th>
			<th>Username</th>
			<th>Nama Lengkap</th>
		</tr>
	</thead>
	<tbody>
		<?php if (count($model) > 0): ?>
		<?php foreach ($model as $key => $value): ?>
		<tr>
			<td><?php echo $value->nama_perusahaan ?></td>
			<td><?php echo $value->username ?></td>
			<td><?php echo $value->first_name. ' '. $value->last_name ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
	<?php endif ?>