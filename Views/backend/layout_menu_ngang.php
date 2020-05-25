<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
  <base href="http://localhost/my_web/">
	<link rel="stylesheet" type="text/css" href="Assets/backend/css/bootstrap.min.css">
  <!-- load ckeditor -> ckeditor.com -->
  <script type="text/javascript" src="Assets/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
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
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   <div class="container" style="margin-top:70px;">
   	<?php 
      echo $this->view;
   ?>
   </div>

</body>
</html>