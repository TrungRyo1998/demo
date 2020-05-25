
      <div class="bredCrum" style="margin-bottom:38px;">
        <h4>Sản phẩm nổi bật</h4>
      </div>  
      <?php 
      $hotproduct = db::get_all("select * from tbl_product where hotproduct=1 order by id desc limit 0,6");
     ?>
        
    <div class="row">
     <?php foreach($hotproduct as $rows): ?>
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
              
            <a class="btn btn-primary" href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Bạn có muốn thêm vào giỏ hàng');">Thêm vào giỏ</a>
            
            
        </div>

        </div>
      </div>
    <?php endforeach ?>
    
    </div>


























        <?php 
            $newproduct = db::get_all("select * from tbl_product order by id desc limit 0,6");
           ?>
          
      <div class="bredCrum" style="margin-bottom:38px;">
        <h4>Sản phẩm mới</h4>
      </div>
          <div class="row">
     <?php foreach($newproduct as $rows): ?>
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
              
            <a class="btn btn-primary" href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Bạn có muốn thêm vào giỏ hàng');">Thêm vào giỏ</a>
            
          </div> 
        </div>
      </div>
    <?php endforeach ?>
    
    </div>

     
      