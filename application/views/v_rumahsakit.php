<div class="page-header deteksi">
    <div class="container">
        <h2>Daftar Rumah Sakit Rujukan Covid-19 di Indonesia</h2>
        <div class="table-responsive" style="margin-top:20px">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Provinsi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no = 0; 
                foreach($datars as $rs) { $no++; ?>
                    <tr>
                        <td><?=$no;?></td>
                        <td><?=$rs->name;?></td>
                        <td><?=$rs->address;?></td>
                        <td><?=$rs->phone;?></td>
                        <td><?=$rs->province;?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>