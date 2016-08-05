<!--
    @Author Rizki Mufrizal <mufrizalrizki@gmail.com> <https://RizkiMufrizal.github.io>
    @Since Jul 11, 2016
    @Time 3:24:09 PM
    @Encoding UTF-8
    @Project Metode-WP
    @Package Expression package is undefined on line 8, column 16 in Templates/Scripting/EmptyPHPWebPage.php.
-->
<header class="main-header">

    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?php echo $this->session->userdata('email'); ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">                            
                <a href="<?php echo base_url(); ?>index.php/admin">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url(); ?>index.php/admin/CalonSiswaController">
                    <i class="fa fa-files-o"></i>
                    <span>Data Calon Siswa</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url(); ?>index.php/admin/KriteriaController">
                    <i class="fa fa-files-o"></i>
                    <span>Data Kriteria</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url(); ?>index.php/admin/HimpunanController">
                    <i class="fa fa-files-o"></i>
                    <span>Data Himpunan</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url(); ?>index.php/admin/NilaiCalonSiswaController">
                    <i class="fa fa-files-o"></i>
                    <span>Data Nilai Calon Siswa</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url(); ?>index.php/admin/NormalisasiController">
                    <i class="fa fa-files-o"></i>
                    <span>Data Normalisasi Dan Rangking</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
