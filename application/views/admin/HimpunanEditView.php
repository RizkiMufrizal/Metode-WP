<!DOCTYPE html>
<!--
    @Author Rizki Mufrizal <mufrizalrizki@gmail.com> <https://RizkiMufrizal.github.io>
    @Since Jul 11, 2016
    @Time 4:30:31 PM
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
                        Edit Himpunan
                    </h1>
                </section>

                <section class="content">

                    <div class="row">
                        <div class="col-lg-12">
                            <?php foreach ($himpunan as $h) { ?>
                                <form method="post" action="<?php echo base_url(); ?>index.php/admin/HimpunanController/updateHimpunan">

                                    <div class="form-group">
                                        <label>ID Himpunan</label>
                                        <input type="text" value="<?php echo $h->id_himpunan; ?>" class="form-control" disabled>
                                        <input type="hidden" name="id_himpunan" value="<?php echo $h->id_himpunan; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Batas Atas</label>
                                        <input name="batas_atas" type="number" value="<?php echo $h->batas_atas; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Batas Bawah</label>
                                        <input type="number" name="batas_bawah" value="<?php echo $h->batas_bawah; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Nilai</label>
                                        <input type="text" name="nilai" value="<?php echo $h->nilai; ?>" class="form-control">
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
