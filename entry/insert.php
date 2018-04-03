<?php
require_once "lib/_config.php";

if ($_POST['save']) {
	extract($_POST);

	


	$link->query("INSERT INTO `drug`(`drug_name`, `drug_company`, `drug_compositions`, `drug_price`, `drug_prescription`, `drug_packing`, `drug_used_for`, `drug_unsafe_with`, `drug_substitute`, `drug_quantity_by_packing`)
	 VALUES(
	 '".htmlentities(trim(addslashes(strip_tags($drug_name))))."','".htmlentities(trim(addslashes(strip_tags($drug_company))))."',
	 '".htmlentities(trim(addslashes(strip_tags($drug_compositions))))."','".htmlentities(trim(addslashes(strip_tags($drug_price))))."',
	 '".htmlentities(trim(addslashes(strip_tags($drug_prescription))))."','".htmlentities(trim(addslashes(strip_tags($drug_packing))))."',
	 '".htmlentities(trim(addslashes(strip_tags($drug_used_for))))."','".htmlentities(trim(addslashes(strip_tags($drug_unsafe_with))))."',
	 '".htmlentities(trim(addslashes(strip_tags($drug_substitute))))."','".htmlentities(trim(addslashes(strip_tags($drug_quantity_by_packing))))."'
	)");


	$sql = $link->query("select * from `drug` where `drug_name` = '".$drug_name."' order by `drug_id` DESC limit 0,1");
	$row = @mysqli_fetch_assoc($sql);


	$dc_drug_id = $row['drug_id'];
	$di_drug_id = $row['drug_id'];

	if(!empty($dc_name[0]))
	{

			for ($i=0; $i <count($dc_name); $i++) 

			{ 
				# code...
				$link->query("INSERT INTO `drug_composition`(`dc_name`, `dc_drug_id`, `dc_uses`, `dc_side_effects`, `dc_how_to_use`, `dc_how_drug_work`) VALUES (
			 '".htmlentities(trim(addslashes(strip_tags($dc_name[$i]))))."','".htmlentities(trim(addslashes(strip_tags($dc_drug_id))))."',
			 '".htmlentities(trim(addslashes(strip_tags($dc_uses[$i]))))."','".htmlentities(trim(addslashes(strip_tags($dc_side_effects[$i]))))."',
			 '".htmlentities(trim(addslashes(strip_tags($dc_how_to_use[$i]))))."','".htmlentities(trim(addslashes(strip_tags($dc_how_drug_work[$i]))))."')");
			}
		# code...
	}


	if(!empty($di_type[0]))
	{

			for ($i=0; $i <count($di_type); $i++) 

			{ 
				# code...
				$link->query("INSERT INTO `drug_info`(`di_drug_id`, `di_type`, `di_composition`, `di_topic`, `di_content`) VALUES(
			 '".htmlentities(trim(addslashes(strip_tags($di_drug_id))))."','".htmlentities(trim(addslashes(strip_tags($di_type[$i]))))."',
			 '".htmlentities(trim(addslashes(strip_tags($di_composition[$i]))))."','".htmlentities(trim(addslashes(strip_tags($di_topic[$i]))))."',
			 '".htmlentities(trim(addslashes(strip_tags($di_content[$i]))))."')");
			}
		# code...
	}
			
			$sql = @mysqli_affected_rows($link);
			if($sql == 1)
				$msg = '<i style="color:green">Successfully Saved</i>';
			else 
				$msg = '<i style="color:red">Unsuccessfully Saved</i>';
}


echo $msg;

	
?>

<a href="index.php">Add New</a>
