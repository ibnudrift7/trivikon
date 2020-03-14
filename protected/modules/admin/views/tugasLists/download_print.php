<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print</title>
    <style>
        @media print {
           .example-screen {
               display: none;
            }
            .example-print {
               display: block;
            }


            table.customs_table{
                margin: 0;
            }
            table.customs_table thead{  }
            table.customs_table thead th{ 
                vertical-align: middle; 
                text-align: center;
            }

            table.table_sub{ 
                border: 0px; 
                margin-bottom: 0;
                text-align: center;
            }
            table.table_sub thead tr th{
                border-left: 0px;
                text-align: center;
                border-top: 0;
            }
            table.table_sub thead tr.border_t th{
                border-top: 1px solid #4D4D4D !important;
                border-left: 1px solid #4D4D4D !important;
            }
            table.table_sub thead tr.border_t th:first-child{
                border-left: 0px !important;
            }

            .p-0{ 
                padding: 0 !important;
            }

            table.table_subdata tbody{

            }
            table.table_subdata {
                background: none; 
                background-color: transparent !important;
                margin: 0;
                margin-bottom: 0;
            }
            table.table_subdata tbody td{
                background: none;
                background-color: transparent;
                text-align: center;
            }

            table th{
                font-size: 13px;
            }
            table td{
                font-size: 12px;
            }

        }
    </style>
    <script type="text/javascript">
        window.print();
        
        setInterval(function(){ 
            window.close();
        }, 3000);
    </script>    
</head>
<body>
    
<h4>Total Tugas: <?php echo count( TugasLists::model()->findAll() ); ?></h4>
<div id="tugas-lists-grid" class="grid-view">
    <table class="items table table-bordered customs_table" border="1" cellpadding="3">
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
                </tr>
                <?php endforeach ?>

            <?php endif ?>

        </tbody>
    </table>

</div>
</body>
</html>