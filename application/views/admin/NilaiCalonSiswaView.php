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
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                </section>

                <section class="content">

                    <div class="row">
                        <div class="col-lg-12">

                            <table id="calonsiswa" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Nilai Peminatan</th>
                                        <th>Nilai Hasil Pendekatan Psikotest</th>
                                        <th>Nilai Placementtes</th>
                                        <th>Nilai Raport</th>
                                        <th>Nilai UN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($nilai_calon_siswa as $n) { ?>
                                        <tr>
                                            <td><?php echo $n->nisn; ?></td>
                                            <td><?php echo $n->nama; ?></td>
                                            <td><?php echo $n->c1; ?></td>
                                            <td><?php echo $n->c2; ?></td>
                                            <td><?php echo $n->c3; ?></td>
                                            <td><?php echo $n->c4; ?></td>
                                            <td><?php echo $n->c5; ?></td>
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