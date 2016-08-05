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
                        Data Calon Siswa
                    </h1>
                </section>

                <section class="content">

                    <div class="row">
                        <div class="col-lg-12">

                            <form method="post" action="<?php echo base_url() ?>index.php/admin/CalonSiswaController/uploadCsvCalonSiswa" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload Data Calon Dan Nilai Siswa</label>
                                    <input type="file" name="csv">
                                    <p class="help-block">Silahkan browse file csv untuk data calon dan nilai siswa</p>
                                </div>
                                <button type="submit" class="btn btn-success">Upload</button>
                            </form>

                            <br/>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal">Tambah Data</button>

                            <?php if (sizeof($calon_siswa) <= 0) { ?>
                                <button class="btn btn-danger" disabled>Hapus Seluruh Data</button>
                            <?php } else { ?>
                                <a href="<?php echo base_url(); ?>index.php/admin/CalonSiswaController/hapusCalonSiswa">
                                    <button class="btn btn-danger">Hapus Seluruh Data</button>
                                </a>
                            <?php } ?>

                            <p></p>

                            <table id="calonsiswa" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nama Orang Tua</th>
                                        <th>Pekerjaan Orang Tua</th>
                                        <th>No Telepon</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($calon_siswa as $s) { ?>
                                        <tr>
                                            <td><?php echo $s->nisn; ?></td>
                                            <td><?php echo $s->nama; ?></td>
                                            <td><?php echo $s->tempat_lahir; ?></td>
                                            <td><?php echo $s->tanggal_lahir; ?></td>
                                            <td><?php echo $s->nama_orang_tua; ?></td>
                                            <td><?php echo $s->pekerjaan_orang_tua; ?></td>
                                            <td><?php echo $s->no_telepon; ?></td>
                                            <td><?php echo $s->keterangan; ?></td>
                                            <td class="text-center">
                                                <?php if ($s->status) { ?>
                                                    <button class="btn btn-success" disabled>Tambah Nilai</button>
                                                <?php } else { ?>
                                                    <a href="<?php echo base_url(); ?>index.php/admin/CalonSiswaController/ambilCalonSiswaDanNilaiBerdasarkanNisn/<?php echo $s->nisn; ?>">
                                                        <button class="btn btn-success">Tambah Nilai</button>
                                                    </a>
                                                <?php } ?>
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
                        <h4 class="modal-title" id="myModalLabel">Tambah Calon Siswa</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>index.php/admin/CalonSiswaController/tambahCalonSiswa" method="post">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN Anda">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir Anda">
                            </div>
                            <div class="form-group">
                                <label>Nama Orang Tua</label>
                                <input type="text" name="nama_orang_tua" class="form-control" placeholder="Masukkan Nama Orang Tua Anda">
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Orang Tua</label>
                                <input type="text" name="pekerjaan_orang_tua" class="form-control" placeholder="Masukkan Pekerjaan Orang Tua Anda">
                            </div>
                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control" placeholder="Masukkan No Telepon Anda">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan Anda">
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