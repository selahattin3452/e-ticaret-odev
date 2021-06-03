<?php include"header.php" ;
$kullanicisor=$db->prepare("SELECT * FROM tbluyeler where kullanici_id=:id");//kullanici adını çek
$kullanicisor->execute(array(
	'id' => $_GET['kullanici_id']));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>

<section>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-header"><CENTER><h1>HESABIM</h1></CENTER></div>
			<div class="panel-body">
				<div class="row">
					<form action="yonetim-panel/islemler.php" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim<br><span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">

								<?php 
								if (strlen($kullanicicek['kullanici_img'])>0) {?>

									<img width="200" height="200" src="images/User/<?php echo $kullanicicek['kullanici_img']; ?>">

								<?php } else {?>


									<img width="200" height="200" src="images/noimage.jpg">


								<?php } ?>


							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" id="first-name"  name="kullanici_img"  class="form-control col-md-7 col-xs-12">
								<button type="submit" name="resimduzenle" class="btn btn-primary">Resim Güncelle</button>
							</div>
						</div>
						<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>">

					</form>
					

					
					<form action="yonetim-panel/islemler.php" method="POST"  data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="first-name"  name="kullanici_adsoyad"  class="form-control col-md-7 col-xs-12" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E MAİL<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="mail" id="first-name"  name="kullanici_mail"  class="form-control col-md-7 col-xs-12" value="<?php echo $kullanicicek['kullanici_mail'] ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">AdresL<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea  id="first-name"  name="kullanici_adres"  class="form-control col-md-7 col-xs-12"><?php echo $kullanicicek['kullanici_adres'] ?></textarea>
							</div>
						</div>

						

						

						
						<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>">

						<div align="left" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" name="hesapduzenle" class="btn btn-primary">Güncelle</button>
							<a href="sifre-guncelle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']?>" type="submit" name="hesapduzenle" class="btn btn-primary">Şifre Güncelle</a>
						</div>

					</form>
					



				</div>
				




			</div>

			<div class="container-fluid bg-1 text-center">






			</div>



		</div>
	</div>
</div>
</section>

<?php include"footer.php" ?>