<?php
	if(isset($_POST["submit"])){
		$total = count($_FILES['image']['name']);
		$basliq = $_POST["basliq"];
		$basliq = trim($basliq);

		$qiymet = $_POST["qiymet"];
		$qiymet = trim($qiymet);

		$parca_materiali = $_POST["parca_materiali"];
		$parca_materiali = trim($parca_materiali);

		$parca_serfiyyati = $_POST["parca_serfiyyati"];
		$parca_serfiyyati = trim($parca_serfiyyati);

		$kateqoriya = $_POST["kateqoriya"];
		
		$sekil_move_olub = false;

		if($total < 6){
			//images papkasinda yeni mehsul ucun papka yaradilir start
			$item_folder = time();
			mkdir("../../../images/".$item_folder);
			//images papkasinda yeni mehsul ucun papka yaradilir finish

			for($i=0; $i<$total; $i++) {
			  $yeri = $_FILES['image']['tmp_name'][$i];
			  $olcusu = $_FILES['image']['size'][$i];

			  //Make sure we have a filepath
			  if ($yeri != "" && $olcusu < 20000000){
			    //Setup our new file path
			    $yeni_yeri = "../../../images/".$item_folder."/image".$i.".jpg";
			    //Upload the file into the temp dir
			    if(move_uploaded_file($yeri, $yeni_yeri)) {
			    	$sekil_move_olub = true;
			    }
			  }else{
			  	echo "Faylın göndərilməsində problem yaşandı!";
			  }
			}
		}else{
			echo "<script>alert('Maksimum 5 şəkil yükləmək olar!');
					window.location.href='../admin.php';</script>";
		}
		if($sekil_move_olub == true){
	    	include '../../../db/db.php';
	    	if($conn){
	    		$insert = "INSERT INTO geyimler (basliq,qiymet,parca_materiali,parca_serfiyyati,kateqoriya,img) VALUES ('$basliq','$qiymet','$parca_materiali','$parca_serfiyyati','$kateqoriya','$item_folder')";
				$netice = mysqli_query($conn,$insert);
	    		if($netice){
	    			echo "<script>window.location.href='../admin.php';</script>";
	    		}else{
	    			echo "Məlumatlar databazaya yazılmadı!";
	    		}
			}
		}
	}else{
		header('Location: ../../farajov');
	}
?>