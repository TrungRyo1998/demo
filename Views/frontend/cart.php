<?php 
    //kiem tra xem gio hang co ton tai khong, neu co thi hien thi len
    if(isset($_SESSION["cart"])):
 ?>
		    <div class="col-md-9	">
				<h2>Giỏ hàng của bạn</h2>
			</div>

			
		

		    <div class="col-md-9">
			<div class="cart-info">
				<form action="index.php?controller=cart&action=update" method="post">
				<table class="table">
					<thead>
					    <tr>
							<th class="image">Ảnh</th>
							<th>Tên sản phẩm</th>
							
							<th>Giá</th>
							<th>Số lượng</th>
							<th class="total">Tiền</th>
							<th></th>

						</tr>
					</thead>
					<?php 
                  //duyet cac phan tu trong sesion cart
                  foreach($_SESSION["cart"] as $key=>$product):
                 ?>  
					<tbody>
						<tr>
						    <td class="image"><img alt="IMAGE" src="Assets/upload/product/<?php echo $product["img"]; ?>"></td>
							<td class="name"><a href="index.php?controller=product&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></td>
							
							<td><?php echo number_format($product["price"]); ?></td>
							<td>
							<input type="text" id="quantity" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>"> 
							
								</td>
								
							
								
							<td class="total"><?php echo number_format($product["number"]*$product["price"]); ?></td>
							<td>
								<a type="image" title="Remove" alt="Remove"  href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"><img src="Assets/frontend/img/remove.png"alt="" onclick="return window.confirm('Bạn có muốn xóa hàng');"></a> 
								<input type="image" class="button pull-right" src="Assets/frontend/img/update.png"></td>

							</td>
						</tr>
					</tbody>	
					<?php endforeach ?>	
					
							
				</table>
			 </form>
            </div> 

            	 <?php 
                //kiem tra neu co phan tu trong gio hang thi moi hien thi noi dung ben duoi
                if(cart::cart_number() > 0): 
                ?>
		    <div class="col-sm-6 col-sm-offset-6" style=" margin-left: 44%">
				<div class="cart-totals">
					<table class="table">
					    
					    <tr>
							<th><span>Tổng tiền</span></th>
							<td><b><?php echo number_format(cart::cart_total()); ?></b></td>
						</tr>	

						<tr>
							<th><span><a href="index.php?controller=cart&action=destroy"  class="btn btn-primary" onclick="return window.confirm('Bạn có muốn xóa toàn bộ giỏ hàng');">Xóa toàn bộ</a></span></th>
                    <td colspan="6">
                    	
                    
                     
                    	<a href="trang-chu"class="btn btn-primary">Tiếp tục mua hàng</a>
                    
                  </tr>		
				</table>
				<p>
				<a class="btn btn-primary" href="thanh-toan">
					Thanh toán
				</a>
				</p>
				</div>
				</div>	
		<?php endif; ?>
	
		    </div>	

		<?php endif; ?>
				

