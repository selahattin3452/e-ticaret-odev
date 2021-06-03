<?php include"header.php";

if (isset($_GET['sef'])) {


	$kategorisor=$db->prepare("SELECT * FROM tblkategori where kategori_seourl=:seourl");
	$kategorisor->execute(array(
		'seourl' => $_GET['sef']
	));

	$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

	$kategori_id=$kategoricek['kategori_id'];


	$urunsor=$db->prepare("SELECT * FROM tblurunler where kategori_id=:kategori_id order by urun_id DESC");
	$urunsor->execute(array(
		'kategori_id' => $kategori_id
	));

	$say=$urunsor->rowCount();

} else {

	$urunsor=$db->prepare("SELECT * FROM tblurunler order by urun_id DESC");
	$urunsor->execute();

}

?>

<section>
	<div class="container">
		<div class="row">
			
			<div class="col-sm-9 padding-right" >

				<div class="features_items"><!--features_items-->
					
					<h2 class="title text-center">TÜM KİTAPLAR</h2>

					<?php 


					while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC))

						


						{?>

							<?php 
							$urun_id=$uruncek['urun_id'];
							$urunfotosor=$db->prepare("SELECT* FROM tblurun_resim where urun_id=:id LIMIT 1");
							$urunfotosor->execute(array(

								'id'=>$urun_id

							));
							$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);



							?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/urun/<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" height="225px" width="175px" />
											<h1 class="title"><?php echo $uruncek['urun_fiyat']; ?>₺</h1>
											<p><?php echo $uruncek['urun_ad']; ?></p>

										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												

												<img src="images/urun/<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" height="125px" />
												<h4 style="color:white"><?php echo $uruncek['urun_fiyat']; ?>₺</h4>
												<p><?php echo $uruncek['urun_ad']; ?></p>

												<form action="yonetim-panel/islemler.php" method="POST">
													<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

													<input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">



												</form>




												<form action="yonetim-panel/islemler.php" method="POST">
													<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

													<input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">

													<div class="row">

														<input type="hidden" class="form-control input-sm" value="1" name="urun_adet">
													</div>
													<?php if (!isset($_SESSION['userkullanici_mail'])) {?>


														Sepete Ürün Eklemek İçin Lütfen <a href="login">GİRİŞ YAPIN</a> 


													<?php } else{?>

														<input type="submit" class="btn btn-default add-to-cart" name="sepeteekle" value="SEPETE EKLE">

													<?php }



													?>


												</form>






											</div>
										</div>
										<img src="images/home/sale.png" class="new" alt="" />
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="urun-<?=seo($uruncek["urun_ad"]) ?>"><i class="fa fa-plus-square"></i>Detay İçin Tıklayınız</a></li>

										</ul>
									</div>
								</div>
							</div>



						<?php }?>








					</div><!--features_items-->





				</div>
				<?php include"sidebar.php"; ?> 
			</div>
		</div>
	</section>

	<?php include"footer.php" ?>