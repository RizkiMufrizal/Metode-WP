<!DOCTYPE html>
<!--
    @Author Rizki Mufrizal <mufrizalrizki@gmail.com> <https://RizkiMufrizal.github.io>
    @Since Jul 11, 2016
    @Time 4:29:50 PM
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
                        Data Himpunan
                    </h1>
                </section>

                <section class="content">

                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal">Tambah Data</button>

                            <p></p>

                            <table id="himpunan" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID Himpunan</th>
                                        <th class="text-center">Batas Atas</th>
                                        <th class="text-center">Batas Bawah</th>
                                        <th class="text-center">Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($himpunan as $h) { ?>
                                        <tr>
                                            <td><?php echo $h->id_himpunan; ?></td>
                                            <td><?php echo $h->batas_atas; ?></td>
                                            <td><?php echo $h->batas_bawah; ?></td>
                                            <td><?php echo $h->nilai; ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url(); ?>index.php/admin/HimpunanController/editHimpunan/<?php echo $h->id_himpunan; ?>">
                                                    <button class="btn btn-success">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url(); ?>index.php/admin/HimpunanController/hapusHimpunan/<?php echo $h->id_himpunan; ?>">
                                                    <button class="btn btn-danger">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
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

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Himpunan</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>index.php/admin/HimpunanController/tambahHimpunan" method="post">
                            <div class="form-group">
                                <label>Batas Atas</label>
                                <input type="number" name="batas_atas" class="form-control" placeholder="Masukkan Batas Atas">
                            </div>
                            <div class="form-group">
                                <label>Batas Bawah</label>
                                <input type="number" name="batas_bawah" class="form-control" placeholder="Masukkan Batas Bawah">
                            </div>
                            <div class="form-group">
                                <label>Nilai</label>
                                <input type="text" name="nilai" class="form-control" placeholder="Masukkan Nilai">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->load->view('admin/layout/JsLayout') ?>
    </body>
</html>
