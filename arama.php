<?php include"header.php";

if (isset($_POST['arama'])) {

	$aranan=$_POST['aranan'];
	$urunsor=$db->prepare("SELECT * FROM tblurunler where urun_ad LIKE ?");
	$urunsor->execute(array("%$aranan%"));

	$say=$urunsor->rowCount();

} else {

	Header("Location:index.php?durum=bos");

}




?>

<section>
	<div class="container">
		<div class="row">
			
			<div class="col-sm-9 padding-right" >

				<div class="features_items"><!--features_items-->
					
					<h2 class="title text-center">KİTAPLAR</h2>

					<?php 

					if ($say==0) {
						echo "Bu kategoride ürün bulunamadı";
					}


					while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC))

						


						{?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<?php 
										$urun_id=$uruncek['urun_id'];
										$urunfotosor=$db->prepare("SELECT* FROM tblurun_resim where urun_id=:id LIMIT 1");
										$urunfotosor->execute(array(

											'id'=>$urun_id

										));
										$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);
										?>
										<div class="productinfo text-center">
											<img src="images/urun/<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" height="225px" width="175px" />
											<h2><?php echo $uruncek['urun_fiyat']; ?>₺</h2>
											<p><?php echo $uruncek['urun_ad']; ?></p>

										</div>
										<div class="product-overlay">
											<div class="overlay-content">


												<img src="images/urun/<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" height="125px" />
												<h2><?php echo $uruncek['urun_fiyat']; ?>₺</h2>
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