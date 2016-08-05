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
                            <a href="<?php echo base_url(); ?>index.php/IndexController/pengumuman">Pengumuman</a>
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
                            <th>Rangking</th>
                            <th>Nama Peserta Didik</th>
                            <th>NISN</th>
                            <th>Jurusan</th>
                            <th style="display: none">Total Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($normalisasi as $n) {
                            ++$i; ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $n->nama; ?></td>
                                <td><?php echo $n->nisn; ?></td>
                                <td>
                                    <?php if($i > 20) { ?>
                                        <?php echo 'IPS'; ?>
                                    <?php } else { ?>
                                        <?php echo 'IPA'; ?>
                                    <?php } ?>
                                </td>
                                <td style="display: none"><?php echo $n->total_nilai; ?></td>
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
                    'order': [[4, 'desc']]
                });
            });
        </script>
    </body>
</html>
