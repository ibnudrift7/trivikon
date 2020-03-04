<?php
$this->breadcrumbs=array(
	'Tugas Item',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Rekap Tugas',
	'subtitle'=>'Rekap Data Tugas',
);

$this->menu=array(
	// array('label'=>'Add Tugas Item', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php // $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>

<h1>Total Tugas: <?php echo count( MeMember::model()->findAll() ); ?></h1>

<div id="tugas-lists-grid" class="grid-view">
    <table class="items table table-bordered customs_table">
        <thead>
            <tr>
                <th id="tugas-lists-grid_c0" rowspan="2">No</th>
                <th id="tugas-lists-grid_c0">Member</th>
                <th id="tugas-lists-grid_c1">Jabatan</th>
                <th id="tugas-lists-grid_c2">Total Tugas</th>
                <th id="tugas-lists-grid_c3" class="p-0">
                	<table class="table table_sub">
                		<thead>
                		<tr>
                			<th colspan="3">Jumlah Prioritas</th>
                		</tr>
                		<tr class="border_t">
                			<th>URGENT</th>
                			<th>PENTING</th>
                			<th>RUTIN</th>
                		</tr>
                		</thead>
                	</table>
                </th>
                <th id="tugas-lists-grid_c4" class="p-0">
                	<table class="table table_sub">
                		<thead>
                		<tr>
                			<th colspan="2">Jumlah Tugas</th>
                		</tr>
                		<tr class="border_t">
                			<th>SELESAI</th>
                			<th>BELUM</th>
                		</tr>
                		</thead>
                	</table>
                </th>
                <th id="tugas-lists-grid_c5" class="p-0">
                	<table class="table table_sub">
                		<thead>
                		<tr>
                			<th colspan="2">Jumlah Deadline</th>
                		</tr>
                		<tr class="border_t">
                			<th>UNDER</th>
                			<th>OVER</th>
                		</tr>
                		</thead>
                	</table>
                </th>
                <th id="tugas-lists-grid_c6" class="p-0">
                	<table class="table table_sub">
                		<thead>
                		<tr>
                			<th colspan="2">Penilaian Kinerja</th>
                		</tr>
                		<tr class="border_t">
                			<th>BAIK</th>
                			<th>BURUK</th>
                		</tr>
                		</thead>
                	</table>
                </th>
                <th class="button-column" id="tugas-lists-grid_c9">&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <!-- <tr>
                <td colspan="8" class="empty"><span class="empty">No results found.</span></td>
            </tr> -->
            <?php for ($i=1; $i < 6; $i++) { ?>
            <tr>
            	<td><?php echo $i ?></td>
            	<td>Iva Purnasih</td>
            	<td>Direktur</td>
            	<td>12</td>

            	<td class="p-0">
            		<table class="table table_subdata">
            			<tbody>
            				<td>4</td>
            				<td>5</td>
            				<td>3</td>
            			</tbody>
            		</table>
            	</td>

            	<td class="p-0">
            		<table class="table table_subdata">
            			<tbody>
            				<td>7</td>
            				<td>5</td>
            			</tbody>
            		</table>
            	</td>

            	<td class="p-0">
            		<table class="table table_subdata">
            			<tbody>
            				<td>7</td>
            				<td>0</td>
            			</tbody>
            		</table>
            	</td>
            	<td class="p-0">
            		<table class="table table_subdata">
            			<tbody>
            				<td>7</td>
            				<td>0</td>
            			</tbody>
            		</table>
            	</td>
            	<td>
            		&nbsp;
            	</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>