<!-- 
                    	<div class="col-md-9">
                            <p style="font-size: 20px"><?php echo $record->name; ?></p>
                        </div>
                        <div class="col-md-9">
                        	<img src="Assets/Upload/News/<?php echo $record->img; ?>" alt="">
                        </div>
                        <div class="post-content" style="margin-top: 10px;">
                            <?php echo $record->description; ?>
                            <?php echo $record->content; ?>
                            
                            
                            
                        </div> -->
                
                <div class="col-md-9">
                <h1><?php echo $record->name; ?></h1>
                    <div class="line"></div>
                        <div>
                            <?php echo $record->description; ?>
                        </div>
                    <div class="line"></div>
                <div class="tabs">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#home">Chi tiết bài viết</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home"><?php echo $record->content; ?> </div>
                    </div>
                    </div>
            </div>
                    <h3 class="related">Tin tức liên quan</h3>
        
        <div class="row">
        <div class="col-md-12">

            <?php 
                         $other = db::get_all("select * from tbl_news where category_id=$record->category_id and id < $record->id limit 0,4");
                                foreach($other as $rows):
                             ?>
            <div class="col-md-3">
                <div class="product">
                    <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><img alt="dres2" src="Assets/Upload/news/<?php echo $rows->img; ?>"></a>
                    <div class="name">
                    <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                    </div>
                    <div class="price">
                <s></s>
                    </div>  

                </div>  

            
            </div>  
            <?php endforeach ?>     
           
            
            
                
            
        </div>
        </div>