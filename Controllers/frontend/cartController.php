<?php 
	
	class cartController extends baseController{		
		//hien thi gio hang
		public function index(){
			/*
				set view co 2 cach
				cach1: setview khong co truyen array la danh sach cac bien de su dung o view
				cach2: setview co truyen array la danh sach cac bien de su dung o view
			*/
				$this->setView("Views/Frontend/cart.php");
				$this->setLayout("Views/Frontend/layout_trangtrong.php");
				$this->renderBody();
		}
		//them moi san pham
		public function add(){
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//goi ham cart_add de tham phan tu vao session array
			
       
        
			cart::cart_add($id);
			//quay tro lai trang gio hang
			header("location:gio-hang"); //khi khong truyen vao action thi mac dinh action=index
			
		}
		//xoa sang pham khoi gio hang
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//goi ham xoa san pham
			cart::cart_delete($id);
			//quay tro lai trang gio hang
			header("location:gio-hang"); //khi khong truyen vao action thi mac dinh action=index
		}
		//xoa toan bo gio hang
		public function destroy(){
			cart::cart_destroy();
			//quay tro lai trang gio hang
			header("location:gio-hang"); //khi khong truyen vao action thi mac dinh action=index
		}
		//cap nhat san pham trong session array
		public function update(){
			//duyet cac phan tu trong session array, update lai number
			foreach($_SESSION["cart"] as $key=>$value){
				//lay number tu form
				$n = $_POST["product_".$value["id"]];
				$_SESSION["cart"][$key]["number"] = $n;
			}
			//quay tro lai trang gio hang
			header("location:gio-hang"); //khi khong truyen vao action thi mac dinh action=index
		}
	}
 ?>