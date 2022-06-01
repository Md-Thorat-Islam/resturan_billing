	<?php
	/**
	 * Created by Md Thorat Islam.
	 * User: Tourat
	 * Date: 21-May-22
	 * Time: 10:11 PM
	 */
	function breadcum($page_location=array()){
		$html="<h4 class='fw-bold py-3 mb-4'>";
		if ($page_location>0){
			foreach ($page_location as $locate){
				$html.="<span class='text-muted fw-light'>";
				$html.=ucfirst($locate["from"])."/</span>".ucfirst($locate["to"]);
				
			}
		}
		$html.="</h4>";
		return $html;
	}
	function menu_head_divider($text ,$class=""){
		$html="<li class='menu-header small text-uppercase $class'>";
		$html.="<span class='menu-header-text'>$text</span>";
		$html.="</li>";
		return $html;
	}
	function nav_link($url,$text)
	{
		$html="<a href='$url' class='menu-link'>";
		$html.="<i class='menu-icon tf-icons'></i>";
		$html.="<div data-i18n='".str_replace(" ","",strtolower($text))."'>$text</div>";
		$html.="</a>";
		return $html;
	}
	function nav_dropdown($options){
		$html="<ul class='menu-sub'>";
		foreach ($options as $option){
			$html.="<li class='menu-item'> ";
			$html.=nav_link($option["url"],$option["text"],$option["class"]);
			$html.="</li>";
		}
		$html.="</ul>";
		return $html;
	}
	function nav_link_dropdown($url,$text,$class="bx bx-dock-top",$options=array()){
		if(count($options)){
			$html="<a href='$url' class='menu-link menu-toggle'>";
		}else{
			$html="<a href='$url' class='menu-link'>";
		}
		$html.="<i class='menu-icon tf-icons $class'></i>";
		$html.="<div data-i18n='".str_replace(" ","",strtolower($text))."'>$text</div>";
		$html.="</a>";
		if(count($options)){
			$html.=nav_dropdown($options);
		}
		return $html;
	}
		function basic_icons_input_field($title,$inputs=array())
		{
			
			$html="<input type='hidden' value='$title'/>";
			foreach ($inputs as $field)
			{
				$field["placeholder"]=isset($field["placeholder"])?$field["placeholder"]:"";
				$field["required"]=isset($field["required"])?$field["required"]:"";
				$field["labelName"]=isset($field["labelName"])?$field["labelName"]:"";
				$field["value"]=isset($field["value"])?$field["value"]:"";
				$field["name"]=isset($field["name"])?$field["name"]:"";
				$field["id"]=isset($field["id"])?$field["id"]:"";
				$field["type"]=isset($field["type"])?$field["type"]:"";
				$field["icon"]=isset($field["icon"])?$field["icon"]:"";
				$field["mrgin-bottom"]=isset($field["mrgin-bottom"])?$field["mrgin-bottom"]:"";
				
				
				$html.="<div class='{$field["mrgin-bottom"]}'>";
				$html.="<label class='form-label' for='{$field["id"]}'>";
				$html.=$field["labelName"];
				$html.="</label>";
				$html.="<div class='input-group input-group-merge'>";
				$html.="<span class='input-group-text'>";
				$html.="<i class='".$field["icon"]."'></i></span>";
				$html.="<input type='{$field["type"]}' name='{$field["name"]}'  class='form-control' id='{$field["id"]}' placeholder='" .$field["placeholder"]."'  {$field["required"]}/></div>";
				$html.="</div>";
				
			}
			return $html;
		}
	function search()
	{
		$html="<div class='navbar-nav align-items-center'>";
		$html.="<div class='nav-item d-flex align-items-center'>";
		$html.="<i class='bx bx-search fs-4 lh-0'></i>";
		$html.="<input type='text' class='form-control border-0 shadow-none' placeholder='Search...' aria-label='Search...'/>";
		$html.="</div>";
		$html.="</div>";
		return $html;
	}
	function alert($alert_type="",$tittle=""){
		$html="<div class='alert alert-$alert_type alert-dismissible' role='alert'>";
		$html.=$tittle;
		$html.="<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
		$html.="</div>";
		return $html;
	}
	?>