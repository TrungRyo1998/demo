<?php 
	//load file model
	include "Models/Frontend/homeModel.php";
	class homeController extends baseController{
		public function index(){
			//---
			//set file view (cua mvc nay)
			$this->setView("Views/Frontend/home.php");
			//set file tempalte
			$this->setLayout("Views/Frontend/layout_trangchu.php");
			//xuat giao dien len man hinh
			$this->renderBody();
			//---
		}
	}
 ?>