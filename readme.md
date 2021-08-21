WEBSITE PANTAU COVID-19

Website ini dibangun menggunakan PHP dengan framework CodeIgniter3. Website untuk menampilkan data-data tentang Covid-19
di Indonesia mulai dari data pasien yang sembuh atau meninggal, data rumah sakit rujukan, hingga tes dini apakah Anda mengalami
gejala Covid-19 atau tidak. 

Untuk melakukan tes deteksi mandiri, pergi menuju menu Deteksi Dini Covid-19. Jawab pertanyaan yang tertera dengan jawaban Ya atau Tidak. Apabila dari hasil tes Anda diduga mengalami gejala Covid-19, Anda akan diarahkan ke menu Lapor Sigap Covid-19 untuk mengisi biodata, agar kami dapat membantu Anda.

Cara menggunakan website:
1. Clone repository
2. Import database 'pantaucovid' ke MySQL. Ubah sesuai config database Anda di application/config/database.php
3. Buka Command Prompt, lalu masuk ke folder. Setelah itu ketikkan php -S localhost:8001
4. Buka browser dan kunjungi localhost::8001,
5. Atau copy folder ke XAMPP/htdocs, buka browser dan kunjungi localhost/PantauCovid19

Referensi API yang digunakan:
1. Data jumlah kasus Covid-19 di Indonesia: https://covid19.mathdro.id/api/countries/Indonesia
2. Data jumlah kasus Covid-19 di Indonesia per provinsi: https://data.covid19.go.id/public/api/prov.json
3. Data rumah sakit rujukan Covid-19 di Indonesia: https://dekontaminasi.com/api/id/covid19/hospitals

System Requirement:
1. https://codeigniter.com/userguide3/general/requirements.html
2. MySQL
3. PHP Extension: cURL