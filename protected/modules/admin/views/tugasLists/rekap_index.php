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
	array('label'=>'Download Report', 'icon'=>'download-alt','url'=>array('download_report'), 'htmlOptions'=> array('target'=>'_blank') ),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>

<h1>Total Tugas: <?php echo count( TugasLists::model()->findAll() ); ?></h1>

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
                			<th colspan="3">Prioritas</th>
                		</tr>
                		<tr class="border_t">
                			<th>URGENT</th>
                			<th>PRIORITAS</th>
                			<th>RUTIN</th>
                		</tr>
                		</thead>
                	</table>
                </th>
                <th id="tugas-lists-grid_c4" class="p-0">
                	<table class="table table_sub">
                		<thead>
                		<tr>
                			<th colspan="2">Tugas</th>
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
                			<th colspan="2">Deadline</th>
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
                			<th colspan="2">Kinerja</th>
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
            <?php if (is_array($model) && count($model) <= 0): ?>
                <tr>
                    <td colspan="9" class="empty"><span class="empty">No results found.</span></td>
                </tr>
            <?php else: ?>
                <?php foreach ($model as $key => $value): ?>
                <?php 
                $tugas_data = TugasLists::model()->findAll('t.member_id = :member_id', array(':member_id'=>$value->id));
                ?>
                <?php $urgent_{$key} = 0; ?>
                <?php $penting_{$key} = 0; ?>
                <?php $rutin_{$key} = 0; ?>
                <?php $tugas_sel_{$key} = 0; ?>
                <?php $tugas_bel_{$key} = 0; ?>
                <?php $tugas_under_{$key} = 0; ?>
                <?php $tugas_over_{$key} = 0; ?>
                <?php foreach ($tugas_data as $ke => $val): ?>
                    <?php if ($val->prioritas == 'urgent'): ?>
                    <?php $urgent_{$key} = $urgent_{$key} + 1; ?>
                    <?php endif ?>

                    <?php if ($val->prioritas == 'penting'): ?>
                    <?php $penting_{$key} = $penting_{$key} + 1; ?>
                    <?php endif ?>

                    <?php if ($val->prioritas == 'rutin'): ?>
                    <?php $rutin_{$key} = $rutin_{$key} + 1; ?>
                    <?php endif ?>

                    <?php if ($val->status == 'selesai'): ?>
                    <?php $tugas_sel_{$key} = $tugas_sel_{$key} + 1; ?>
                    <?php endif ?>

                    <?php if ($val->status == 'belum'): ?>
                    <?php $tugas_bel_{$key} = $tugas_bel_{$key} + 1; ?>
                    <?php endif ?>

                    <?php if ($val->status_selesai == 'under'): ?>
                    <?php $tugas_under_{$key} = $tugas_under_{$key} + 1; ?>
                    <?php endif ?>

                    <?php if ($val->status_selesai == 'over'): ?>
                    <?php $tugas_over_{$key} = $tugas_over_{$key} + 1; ?>
                    <?php endif ?>
                <?php endforeach ?>
                <?php 
                ?>
                <tr>
                	<td><?php echo $key + 1; ?></td>
                	<td><?php echo $value->first_name.' '. $value->last_name ?></td>
                	<td><?php echo $value->jabatan ?></td>
                	<td><?php echo count($tugas_data); ?></td>
                	<td class="p-0">
                		<table class="table table_subdata">
                			<tbody>
                				<td><?php echo $urgent_{$key} ?></td>
                				<td><?php echo $penting_{$key} ?></td>
                				<td><?php echo $rutin_{$key} ?></td>
                			</tbody>
                		</table>
                	</td>

                	<td class="p-0">
                		<table class="table table_subdata">
                			<tbody>
                				<td><?php echo $tugas_sel_{$key} ?></td>
                				<td><?php echo $tugas_bel_{$key} ?></td>
                			</tbody>
                		</table>
                	</td>

                	<td class="p-0">
                		<table class="table table_subdata">
                			<tbody>
                				<td><?php echo $tugas_under_{$key} ?></td>
                                <td><?php echo $tugas_over_{$key} ?></td>
                			</tbody>
                		</table>
                	</td>
                    <?php 
                    $nilai_kinerja = ( $tugas_sel_{$key} / count($tugas_data)) * 100;
                    ?>
                	<td class="p-0">
                		<table class="table table_subdata">
                			<tbody>
                				<td><?php echo ( round($nilai_kinerja) > 59 ) ? '1' : '0' ?></td>
                				<td><?php echo ( round($nilai_kinerja) < 59 ) ? '1' : '0' ?></td>
                			</tbody>
                		</table>
                	</td>
                	<td>
                		&nbsp;
                	</td>
                </tr>
                <?php endforeach ?>

            <?php endif ?>

        </tbody>
    </table>

</div>