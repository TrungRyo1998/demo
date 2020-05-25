<?php 
	//load file model
	include "Models/Frontend/productModel.php";
	class productController extends baseController{
		//ke thua class productModel
		use productModel;
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham lay mot ban ghi tu model
			$record = $this->fetchOne();//ham nay trong class productModel
			//load view
			//muon truyen bien nao ra view thi dua no vao array
			$this->setView("Views/frontend/product_detail.php", array("record"=>$record));
			//chon template
			$this->setLayout("Views/frontend/layout_trangtrong.php");
			//hien thi noi dung
			$this->renderBody();
		}
		//ham hien thi danh sach cac bai tin ung voi tung danh muc
		public function category(){
			//lay bien id truyen tu url
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			$total = $this->total();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 9;
			//tinh so trang
			$num_page = ceil($total/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record = $this->fetchAll($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/frontend/layout_trangtrong.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/frontend/product_category.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		
	}
 ?>