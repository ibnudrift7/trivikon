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
    
<h4>Total Tugas: <?php echo count( $model ); ?></h4>
<table class="items table table-bordered customs_table" border="1" cellpadding="3">
    <thead>
        <tr>
            <th id="tugas-lists-grid_c0">No</th>
            <th id="tugas-lists-grid_c1">Tgl Input</th>
            <th id="tugas-lists-grid_c2">Prioritas</th>
            <th id="tugas-lists-grid_c3">Dari</th>
            <th id="tugas-lists-grid_c4">Kepada</th>
            <th id="tugas-lists-grid_c5">Deskripsi</th>
            <th id="tugas-lists-grid_c6">Status</th>
            <th id="tugas-lists-grid_c7">Status Selesai</th>
            <th id="tugas-lists-grid_c8">Tgl Selesai</th>
        </tr>
    </thead>
    <tbody>
        <?php if (is_array($model) && count($model) > 0): ?>
            <?php foreach ($model as $key => $value): ?>
            <tr class="odd">
                <td><?php echo $key + 1 ?></td>
                <td><?php echo date("d M Y", strtotime($value->date_input)) ?></td>
                <td><?php echo $value->prioritas ?></td>
                <td><?php echo $value->dari ?></td>
                <td><?php echo $value->kepada ?></td>
                <td><?php echo substr($value->deskripsi, 0, 55)."..." ?></td>
                <td><?php echo $value->status ?></td>
                <td><?php echo $value->status_selesai ?></td>
                <td><?php echo date("d M Y", strtotime($value->date_finish)) ?></td>
            </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>
</body>
</html>