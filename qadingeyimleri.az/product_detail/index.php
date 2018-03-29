<!DOCTYPE html>
<html lang="en">
		<?php
			if(isset($_GET['id']) && is_numeric($_GET['id'])){
				include "../db/db.php";
				$id = $_GET['id'];
				$select = "SELECT * FROM geyimler WHERE id = ".$id;
				$query = mysqli_query($conn,$select);
				while($row = mysqli_fetch_assoc($query)){
					$id_movcuddur = true;
					$basliq = $row['basliq'];
					$qiymet = $row['qiymet'];
					$parca_materiali = $row['parca_materiali'];
					$parca_serfiyyati = $row['parca_serfiyyati'];
					$kateqoriya = $row['kateqoriya'];
					$kateqoriya_select = $row['kateqoriya'];/*asagida databazadan bu kateqoriyadakilar secilecek*/
					$img = $row['img'];
				}
				if(!isset($id_movcuddur)){
					echo "<script type='text/javascript'>window.location='../'</script>";
				}
				if($kateqoriya == 1){
					$kateqoriya = "Gündəlik Paltarlar";
				}else if($kateqoriya == 2){
					$kateqoriya = "Koftalar";
				}else if($kateqoriya == 3){
					$kateqoriya = "Üst Geyimləri";
				}else if($kateqoriya == 4){
					$kateqoriya = "Ətəklər";
				}else if($kateqoriya == 5){
					$kateqoriya = "Kostyumlar";
				}else if($kateqoriya == 6){
					$kateqoriya = "Ziyafət Paltarları";
				}else if($kateqoriya == 7){
					$kateqoriya = "Gəlinliklər";
				}else if($kateqoriya == 8){
					$kateqoriya = "Uşaq Geyimləri";
				}
			}else{
				echo "<script type='text/javascript'>window.location='../'</script>";
			}
		?>

	<head>
		<link rel="alternate" hreflang="az" href="http://qadingeyimleri.az/product_detail" />
		<meta http-equiv="content-language" content="az" />
		<meta name="keywords" content="<?php echo $basliq; ?>,<?php echo $kateqoriya; ?>,qadın dünyası, qadın geyimlərinin tikilişi, qadın paltarlarının tikilişi,dərzi,bakıda modalar evi, qadın geyimləri, brend qadın paltarları" />
		<meta name="description" content="<?php echo $basliq; ?> - Qadın Geyimləri" />
		<link rel="author" href="https://plus.google.com/108728687434805525511/posts"/>
		<meta name="abstract" content="Ən son moda qadın geyimlərinin Modalar Evində tikilişi." />
		<meta name="copyright" content="Bakuweb Dizayn Studiyası" />
		<meta name="robots" content="index, follow" />
	   	<meta property="og:url" content="http://qadingeyimleri.az/product_detail/?id=<?php echo $id; ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo $basliq; ?>" />
		<meta property="og:description" content="Qiymət: <?php echo $qiymet; ?> AZN - Kateqoriya: <?php echo $kateqoriya; ?>" />
		<meta property="og:image" content="http://qadingeyimleri.az/images/<?php echo $img;?>/image0.jpg" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
		<meta property="fb:app_id" content="746399918870185" />
		<meta property="fb:admins" content="OrxanDWK" />
		<meta property="og:site_name" content="Qadingeyimleri" />
		<link rel="icon" href="../themes/images/favicon.png" type="image/png" sizes="16x16">
		<meta charset="utf-8">
		<title><?php echo $basliq; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="../themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="../themes/css/main.css" rel="stylesheet"/>
		<link href="../themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="../themes/js/jquery-1.7.2.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>				
		<script src="../themes/js/superfish.js"></script>	
		<script src="../themes/js/jquery.scrolltotop.js"></script>
		<script src="../themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		<link href="../themes/css/native.css" rel="stylesheet"/>
	</head>
    <body>
    	<h1 class="seo_h1">Qadin paltarlarinin tikilisi, qadın paltarları, en son moda, ən son moda <?php echo $basliq; ?> qadın geyimləri</h1>
    	<h2 class="seo_h1">bakida moda evi, modalar evi, qadin dunyasi, qadin yubkalari, qadin koftalari</h2>
    	<script type="text/javascript">
    		/*jquery.scrolltotop.js faylinda eger asagidaki deyisken tapilarsa, o zaman scroll top img src deyisir ki bir papka geriye getsin (index.php xaricinde butun apkalarda tetbiq olunmalidir ki themes/images... getmek ucun bir papka geri cixsin ../)*/
    		var my_scroll_top_var = "scroll_top";
    	</script>
    	<div class="upper_menu container">
    		<ul>
    			<li><a href="../" title="Qadin Geyimleri Ana Səhifə"> Ana Səhifə </a> | </li>
    			<li><a href="../contact" title="Qadin Geyimleri Bizimlə Əlaqə"> Bizimlə Əlaqə </a> | </li>
    			<li><a href="../contact" title="Qadin Geyimleri Müraciət Formu"> Müraciət Formu </a></li>
    		</ul>
    	</div>
		<div id="wrapper" class="container">
			<h3 class="seo_h1">qadingeyimleri.az qadin dunyasi, <?php echo $basliq; ?>. Paltarlarin tikilisini en yuksek seviyyede heyata keciririk.</h3>
			<h5 class="seo_h1">tikilme paltarlar ve qadin geyimlerinin sifarisi</h5>
			<?php
				include "../includes/navbar.php";
			?>
			<section class="header_text sub">
			<img class="pageBanner" src="../themes/images/pageBanner.png" alt="Qadin modasi ve qadin paltarlari" >
				<h2 class="my_product_header"><span><?php echo $basliq; ?></span></h2>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="../images/<?php echo $img;?>/image0.jpg" class="thumbnail" data-fancybox-group="group1" title="<?php echo $basliq;?>"><img alt="<?php echo $basliq;?>" src="../images/<?php echo $img;?>/image0.jpg"></a>												
								<ul class="thumbnails small">
									<?php
										$directory = "../images/".$img."/";
										$filecount = 0;
										$files = glob($directory . "*");
										if ($files){
											$filecount = count($files);
										}
										if($filecount>1){
											for($a=1;$a<$filecount;$a++){
												echo "<li class='span1'>
														<a href='../images/".$img."/image".$a.".jpg' class='thumbnail' data-fancybox-group='group1' title='".$basliq."'><img src='../images/".$img."/image".$a.".jpg' alt='".$basliq."'></a>
													</li>";
											}
										}
									?>
								</ul>
							</div>
							<div class="span5">
								<div class="product_info">
									<strong>Parça Materialı:</strong> <span><?php echo $parca_materiali; ?></span><br>
									<strong>Parça Sərfiyyatı (metr):</strong> <span><?php echo $parca_serfiyyati; ?></span><br>
									<strong>Kateqoriya:</strong> <span><?php echo $kateqoriya; ?></span><br>								
								</div>									
								<h4><strong>Qiymət: <?php echo $qiymet; ?> AZN</strong></h4>
								</br>
								<div class="tab-pane active product_qeyd" id="home"><strong>Qeyd: </strong><span>Xahiş olunur nəzərə alın ki, parça materialına və qiymətinə, bədən ölçüsünə və dizayndakı dəyişikliklərə görə qiymət arta və ya azala bilər. Yuxarıda göstərilən qiymət sırf bu modelə, bədən ölçüsünə və parça materialına aiddir. Parça qiymətə daxil deyil.</span></div>
								<!-- Facebook share button code -->
								<div class="fb-like" data-href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
							</div>						
						</div>
						<div class="row">
							<!-- <div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div> -->						
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Eynİ Kateqorİyadakı Qadın Geyİmlərİ</strong></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next" title="Qadin Dunyasi"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<?php
													$select = "SELECT id,basliq,qiymet,img FROM geyimler WHERE id != ".$id." AND kateqoriya = ".$kateqoriya_select." ORDER BY RAND() LIMIT 3";
													$query = mysqli_query($conn,$select);
													while($row = mysqli_fetch_assoc($query)){
														echo "<li class='span3'>
																<div class='product-box'>
																	<span class='sale_tag'></span>												
																	<p><a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'><img alt='".$row['basliq']."' src='../images/".$row['img']."/image0.jpg'></a></p>
																	<br/>
																	<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."' class='title'>".$row['basliq']."</a><br/>
																	<p class='price'>".$row['qiymet']." AZN</p>
																</div>
															</li>";
													}
												?>											
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<?php
													$select = "SELECT id,basliq,qiymet,img FROM geyimler WHERE id != ".$id." AND kateqoriya = ".$kateqoriya_select." ORDER BY RAND() LIMIT 3";
													$query = mysqli_query($conn,$select);
													while($row = mysqli_fetch_assoc($query)){
														echo "<li class='span3'>
																<div class='product-box'>
																	<span class='sale_tag'></span>												
																	<p><a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'><img alt='".$row['basliq']."' src='../images/".$row['img']."/image0.jpg'></a></p>
																	<br/>
																	<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."' class='title'>".$row['basliq']."</a><br/>
																	<p class='price'>".$row['qiymet']." AZN</p>
																</div>
															</li>";
													}
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Seçİlmİş Geyİmlər</strong></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" title='Modalar Atelyesi ve Modalar Evi' data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<?php
													$select = "SELECT id,basliq,qiymet,img FROM geyimler ORDER BY RAND() LIMIT 3";
													$query = mysqli_query($conn,$select);
													while($row = mysqli_fetch_assoc($query)){
														echo "<li class='span3'>
																<div class='product-box'>
																	<span class='sale_tag'></span>												
																	<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'><img alt='".$row['basliq']."' src='../images/".$row['img']."/image0.jpg'></a><br/>
																	<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."' class='title'>".$row['basliq']."</a><br/>
																	<p class='price'>".$row['qiymet']." AZN</p>
																</div>
															</li>";
													}
												?>											
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<?php
													$select = "SELECT id,basliq,qiymet,img FROM geyimler ORDER BY RAND() LIMIT 3";
													$query = mysqli_query($conn,$select);
													while($row = mysqli_fetch_assoc($query)){
														echo "<li class='span3'>
																<div class='product-box'>
																	<span class='sale_tag'></span>												
																	<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'><img alt='".$row['basliq']."' src='../images/".$row['img']."/image0.jpg'></a><br/>
																	<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."' class='title'>".$row['basliq']."</a><br/>
																	<p class='price' title='".$row['basliq']."'>".$row['qiymet']." AZN</p>
																</div>
															</li>";
													}
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">Kateqorİyalar</li>
								<li class="1"><a href="../products/?category=1&page=1" title='Gündəlik Paltarlar'>Gündəlik Paltarlar</a></li>
								<li class="2"><a href="../products/?category=2&page=1" title='Koftalar'>Koftalar</a></li>
								<li class="3"><a href="../products/?category=3&page=1" title='Üst Geyimləri'>Üst Geyimləri</a></li>
								<li class="4"><a href="../products/?category=4&page=1" title='Ətəklər'>Ətəklər</a></li>
								<li class="5"><a href="../products/?category=5&page=1" title='Kostyumlar'>Kostyumlar</a></li>
								<li class="6"><a href="../products/?category=6&page=1" title='Ziyafət Paltarları'>Ziyafət Paltarları</a></li>
								<li class="7"><a href="../products/?category=7&page=1" title='Gəlinliklər'>Gəlinliklər</a></li>
								<li class="8"><a href="../products/?category=8&page=1" title='Uşaq Geyimləri'>Uşaq Geyimləri</a></li>
							</ul>
							<script type="text/javascript">
								$(".<?php echo $kateqoriya_select; ?>").addClass("active");
							</script>
							<br/>
							<!-- <ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul> -->
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Təsadüfİ Seçİlən Geyİmlər</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev" title='Paltarlarin tikilisi'></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<?php
												$select = "SELECT id,basliq,qiymet,img FROM geyimler ORDER BY RAND() LIMIT 1";
												$query = mysqli_query($conn,$select);
												while($row = mysqli_fetch_assoc($query)){
													echo "<li class='span3'>
															<div class='product-box'>
																<span class='sale_tag'></span>												
																<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'><img alt='".$row['basliq']."' src='../images/".$row['img']."/image0.jpg'></a><br/>
																<a href='../product_detail?id=".$row['id']."' class='title' title='".$row['basliq']."'>".$row['basliq']."</a><br/>
																<a href='#' title='".$row['basliq']."' class='category'></a>
																<p class='price'>".$row['qiymet']." AZN</p>
															</div>
														</li>";
												}
											?>
										</ul>
									</div>
									<?php
										$select = "SELECT id,basliq,qiymet,img FROM geyimler ORDER BY RAND() LIMIT 7";
										$query = mysqli_query($conn,$select);
										while($row = mysqli_fetch_assoc($query)){
											echo "<div class='item'>
													<ul class='thumbnails listing-products'>
														<li class='span3'>
															<div class='product-box'>
																<span class='sale_tag'></span>												
																<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'><img alt='".$row['basliq']."' src='../images/".$row['img']."/image0.jpg'></a><br/>
																<a href='../product_detail?id=".$row['id']."' class='title' title='".$row['basliq']."'>".$row['basliq']."</a><br/>
																<p class='price'>".$row['qiymet']." AZN</p>
															</div>
														</li>
													</ul>
												</div>";
										}
									?>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title">Ən Yenİ Geyİmlər</h4>								
							<ul class="small-product">
								<?php
									$select = "SELECT id,basliq,qiymet,img FROM geyimler ORDER BY RAND() LIMIT 5";
									$query = mysqli_query($conn,$select);
									while($row = mysqli_fetch_assoc($query)){
										echo "<li>
												<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'>
													<img src='../images/".$row['img']."/image0.jpg' alt='".$row['basliq']."'>
												</a>
												<a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'>".$row['basliq']."</a>
											</li>";
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</section>			
			<?php
				include "../includes/footer.php";
			?>
		</div>
		<script src="../themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				$('#myCarousel-2').carousel({
                    interval: 2500
                });
			});
		</script>
    </body>
</html>