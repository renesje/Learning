<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02/06/2017
 * Time: 11:11
 */?>

<html>
<?php
$this->load->view('layout/head');
?>
<head>
<title>E-Learning</title>
</head>
<?php
$this->load->view('layout/topbar-home');
?>
<body>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    HOME
                    <small>hello world!</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!--
                <div class="callout callout-info">
                    <h4>Tip!</h4>

                    <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
                        sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
                        links instead.</p>
                </div>
                <div class="callout callout-danger">
                    <h4>Warning!</h4>

                    <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
                        and the content will slightly differ than that of the normal layout.</p>
                </div>
                -->

                <div class="row">
                    <?php
                    $this->load->view('ext/banner');
                    ?>
                </div>

                <div class="row">
                    <div class="col-lg-pull-0 ">
                        <div class="box box-primary">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php for ($i=1;$i<=12;$i++) {
                        echo "" ?>
                            <div class="col-lg-3">
                                <div class="box box-default" >
                                    <div class="box-header with-border" >
                                        <h3 class="box-title" > Konten <?php echo $i;?></h3 >
                                    </div >
                                    <div class="box-body" >
                                    The great content goes here
                                    </div >
                                    <div class="box-footer">
                                        <a href="#">Read more</a>
                                    </div>
                                    <!-- /.box - body-->
                                </div >
                            </div>
                          <?php ;
                        }
                    ?>
                </div>

                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->

<?php
$this->load->view('layout/foot');
?>
<!-- ./wrapper -->


</body>

</html>

