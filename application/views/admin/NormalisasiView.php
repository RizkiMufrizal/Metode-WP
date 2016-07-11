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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php $this->load->view('admin/layout/CssLayout') ?>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php $this->load->view('admin/layout/HeaderLayout') ?>

            <div class="content-wrapper" style="height: 650px">
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                </section>

                <section class="content">

                    <div class="row">
                        <div class="col-lg-12">

                            <a href="<?php echo base_url(); ?>index.php/admin/NormalisasiController/prosesNormalisasi">
                                <button class="btn btn-primary">Proses Normalisasi</button>
                            </a>

                            <p></p>

                            <table id="normalisasi" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Nilai Psikotes</th>
                                        <th>Nilai PSM Test</th>
                                        <th>Nilai Angket Siswa</th>
                                        <th>Nilai UN</th>
                                        <th>Nilai Raport</th>
                                        <th>Total Nilai</th>
                                        <th>Rangking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($normalisasi as $n) {
                                        ++$i;
                                        ?>
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

                </section>

            </div>

            <div class="control-sidebar-bg"></div>
        </div>

<?php $this->load->view('admin/layout/JsLayout') ?>
    </body>
</html>