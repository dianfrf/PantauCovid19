<div class="page-header deteksi">
    <div class="container">
        <h2>Deteksi Dini Covid-19</h2>
        <center><p>Deteksi Dini COVID-19 adalah salah satu cara untuk membantu mempercepat tindakan
            apakah Anda sehat atau memiliki gejala yang memerlukan pemeriksaan dan pengujian lebih lanjut mengenai COVID-19</p></center>
        <h4>Jawab pertanyaan berikut untuk memulai deteksi dini</h4>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <?php if ($this->session->flashdata('pesan') != null) { ?>
			<?php echo $this->session->flashdata('pesan');?>
		<?php } ?>
        <form action="<?=base_url('CovidController/tesdeteksi')?>" method="post">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">GEJALA YANG DIRASAKAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Saat ini saya merasakan demam</td>
                        <td>
                            <input type="radio" id="ya" name="jawaban1" value="15">
                            <label for="">Ya</label>
                            <input type="radio" id="tidak" name="jawaban1" value="0">
                            <label for="">Tidak</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Saat ini saya sedang merasakan batuk / pilek</td>
                        <td>
                            <input type="radio" id="ya" name="jawaban2" value="15">
                            <label for="">Ya</label>
                            <input type="radio" id="tidak" name="jawaban2" value="0">
                            <label for="">Tidak</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Saat ini saya merasa kesulitan bernafas atau sesak nafas</td>
                        <td>
                            <input type="radio" id="ya" name="jawaban3" value="15">
                            <label for="">Ya</label>
                            <input type="radio" id="tidak" name="jawaban3" value="0">
                            <label for="">Tidak</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Saat ini saya sedang mengalami nyeri tenggorokan</td>
                        <td>
                            <input type="radio" id="ya" name="jawaban4" value="15">
                            <label for="">Ya</label>
                            <input type="radio" id="tidak" name="jawaban4" value="0">
                            <label for="">Tidak</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Lama penyakit kurang dari 14 hari</td>
                        <td>
                            <input type="radio" id="ya" name="jawaban5" value="15">
                            <label for="">Ya</label>
                            <input type="radio" id="tidak" name="jawaban5" value="0">
                            <label for="">Tidak</label>
                        </td>
                    </tr>
                </tbody>
                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">RIWAYAT KONTAK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Memiliki riwayat kontak erat dengan penderita terkonfirmasi COVID-19 atau probabel COVID-19</td>
                        <td>
                            <input type="radio" id="ya" name="jawaban6" value="45">
                            <label for="">Ya</label>
                            <input type="radio" id="tidak" name="jawaban6" value="0">
                            <label for="">Tidak</label>
                        </td>
                    </tr>
                </tbody>
                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">RIWAYAT MOBILITAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Memiliki riwayat perjalanan atau tinggal diluar negeri yang melakukan penularan lokal</td>
                        <td>
                            <input type="radio" id="ya" name="jawaban7" value="45">
                            <label for="">Ya</label>
                            <input type="radio" id="tidak" name="jawaban7" value="0">
                            <label for="">Tidak</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Memiliki riwayat perjalanan atau tinggal diarea penularan lokal di Indonesia</td>
                        <td>
                            <input type="radio" id="ya" name="jawaban8" value="45">
                            <label for="">Ya</label>
                            <input type="radio" id="tidak" name="jawaban8" value="0">
                            <label for="">Tidak</label>
                        </td>
                    </tr>
                </tbody>
                    </form>
            </table>
            <input type="submit" class="tombol" name="cek" value="Cek Status">
        </form>
    </div>
</div>