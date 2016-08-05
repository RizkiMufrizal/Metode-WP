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
        <title>Metode WP</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php $this->load->view('admin/layout/CssLayout') ?>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php $this->load->view('admin/layout/HeaderLayout') ?>

            <div class="content-wrapper" style="min-height: 650px">
                <section class="content-header">
                    <h1>
                        Tambah Nilai Calon Siswa
                    </h1>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php foreach ($calon_siswa_nilai as $c) { ?>
                                <form method="post" action="<?php echo base_url(); ?>index.php/admin/NilaiCalonSiswaController/tambahNilaiCalonSiswa">

                                    <div class="form-group">
                                        <label>NISN</label>
                                        <input type="text" value="<?php echo $c->nisn; ?>" class="form-control" disabled>
                                        <input type="hidden" name="nisn" value="<?php echo $c->nisn; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" value="<?php echo $c->nama; ?>" class="form-control" disabled>
                                        <input type="hidden" name="nama" value="<?php echo $c->nama; ?>" class="form-control">
                                    </div>

                                    <?php foreach ($kriteria as $k) { ?>
                                        <div class="form-group">
                                            <label><?php echo $k->keterangan; ?></label>
                                            <input type="text" name="<?php echo $k->kriteria; ?>" class="form-control" placeholder="Masukkan <?php echo $k->keterangan; ?>">
                                        </div>
                                    <?php } ?>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            </div>

            <div class="control-sidebar-bg"></div>
        </div>

        <?php $this->load->view('admin/layout/JsLayout') ?>
    </body>
</html>
