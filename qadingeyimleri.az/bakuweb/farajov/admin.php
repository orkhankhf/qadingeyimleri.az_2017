<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adminpanel</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		.slidere_foto_elave_et{
			margin-top: 25px;
		}
		.slidere_foto_elave_et input{
			width: 270px;
			display: inline-block;
		}
		.slidere_foto_elave_et button{
			width: 81px;
		}
		.sekili_kes_btn{
			width: 216px;
			float: right;
			border-radius: 0 !important;
		}
		.exit_adminpanel_btn_li{
			float: right !important;
			line-height: 40px;
		}
		.exit_adminpanel_btn{
			height: 33px;
		}
		.sil{
			margin-top: 10px;
		}
	</style>
</head>
<body>
<div class="container">
	<?php
		if(isset($_SESSION['login']) && isset($_SESSION['password'])){
			include "../../db/db.php";
		}else{
			echo "<script>window.location.href='../farajov';</script>";
		}
	?>
	<div class="row">
		<div class="col-xs-12">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#yeni_geyim_elave_et">Yeni Geyim Əlavə Et</a></li>
			  <li><a data-toggle="tab" href="#geyim_sil">Geyim Sil</a></li>
			  <li class="exit_adminpanel_btn_li"><button class='btn btn-danger exit_adminpanel_btn' onclick="exit_adminpanel()">Çıx</button></li>
			</ul>
			<script type="text/javascript">
				function exit_adminpanel(){
					var exit = "exit";
					$.ajax({
						url:"exit_adminpanel.php",
						type:"POST",
						data:{exit:exit},
						success:function(gelen){
							if(gelen == "admin_exit"){
								window.location = "index.php";
							}
						},
						error:function(){
							alert("Xəta baş verdi!");
						}
					});
				}
			</script>
			<div class="tab-content col-xs-4">
				<div id="yeni_geyim_elave_et" class="tab-pane fade in active">
					<form action="functions/geyim_elave_et.php" method='post' enctype="multipart/form-data">
						<div class="form-group">
							<label for="basliq">Başlıq</label>
							<input type="text" class="form-control" id="basliq" maxlength="80" required="" name="basliq">
						</div>
						<div class="form-group">
							<label for="qiymet">Qiymət (240)</label>
							<input type="number" class="form-control" id="qiymet" required="" name="qiymet">
						</div>
						<div class="form-group">
							<label for="parca_materiali">Parça Materialı (Vilur və Astar)</label>
							<input type="text" class="form-control" id="parca_materiali" maxlength="65" required="" name="parca_materiali">
						</div>
						<div class="form-group">
							<label for="parca_serfiyyati">Parça Sərfiyyatı (1.65 (vilur) və 1.00 (astar))</label>
							<input type="text" class="form-control" id="parca_serfiyyati" maxlength="65" required="" name="parca_serfiyyati">
						</div>
						<div class="form-group">
							<label for="kateqoriya">Kateqoriya:</label>
							<select class="form-control" id="kateqoriya" name="kateqoriya">
							    <option value="1">Gündəlik Paltarlar</option>
							    <option value="2">Koftalar</option>
							    <option value="3">Üst Geyimləri</option>
							    <option value="4">Ətəklər</option>
							    <option value="5">Kostyumlar</option>
							    <option value="6">Ziyafət Paltarları</option>
							    <option value="7">Gəlinliklər</option>
							    <option value="8">Uşaq Geyimləri</option>
							</select>
						</div>
						<div class="form-group">
						    <label for="sekil">Şəkil</label>
						    <input type="file" id="sekil" multiple="" name="image[]">
						    <p class="help-block">Birinci əsas şəkil olmaqla, 5 şəkil seçilə bilər və şəkilləri seçdikdən sonra əsas şəkili seçilən adlarda ilk sıraya gətirilməlidir (Şəkillərin ümumi həcmi 6 mb'dan artıq olmamalıdır).</p>
						</div>
						<input class="btn btn-success" type="submit" name="submit" value="Əlavə et" />
					</form>
				</div>

				<div id="geyim_sil" class="tab-pane fade">
					<div class="form-group">
						<label for="id_sil">Məhsulun ID nömrəsi</label>
						<input type="number" class="form-control" id="id_sil" required="" name="id_sil">
						<button class="btn btn-danger sil" onclick="mehsul_sil()">Sil</button>
						<script type="text/javascript">
							function mehsul_sil(){
								var mehsul_sil_id = $("#id_sil").val();
								$.ajax({
									url:"functions/mehsul_sil.php",
									data:{id:mehsul_sil_id},
									method:"POST",
									success:function(gelen){
										if(gelen == "ok"){
											alert("Məhsul silindi.");
											$("#id_sil").val("");
										}else{
											alert("Xəta baş verdi! "+gelen);
										}
									}
								});
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
  if(isset($conn)){
    mysqli_close($conn);
  }
?>
</body>
</html>