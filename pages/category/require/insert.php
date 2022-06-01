<?php
	/**
	 * Created by User: Tourat * Date: 27-May-22 Time: 11:33 AM
	 */
	if(isset($_POST["btnSubmit"]))
	{
	$ctgId=htmlspecialchars(trim($_POST["ctgId"]));
	$ctgName=htmlspecialchars(trim($_POST["ctgName"]));
	$ctgDesc=htmlspecialchars(trim($_POST["ctgDesc"]));
	$ctgCode=htmlspecialchars(trim($_POST["ctgCode"]));
	//	$ctgFhoto=htmlspecialchars(trim($_POST["ctgFhoto"]));
	$form_data=$_FILES["file_data"];
	
	//	echo $ctgId."<br>".$ctgName."<br>".$ctgDesc."<br>".$form_data;
	echo 1;
	}
	
	//	if ($file) {
	//		# code...
	//		$id=$employee->save($file);
	//		if ($id>0) {
	//			# code...
	//			echo success_alert("Success!!","Your Employee Add Successfull!");
	//		} elseif ($id==-1) {
	//			# code...
	//			echo danger_alert("Danger!!","Photo Type is invalied");
	//
	//		}elseif ($id==-2) {
	//			# code...
	//			echo danger_alert("Danger!!","Photo Size is invalied");
	//		}else {
	//			# code...
	//			echo danger_alert("Danger!!","Data doesn't submite!!");
	//		}
	//
	//	}
?>