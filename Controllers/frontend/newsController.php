<?php 
	//load file model
	include "Models/Frontend/newsModel.php";
	class newsController extends baseController{
		//ke thua class newsModel
		use newsModel;
		//ham chi tiet tin tuc
		public function detail(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$record = $this->fetchOne();
			//set view
			$this->setView("Views/Frontend/news_detail.php",array("id"=>$id,"record"=>$record));
			//set template
			$this->setLayout("Views/Frontend/layout_trangtrong.php");
			//xuat html
			$this->renderBody();
		}
		//ham hien thi danh sach cac bai tin ung voi tung danh muc

	}
 ?>