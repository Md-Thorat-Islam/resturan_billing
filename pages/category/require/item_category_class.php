<?php
	/**
	 * Created by Tourat.
	 * User: Tourat
	 * Date: 23-May-22
	 * Time: 11:12 PM
	 */
	class Item_Category {
		public $id;
		public $category_name;
		public $description;
		public $category_code;
		public $status_active;
		public $is_delete;
		public $create_at;
		
		public function __construct($id,$category_name,$description,$category_code,$status_active,$is_delete,$create_at)
		{
			$this->id=null?"":$id;
			$this->category_name=$category_name;
			$this->description=$description;
			$this->category_code=$category_code;
			$this->status_active=$status_active;
			$this->is_delete=$is_delete;
			$this->create_at=$create_at;
		}
		public function save($file)
		{
			global $db;
			
			$db->query("INSERT INTO tbl_category(category_name, description, category_code, status_actve, is_delete, create_at)VALUES
('$this->category_name','$this->description','$this->category_code','$this->status_active','$this->is_delete','$this->create_at')");
			if (is_array($file)) {
				$ext=pathinfo($file["name"],PATHINFO_EXTENSION);
				
				$size=$file["size"]/1024;
				$type=$file["type"];
				if ($type=="image/png" || $type=="image/jpeg")
				{
					# code...
					if ($size<=1000)
					{
						move_uploaded_file($file["tmp_name"],"../../../assets/img/category/{$db->insert_id}".".{$ext}");
					}
					} else
					{
						return -2;
					}
					
				} else {
					# code...
					return -1;
				}
			return $db->insert_id;
		}
	}