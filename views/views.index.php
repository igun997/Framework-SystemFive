<?php
defined('ACCESS') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $var->title;?></title>
        <?php $var->layout->insert_views("head",$var); ?>

    <body class="hold-transition skin-red sidebar-mini ">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="./index.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">MVC</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Model Views Control</span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php $var->layout->insert_views("menu",$var); ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                <section class="content">
                    <?php $var->layout->insert_app("page",$var->uri); ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    MVC Partner PHP Indonesia
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2017 <a href="#">SystemFive</a>.</strong> All rights reserved. </footer>
            <!-- Control Sidebar -->
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
            <div class="control-sidebar-bg">
            </div>
        </div>
        
        <?php $var->layout->insert_views("footer",$var); ?>
    </body>
    </html>