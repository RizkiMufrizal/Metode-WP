<!DOCTYPE html>
<!--
    @Author Rizki Mufrizal <mufrizalrizki@gmail.com> <https://RizkiMufrizal.github.io>
    @Since Jul 11, 2016
    @Time 3:24:09 PM
    @Encoding UTF-8
    @Project Metode-WP
    @Package Expression package is undefined on line 8, column 16 in Templates/Scripting/EmptyPHPWebPage.php.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Metode WP</title>

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#">Metode WP</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/login">Login</a>
                        </li>
                    </ul> 
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <table id="normalisasi" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Nilai Peminatan</th>
                            <th>Nilai Hasil Pendekatan Psikotest</th>
                            <th>Nilai Placementtes</th>
                            <th>Nilai Raport</th>
                            <th>Nilai UN</th>
                            <th>Total Nilai</th>
                            <th>Rangking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($normalisasi as $n) {
                            ++$i; ?>
                            <tr>
                                <td><?php echo $n->nisn; ?></td>
                                <td><?php echo $n->nama; ?></td>
                                <td><?php echo $n->nilai_c1; ?></td>
                                <td><?php echo $n->nilai_c2; ?></td>
                                <td><?php echo $n->nilai_c3; ?></td>
                                <td><?php echo $n->nilai_c4; ?></td>
                                <td><?php echo $n->nilai_c5; ?></td>
                                <td><?php echo $n->total_nilai; ?></td>
                                <td><?php echo $i; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#normalisasi').DataTable({
                    'order': [[7, 'desc']]
                });
            });
        </script>
    </body>
</html>
