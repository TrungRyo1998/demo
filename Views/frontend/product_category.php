
<div class="col-md-9">

                    <?php 
                        $id = isset($_GET["id"])?$_GET["id"]:0;
                        //$category = db::get_one("select name from tbl_category where category_id=:id", array("id"=>$id));
                        $category = db::get_one("select name from tbl_category where category_id=$id");
                       
                     ?>

          <div class="row">
        <div class="col-md-12">
          <div class="breadcrumbs">
            <ul class="breadcrumb">
                        <li><a href="index.php">Home</a> <span class="divider"></span></li>
                        <li class="active"><?php echo $category->name; ?></li>
                    </ul>
        </div>
      </div>
      
    </div>
    
    <div class="row">
        <div class="col-md-12">
          <div class="cat_header">
            <h2><?php echo $category->name; ?></h2>
          </div>

      </div>
    </div>
        <div class="row">
     <?php foreach($list_record as $rows): ?>
        <div class="col-md-4">
          <div class="product">
            <a href="san-pham/chi-tiet-<?php echo $rows->id ?>"><img alt="dress5" src="Assets/Upload/Product/<?php echo $rows->img; ?>"></a>
            <div class="name">
            <a href="san-pham/chi-tiet-<?php echo $rows->id ?>"><?php echo $rows->name; ?></a>
            </div>
            <div class="price">
            <p><?php echo number_format($rows->price); ?></p>
            </div>  
            <div>
              <a class="btn btn-primary" href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>"  onclick="return window.confirm('Bạn có muốn thêm vào giỏ hàng');">Thêm vào giỏ</a>
            </div>
        </div>
      </div>
    <?php endforeach ?>
    
    </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <ul class="pagination pull-right">

           <?php for($i = 1; $i <= $num_page; $i++): ?>

          <li class="active"><a href="index.php?controller=product&action=category&id=<?php echo $rows->category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endfor ?>
        
        </ul>
      </div>
    </div>
