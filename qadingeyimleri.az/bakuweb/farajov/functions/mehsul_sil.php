<?php
	if(isset($_POST['id']) && is_numeric($_POST['id']) && !empty($_POST['id'])){
		include "../../../db/db.php";
		$id = $_POST['id'];

		if($conn){

			$select_img_for_unlink = "SELECT img FROM geyimler WHERE id='$id'";
			$netice_select_img = mysqli_query($conn,$select_img_for_unlink);
			while($row = mysqli_fetch_assoc($netice_select_img)){
				$img_unlink = $row['img'];
			}

			$delete = "DELETE FROM geyimler WHERE id='$id'";
			$netice = mysqli_query($conn,$delete);

			if($netice){
				$folder_is_empty = false;
				foreach (glob("../../../images/".$img_unlink."/*.*") as $filename){
				    if(is_file($filename)){
				        unlink($filename);
				        $folder_is_empty = true;
				    }
				}
				if($folder_is_empty == true){
					rmdir("../../../images/".$img_unlink);
					echo "ok";
				}
			}
		}else{
			echo "Bağlantı qurulmadı";
		}
	}else{
		echo "ID adresi düzgün deyil";
	}
	if(isset($conn)){
	    mysqli_close($conn);
	}
?>