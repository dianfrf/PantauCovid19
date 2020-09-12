<div class="page-header lapor">
    <div class="container">
        <h2>Lapor Sigap Covid-19</h2>
        <center><p>Laporkan diri Anda atau keluarga Anda apabila: 1. Mengalami gejala-gejala Covid-19, 2. Setelah melakukan deteksi dini menunjukkan gejala-gejala Covid-19.
            Isi form dibawah agar kami dapat membantu Anda </p></center>
        <form action="<?=base_url('CovidController/lapor')?>" method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" autocomplete="off" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nomor HP/ WhatsApp</label>
                <input type="number" class="form-control" placeholder="Nomor HP/ WhatsApp" name="telepon" autocomplete="off" required>
            </div>
            <input type="submit" class="tombol" name="laporkan" value="Laporkan">
        </form>
    </div>
</div>