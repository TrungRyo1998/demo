<?php 
	trait productModel{
		//ham lay mot ban ghi
		public function fetchOne(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$record = db::get_one("select * from tbl_product where id=$id");
			return $record;
		}
		//ham lay danh sach cac ban ghi
		public function fetchAll($from, $recordPerPage){//ham fetchAll cua class productModel
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();			
			//chuan bi truy van
			$query = $db->prepare("select * from tbl_product where category_id = $id order by id desc limit $from, $recordPerPage");
			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute();
			//lay ket qua bang ham fetchAll cua PDO
			$arr = $query->fetchAll();//ham fetchAll cua PDO
			return $arr;
		}
		public function total(){
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();
			//---
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//phan trang
			//tinh tong so ban ghi
			$query_total = $db->prepare("select id from tbl_product where category_id=$id");
			$query_total->execute();
			$total = $query_total->rowCount();
			return $total;
		}
	}
 ?>