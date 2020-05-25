<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <base href="http://localhost/my_web/">
    <!-- Core CSS - Include with every page -->
    <link href="Assets/Backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/Backend/font-awesome/Assets/Backend/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="Assets/Backend/css/sb-admin.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin">Admin page</a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin/trang-chu"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                        </li>                        
                        <li>
                            <a href="admin/list-category"><i class="fa fa-table fa-fw"></i> Danh mục sản phẩm</a>
                        </li>
                        <li>
                            <a href="admin/list-product"><i class="fa fa-edit fa-fw"></i> Danh sách sản phẩm</a>
                        </li>
                        <li>
                            <a href="admin/list-news"><i class="fa fa-edit fa-fw"></i> Tin tức</a>
                        </li>
                        <li>
                            <a href="admin/list-user"><i class="fa fa-edit fa-fw"></i> User</a>
                        </li>
                        <li>
                            <a href="logout"><i class="fa fa-edit fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="padding-top: 20px;">
            <div class="row">
                <div class="col-lg-12">
                    <!-- content here -->
                    <?php 
                        echo $this->view;
                     ?>
                    <!-- end content -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="Assets/Backend/js/jquery-1.10.2.js"></script>
    <script src="Assets/Backend/js/bootstrap.min.js"></script>
    <script src="Assets/Backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="Assets/Backend/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Blank - Use for reference -->

</body>

</html>
