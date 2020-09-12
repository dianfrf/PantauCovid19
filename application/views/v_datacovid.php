<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Pantau Covid</title>
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/style.css" type="text/css">
        <script src="<?=base_url()?>Asset/js/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url()?>Asset/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="page-header">
            <div class="container">
                <h2>Data Covid-19 di Indonesia</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card kn">
                            <h3><?=number_format($datacovid->confirmed->value)?></h3>
                            <h4>Terkonfirmasi</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card sm">
                            <h3><?=number_format($datacovid->recovered->value)?></h3>
                            <h4>Sembuh</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mn">
                            <h3><?=number_format($datacovid->deaths->value)?></h3>
                            <h4>Meninggal</h4>
                        </div>
                    </div>
                </div>
                <h4>* Data Per Provinsi</h4>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Jumlah Kasus</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no = 0; 
                    foreach($list as $ls) { $no++; ?>
                        <tr>
                            <td><?=$no;?></td>
                            <td><?=$ls->key;?></td>
                            <td><?=number_format($ls->jumlah_kasus);?></td>
                            <td><?=number_format($ls->jumlah_sembuh);?></td>
                            <td><?=number_format($ls->jumlah_meninggal);?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>