<?php 
	//load file model

	class contactController extends baseController{
		//ke thua class newsModel
	
		//ham chi tiet tin tuc
		public function index(){
		
			$this->setView("Views/Frontend/contact.php");
			//set template
			$this->setLayout("Views/Frontend/layout_trangtrong.php");
			//xuat html
			$this->renderBody();
		}
		
	}
 ?>