<?php include"header.php" ;
$kullanicisor=$db->prepare("SELECT * FROM tbluyeler where kullanici_id=:id");//kullanici adını çek
$kullanicisor->execute(array(
	'id' => $_GET['kullanici_id']));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['kullanicisifreguncelle'])) {

	 $kullanici_eskipassword=$_POST['kullanici_eskipassword']; 
	 $kullanici_passwordone=$_POST['kullanici_passwordone']; 
	 $kullanici_passwordtwo=$_POST['kullanici_passwordtwo'];

	$kullanici_password=md5($kullanici_eskipassword);


	$kullanicisor=$db->prepare("select * from tbluyeler where kullanici_password=:password");
	$kullanicisor->execute(array(
		'password' => $kullanici_password
		));

			//dönen satır sayısını belirtir
	$say=$kullanicisor->rowCount();



	if ($say==0) {

		header("Location:sifre-guncelle?durum=eskisifrehata");



	} else {



	//eski şifre doğruysa başla


		if ($kullanici_passwordone==$kullanici_passwordtwo) {


			if (strlen($kullanici_passwordone)>=6) {


				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$password=md5($kullanici_passwordone);

				

				$kullanicikaydet=$db->prepare("UPDATE tbluyeler SET
					kullanici_password=:kullanici_password
					WHERE kullanici_id={$_POST['kullanici_id']}");

				
				$insert=$kullanicikaydet->execute(array(
					'kullanici_password' => $password
					));

				if ($insert) {


					header("Location:sifre-guncelle.php?durum=kullanici_id=kullanici_id=$kullanici_id&durum=ok");


				//Header("Location:../production/genel-ayarlar.php?durum=ok");

				} else {


					header("Location:sifre-guncelle.php?durum=kullanici_id=kullanici_id=$kullanici_id&durum=no");
				}





		// Bitiş



			} else {


				header("Location:sifre-guncelle.php?durum=eksiksifre");


			}



		} else {

			header("Location:sifre-guncelle?durum=sifreleruyusmuyor");

			exit;


		}


	}

	exit;

	if ($update) {

		header("Location:sifre-guncelle?durum=kullanici_id=kullanici_id=$kullanici_id&durum=ok");

	} else {

		header("Location:sifre-guncelle?durum=kullanici_id=kullanici_id=$kullanici_id&durum=no");
	}

}


?>

<section>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-header"><CENTER><h1>ŞİFRE GÜNCELLE</h1></CENTER></div>
			<div class="panel-body">
				<div class="row">
					

					
					<form action="sifre-guncelle.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Şifre Güncelle</div>
				</div>

				


				<div class="form-group dob">
					<div class="col-sm-12">
						
						<input type="password" class="form-control"  required="" name="kullanici_eskipassword" placeholder="Eski Şifrenizi Giriniz">
					</div>
					
				</div>

				
				<div class="form-group dob">
					<div class="col-sm-6">
						<input type="password" class="form-control" name="kullanici_passwordone"    placeholder="Yeni Şifrenizi Giriniz">
					</div>
					<div class="col-sm-6">
						<input type="password" class="form-control" name="kullanici_passwordtwo"   placeholder="Yeni Şifrenizi Tekrar Giriniz">
					</div>
				</div>

				<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">



				<button type="submit" name="kullanicisifreguncelle" class="btn btn-default btn-red">Şifre Değiştir</button>
			</div>
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Şifrenizi mi Unuttunuz?</div>
				</div>


				<center><a href="sifre-guncelle"><img width="400" src="http://www.emrahyuksel.com.tr/dimg/sifremi-unuttum.jpg"></a></center>
			</div>
		</div>
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