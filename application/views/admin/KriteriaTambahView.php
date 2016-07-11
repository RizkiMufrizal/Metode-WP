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
                        Ubah Kriteria
                    </h1>
                </section>

                <section class="content">

                    <div class="row">
                        <div class="col-lg-12">
                            <?php foreach ($kriteria as $k) { ?>
                                <form method="post" action="<?php echo base_url(); ?>index.php/admin/KriteriaController/updateKriteria">

                                    <div class="form-group">
                                        <label>ID Kriteria</label>
                                        <input type="text" value="<?php echo $k->id_kriteria; ?>" class="form-control" disabled>
                                        <input type="hidden" name="id_kriteria" value="<?php echo $k->id_kriteria; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Kriteria</label>
                                        <input name="kriteria" type="text" value="<?php echo $k->kriteria; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Bobot</label>
                                        <input type="text" name="bobot" value="<?php echo $k->bobot; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" name="keterangan" value="<?php echo $k->keterangan; ?>" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-success">Simpan</button>
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