<div class="page-header">
    <div class="container">
        <h2>Data Covid-19 di Indonesia</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="card kn">
                    <h3><?=number_format($datacovid->confirmed->value)?></h3>
                    <h4>Terkonfirmasi</h4>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card sm">
                    <h3><?=number_format($datacovid->recovered->value)?></h3>
                    <h4>Sembuh</h4>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mn">
                    <h3><?=number_format($datacovid->deaths->value)?></h3>
                    <h4>Meninggal</h4>
                </div>
            </div>
        </div>
        <h4>Data Per Provinsi</h4>
            <table id="prov" class="table table-striped table-bordered">
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