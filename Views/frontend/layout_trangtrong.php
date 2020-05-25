
      <!doctype html>
<html>

<!-- Mirrored from www.nicolethemes.com/sapphire-html/category_menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2019 18:47:23 GMT -->
<head>
   <base href="http://localhost/my_web/">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Assets/frontend/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Assets/frontend/css/bootstrap-select.css">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700' rel='stylesheet' type='text/css'/>
  <link href='Assets/frontend/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="Assets/frontend/css/camera.css">
    <link rel="stylesheet" type="text/css" href="Assets/frontend/css/style.css">
    <!--script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script-->  
  <title>Sapphire</title>
</head>
<body>
<div class="page-container">
    <div class="header">
      <nav class="navbar container">
    
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="trang-chu" class="navbar-brand">
          <img src="Assets/frontend/img/logo.png" alt="Sapphire">Sapphire
        </a>
        </div>
  
                 
                 <div class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                      <li class="active"><a href="trang-chu">Trang chủ</a></li>
                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Danh mục<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                   <?php 
      $category = db::get_all("select * from tbl_category order by category_id desc");
      foreach($category as $rows):
     ?>
                          
                          <li><a href="danh-sach-san-pham/dongho-<?php echo $rows->category_id; ?>"><?php echo $rows->name; ?></a></li>
                          <li class="divider"></li>
                          <?php endforeach ?>
                          

                        </ul>
                      </li>
  
                      <li><a href="gio-hang">Giỏi hàng</a></li>
                      <li><a href="lien-he" class="ajax_right">Liên hệ</a></li>
                    </ul>

                    <ul class="nav navbar-right cart">
                      <li class="dropdown">
                   <a href="index.php?controller=cart" class="dropdown-toggle" data-toggle="dropdown"><span><?php if(isset($_SESSION["cart"])): ?><?php echo cart::cart_number(); ?><?php endif; ?></span></a>
          <div class="cart-info dropdown-menu">
            <?php if(isset($_SESSION["cart"])): ?>
            <table class="table">
              <tbody>
               
          <?php foreach($_SESSION["cart"] as $product): ?>
                <tr>
                  <td class="image"><img alt="IMAGE" class="img-responsive" src="Assets/upload/product/<?php echo $product["img"]; ?>"></td>
                  <td class="name"><a href="index.php?controller=product&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></td>
                  <td class="quantity">x&nbsp;<?php echo $product["number"]; ?></td>
                  <td class="total"><?php echo number_format($product["number"]*$product["price"]); ?></td>
                  <td class="remove"><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"><img src="Assets/frontend/image/remove-small.png" alt="Remove" title="Remove"></a></td>                      
                </tr>
          <?php endforeach; ?>
        
      
              </tbody>                  
            </table>
            <div class="cart-total">
              <table>
               <tbody>
                <?php 
                //kiem tra neu co phan tu trong gio hang thi moi hien thi noi dung ben duoi
                if(cart::cart_number() > 0): 
                ?>
                <tr>
                  <td><b>Total:</b></td>
                  <td><?php echo number_format(cart::cart_total()); ?></td>
                </tr>
              <?php endif; ?>
              </tbody>
              </table> 
            
              <div class="checkout"><a href="index.php?controller=cart" class="ajax_right">View Cart</a> | <a href="index.php?controller=checkout" class="ajax_right">Checkout</a></div>
            </div>
<?php endif; ?>
          </div>
            </li>
           </ul>
           
                    <form action="http://www.nicolethemes.com/" class="navbar-form navbar-search navbar-right" role="search">
          <div class="input-group"> 
                        <input type="text" name="search" placeholder="Search" class="search-query col-md-2"><button type="submit" class="btn btn-default icon-search"></button> 
                      </div>
                    </form>
           
                  </div><!-- /.navbar-collapse -->
      </nav>    
    </div>
    
    <div class="container">
        
    <div class="row">
       
      <?php include "Views/frontend/inc_category.php"; ?>
          
    
      
    
    
      <?php echo $this->view; ?>    
    
    
   




     </div>
   </div> 
   </div>   
  
  <div class="footer black">
    <div class="container">
      <!-- div class="arrow"><b class="caret"></b></div -->
        <div class="row">
            <div class="col-md-3">
          <div>
              <h3>Information</h3>
                <ul>
                  <li><a href="about.html">About Us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
            </div>
        </div>
            <div class="col-md-3">
          <div>
              <h3>Customer Service</h3>
                <ul>
                  <li><a href="contact.html" class="ajax_right">Contact Us</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Site Map</a></li>
              <li><a href="#">Shipping</a></li>
                </ul> 
            </div>
        </div>  

            <div class="col-md-3 twitter">
          <div class="row">
            <h3>Follow us</h3>
            <script type="text/javascript" src="Assets/frontend/js/twitterFetcher_v9_min.js"></script>
            <ul id="twitter_update_list"><li class="col-md-2">Twitter feed loading</li></ul>      
            <script>twitterFetcher.fetch('256524641194098690', 'twitter_update_list', 2, true, true, false);</script> 
          </div>        
        </div>  

        
        <div class="col-md-3 social">
          <div class="copy">Copyright &copy; nicole_89</div>
          <ul class="social-network">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>  
          </ul>
        </div>

        </div>  
  </div>
  </div>  
</div>

<!-- script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'><\/script>")</script -->
<script type="text/javascript" src="Assets/frontend/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="Assets/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Assets/frontend/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="Assets/frontend/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="Assets/frontend/js/sapphire.js"></script>
</body>

</html>
