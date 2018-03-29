<!DOCTYPE html>
<html lang="en">
		<?php
			if(isset($_GET['category']) && is_numeric($_GET['category']) && isset($_GET['page']) && is_numeric($_GET['page'])){
				include "../db/db.php";
				$category = $_GET['category'];
				$page = $_GET['page'];
				$cemi_mehsul_sayi = 0;
				$sehife_basi_goster = 9;

				if($category>8){
					//kateqoriya arttiqca burdaki reqemde artmalidir, bu funksiya ona goredir ki, meselen eger cemi 8 kateqoriyada mal varsa linkde 9 yazilanda 1 nomreli kateqoriyani secsin avtomatik
					echo "<script type='text/javascript'>window.location='../products/?category=1&page=1'</script>";
				}

				$select = "SELECT id FROM geyimler WHERE kateqoriya = ".$category;
				$query = mysqli_query($conn,$select);
				while($row = mysqli_fetch_assoc($query)){
					$cemi_mehsul_sayi++;
				}
				$cemi_sehife_sayi = ceil($cemi_mehsul_sayi/9);
				$hardan_al = ($page-1) * $sehife_basi_goster;
				if($page>$cemi_sehife_sayi && $cemi_sehife_sayi != 0){
					//eger linkdeki sehife sayi movcud sehife sayindan cox olarsa o zaman 1-ci sehifeye qaytarir
					echo "<script type='text/javascript'>window.location='../products/?category=".$category."&page=1'</script>";
				}
				if($category == 1){
					$kateqoriya_basligi = "Gündəlİk Paltarlar";
					$page_title = "Gündəlik Paltarlar";
				}else if($category == 2){
					$kateqoriya_basligi = "Koftalar";
					$page_title = "Koftalar";
				}else if($category == 3){
					$kateqoriya_basligi = "Üst Geyİmlərİ";
					$page_title = "Üst Geyimləri";
				}else if($category == 4){
					$kateqoriya_basligi = "Ətəklər";
					$page_title = "Ətəklər";
				}else if($category == 5){
					$kateqoriya_basligi = "Kostyumlar";
					$page_title = "Kostyumlar";
				}else if($category == 6){
					$kateqoriya_basligi = "Zİyafət Paltarları";
					$page_title = "Ziyafət Paltarları";
				}else if($category == 7){
					$kateqoriya_basligi = "Gəlİnlİklər";
					$page_title = "Gəlinliklər";
				}else if($category == 8){
					$kateqoriya_basligi = "Uşaq Geyİmlərİ";
					$page_title = "Uşaq Geyimləri";
				}
			}else{
				echo "<script type='text/javascript'>window.location='../'</script>";
			}
		?>
	<head>
		<link rel="alternate" hreflang="az" href="http://qadingeyimleri.az/products/?category=<?php echo $category; ?>&page=<?php echo $page; ?>" />
		<meta http-equiv="content-language" content="az" />
		<meta name="keywords" content="qadinlara aid her sey, qadin modasi, modalar atelyesi, qadin dunyasi, bakida geyimlerin tikilisi, bakıda geyimlərin tikilişi, qadın dünyası, qadın geyimləri, <?php echo $page_title; ?>" />
		<meta name="description" content="<?php echo $page_title; ?> - Qadın geyimlərinin tikilişi və sifarişi. Ən son moda qadın geyimlərini sifariş edə bilərsiniz." />
		<link rel="author" href="https://plus.google.com/108728687434805525511/posts"/>
		<meta name="abstract" content="Ən son moda qadın geyimlərinin Modalar Evində tikilişi." />
		<meta name="copyright" content="Bakuweb Dizayn Studiyası" />
		<meta name="robots" content="index, follow" />
	   	<meta property="og:url" content="http://qadingeyimleri.az/products/?category=<?php echo $category; ?>&page=<?php echo $page; ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="QADİNGEYİMLERİ.AZ - <?php echo $page_title; ?>" />
		<meta property="og:description" content="İstənilən dizaynda qadın geyimlərini sifariş edərək əldə edə bilərsiniz." />
		<meta property="og:image" content="http://qadingeyimleri.az/themes/images/fb_cover.jpg" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
		<meta property="fb:app_id" content="746399918870185" />
		<meta property="fb:admins" content="OrxanDWK" />
		<meta property="og:site_name" content="Qadingeyimleri" />
		<?php
			include "../includes/head.php";
		?>
		<title>Qadın Geyimləri | <?php echo $page_title;?> qadin geyimlerinin sifarisi, qadin paltarlarinin tikilisi, koftalar, paltolar, kostyumlar</title>
	</head>
    <body>
    	<h1 class="seo_h1"><?php echo $page_title;?> Qadin paltarlarinin tikilisi, qadın paltarları, qadın geyimləri en son moda</h1>
    	<h2 class="seo_h1">yubkalar koftalar qadin dunyasi pencekler qadin paltarlari geyimleri palto şuba</h2>
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
		<h3 class="seo_h1">qadingeyimleri.az qadin dunyasi, <?php echo $page_title;?>. Bakida Merkezi univermagin 5ci mertebesinde modalar evinde tikilir qadin paltarlari.</h3>
		<h5 class="seo_h1">en gozel <?php echo $page_title;?>.</h5>
			<?php
				include "../includes/navbar.php";
				//navbardaki menunu kateqoriya sehifesine uygun olaraq active edir (yalniz bu sehife ucun ehtiyyac gorulub)
				echo "<script type='text/javascript'>$('.cat".$category."').addClass('active')</script>";
			?>
			<section class="header_text sub">
			<img class="pageBanner" src="../themes/images/pageBanner.png" alt="qadin paltarlari ve qadin modasi" >
				<h2 class="my_product_header products_page_header"><span><?php echo $kateqoriya_basligi; ?></span></h2>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<?php
								if($cemi_sehife_sayi == 0){
									echo "<li class='span3'>
											Bu kateqoriyada heç bir məhsul tapılmadı.
										  </li>";
								}
								$select = "SELECT id,basliq,qiymet,img FROM geyimler WHERE kateqoriya = $category ORDER BY id DESC LIMIT $hardan_al,9";
								$query = mysqli_query($conn,$select);
								while($row = mysqli_fetch_assoc($query)){
									echo "<li class='span3'>
											<div class='product-box'>												
												<p><a href='../product_detail?id=".$row['id']."' title='".$row['basliq']."'><img alt='".$row['basliq']."' src='../images/".$row['img']."/image0.jpg'></a></p>
												<br/>
												<a href='../product_detail?id=".$row['id']."' class='title' title='".$row['basliq']."'>".$row['basliq']."</a><br/>
												<a href='../product_detail?id=".$row['id']."' class='category' title='".$row['basliq']."'></a>
												<p class='price'>".$row['qiymet']." AZN</p>
											</div>
										</li>";
								}
							?>
						</ul>								
						<hr>
						<div class="pagination pagination-big pagination-centered">
							<ul>
								<?php
									if($cemi_sehife_sayi > 5){
										$sehife = $page;
			                            $bir = 1;
			                            $iki = 2;
			                            $uc = 3;
			                            $dord = 4;
			                            $bes = 5;

			                            $prev = $sehife-1;
			                            $next = $sehife+1;
			                            if($sehife == 1){
			                                echo "<li class='active'><a href='../products/?category=".$category."&page=".$bir."'>".$bir."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$iki."'>".$iki."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$uc."'>".$uc."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$dord."'>".$dord."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$bes."'>".$bes."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$next."'> > </a></li>";
			                            }else if($sehife == 2){
			                            	echo "<li><a href='../products/?category=".$category."&page=".$prev."'> < </a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$bir."'>".$bir."</a></li>";
			                                echo "<li class='active'><a href='../products/?category=".$category."&page=".$iki."'>".$iki."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$uc."'>".$uc."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$dord."'>".$dord."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$bes."'>".$bes."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$next."'> > </a></li>";
			                            }else if($sehife >= 3 && $sehife <= $cemi_sehife_sayi-2){
			                                $bir = $sehife-2;
			                                $iki = $sehife-1;
			                                $uc = $sehife;
			                                $dord = $sehife+1;
			                                $bes = $sehife+2;
			                                echo "<li><a href='../products/?category=".$category."&page=".$prev."'> < </a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$bir."'>".$bir."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$iki."'>".$iki."</a></li>";
			                                echo "<li class='active'><a href='../products/?category=".$category."&page=".$uc."'>".$uc."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$dord."'>".$dord."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$bes."'>".$bes."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$next."'> > </a></li>";
			                            }else if($sehife == $cemi_sehife_sayi-1){
			                                $bir = $sehife-3;
			                                $iki = $sehife-2;
			                                $uc = $sehife-1;
			                                $dord = $sehife;
			                                $bes = $sehife+1;

			                                echo "<li><a href='../products/?category=".$category."&page=".$prev."'> < </a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$bir."'>".$bir."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$iki."'>".$iki."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$uc."'>".$uc."</a></li>";
			                                echo "<li class='active'><a href='../products/?category=".$category."&page=".$dord."'>".$dord."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$bes."'>".$bes."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$next."'> > </a></li>";
			                            }else if($sehife == $cemi_sehife_sayi){
			                                $bir = $sehife-4;
			                                $iki = $sehife-3;
			                                $uc = $sehife-2;
			                                $dord = $sehife-1;
			                                $bes = $sehife;

			                                echo "<li><a href='../products/?category=".$category."&page=".$prev."'> < </a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$bir."'>".$bir."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$iki."'>".$iki."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$uc."'>".$uc."</a></li>";
			                                echo "<li><a href='../products/?category=".$category."&page=".$dord."'>".$dord."</a></li>";
			                                echo "<li class='active'><a href='../products/?category=".$category."&page=".$bes."'>".$bes."</a></li>";
			                            }

			                        }else{
			                            for($a=1; $a<=$cemi_sehife_sayi; $a++){ 
			                                echo "<li id='sehife".$a."'><a href='../products/?category=".$category."&page=".$a."'>".$a."</a></li>"; 
			                            };
			                            //hansi sehifededirse o sehifenin li sini active edir
			                            echo "<script type='text/javascript'>
						                          document.getElementById('sehife'+'".$page."').setAttribute('class','active');
						                      </script>";
			                        }
								?>
								
							</ul>
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
								$(".<?php echo $category; ?>").addClass("active");
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
									<a class="left button" href="#myCarousel" data-slide="prev" title="tesadufi secilen qadin paltarlari"></a><a class="right button" href="#myCarousel" data-slide="next" title="tesadufi secilen qadin geyimleri"></a>
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
																<a href='#' class='category' title='".$row['basliq']."'></a>
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
												<a href='../product_detail?id=".$row['id']."'  title='".$row['basliq']."'>".$row['basliq']."</a>
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
    </body>
</html>