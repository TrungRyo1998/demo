

		    <ul class="breadcrumb prod">
			    <li><a href="trang-chu">Trang chủ</a> <span class="divider"></span></li>
				<li class="active"><?php echo $record->name; ?></li>
		    </ul>

		<div>
		    <div class="col-md-6">
					
				<div class="image"><a class="cloud-zoom" rel="adjustX: 0, adjustY:0" id='zoom1' href="" title="Nano"><img src="Assets/Upload/Product/<?php echo $record->img; ?>" title="Nano" alt="Nano" id="image" /></a></div>
				
  			</div>
		    <div class="col-md-9">
				<h1><?php echo $record->name; ?></h1>
				    <div class="line"></div>
						<div>
							<?php echo $record->description; ?>
						</div>
					<div class="price">
						<p style="font-size: 20px">Price  :  <?php echo number_format($record->price);  ?></p>
					</div>

				

				   

					<form class="form-inline">
						<a class="btn btn-primary" href="index.php?controller=cart&action=add&id=<?php echo $record->id; ?>" onclick="return window.confirm('Bạn có muốn thêm vào giỏ hàng');">Thêm vào giỏ</a>
						
					</form>
					<div class="line"></div>
				<div class="tabs">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home">Chi tiết sản phẩm</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="home"><?php echo $record->content; ?> </div>
					</div>
					</div>
			</div>

		</div>
					
		
		
		
		<div class="row">
		<div class="col-md-12">
		<h3 class="related">Sản phẩm liên quan</h3>
			<?php 
                                $other = db::get_all("select * from tbl_product where category_id=$record->category_id and id < $record->id limit 0,4");
                                foreach($other as $rows):
                             ?>
		    <div class="col-md-3">
			    <div class="product">
				    <a href="san-pham/chi-tiet-<?php echo $rows->id ?>"><img alt="dres2" src="Assets/Upload/Product/<?php echo $rows->img; ?>"></a>
				    <div class="name">
				    <a href="san-pham/chi-tiet-<?php echo $rows->id ?>"><?php echo $rows->name; ?></a>
				    </div>
				    <div class="price">
				    <p><?php echo number_format($rows->price) ?></p>
				    </div>	

				</div>	

			
			</div>	
			<?php endforeach ?>		
		   
			
			
		    	
			
		</div>
		</div>
		