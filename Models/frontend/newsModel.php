<?php 
	trait newsModel{
		//ham lay mot ban ghi
		public function fetchOne(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$record = db::get_one("select * from tbl_news where id=$id");
			return $record;
		}


	}
 ?>