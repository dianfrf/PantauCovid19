<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Pantau Covid-19</title>
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/style.css" type="text/css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/dataTables.bootstrap4.min.css">
        <script src="<?=base_url()?>Asset/js/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url()?>Asset/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>Asset/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>Asset/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>			
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="<?php echo $active == "Home" ? "nav-item active" : ""; ?>">
                            <a class="nav-link" href="<?=base_url('')?>">Beranda</a>
                        </li>
                        <li class="<?php echo $active == "RS" ? "nav-item active" : ""; ?>">
                            <a class="nav-link" href="<?=base_url('rumahsakit')?>">Rumah Sakit Rujukan</a>
                        </li>
                        <li class="<?php echo $active == "Deteksi" ? "nav-item active" : ""; ?>">
                            <a class="nav-link" href="<?=base_url('deteksidini')?>">Deteksi Dini Covid-19</a>
                        </li>
                        <li class="<?php echo $active == "Lapor" ? "nav-item active" : ""; ?>">
                            <a class="nav-link" href="<?=base_url('laporsigap')?>">Lapor Sigap Covid-19</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
            $this->load->view($konten);
        ?>
        <div class="page-footer">
            <h6>Copyright &copy; 2020 <strong style="font-weight:bolder">Dian F. Arif</strong>. All rights reserved.</h6>
        </div>
        <script>
            $(document).ready(function() {
                $('#prov').DataTable();
            } );
            $(document).ready(function() {
                $('#rumahsakit').DataTable();
            } );
        </script>
    </body>
</html>