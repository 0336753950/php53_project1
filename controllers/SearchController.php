<?php 
	//load file model
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//ke thua class SearchModel
		use SearchModel;
		//liet ke so ban ghi
		public function index(){
			//quy dinh so ban ghi mot trang
			$recordPerPage = 20;
			//tinh so trang
			//ham ceil la ham lay tran. VD: ceil(2.1) = 3
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//lay danh sach cac ban ghi co phan trang
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("SearchView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function getCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			$record = $query->fetch();
			return $query->rowCount() > 0 ? $record->name : "";
		}	
	}
 ?>