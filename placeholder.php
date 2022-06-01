<?php
/**
 * Created by PhpStorm.
 * User: Tourat
 * Date: 28-Apr-22
 * Time: 1:31 AM
 */
  if(isset($_GET["page"])){
	  $page=$_GET["page"];
	  $not_found=1;
	  if($page=="home"){
		  include("pages/dashboard.php");
		  $not_found=0;
	  }
	  elseif($page=="item_add")
	  {
		  include("pages/item_manage/item_add.php");
		  $not_found=0;
	  }elseif ($page=="add_category"){
	  	  include("pages/category/add_category.php");
		  $not_found=0;
	  }elseif ($page=="category_list_table"){
	  	include ("pages/category/category_list_table.php");
		  $not_found=0;
	  }
	  
	  if ($not_found==1) {
		  # code...
		  include("pages/error.php");
	  }
  }else {
	  # code...
	  include("pages/dashboard.php");
  }

