
         <div class="col-md-3 left-menu">
        <div class="">
                     <?php 
      $category = db::get_all("select * from tbl_category order by category_id desc");
      
     ?>
          
          <h3>Danh mục sảm phẩm</h3>
          <ul>
            <?php foreach($category as $rows):  ?>
            <li class="active"><a href="danh-sach-san-pham/dongho-<?php echo $rows->category_id; ?>"><?php echo $rows->name; ?></a></li>
            <?php endforeach ?>
         
          </ul>


        </div>



        <div class="options">
          <h3>Tin Tức</h3>
                <?php 
            $hotnews = db::get_all("select * from tbl_news order by id desc limit 0,2");
             ?>

          <ul>
            <?php foreach ($hotnews as $rows): 
              
         ?>
            <li><a href="news/chi-tiet-new-<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <li class="divider"></li>
            <?php endforeach ?>

          </ul>

        </div>

        <div class="banner">
          <h4>FREE SHIPPING</h4>
        </div>
      </div>