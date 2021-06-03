<?php include"../baglan.php"; 
error_reporting(0);
?>
<?php 
ob_start();
session_start();//Oturum Yönetmek için oturum nesnelerini çağırıp ççalıştırıyoruz.

if (isset($_POST['admingiris'])) { /*admin formu dolu geldiyse*/
	
	$kullanici_adi=$_POST['kullanici_adi'];
	$kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("select * from tbluyeler where kullanici_adi=:kadi and  kullanici_password=:kullanici_password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'kadi' => $kullanici_adi,
		'yetki'=> 1 ,
		'kullanici_password' => $kullanici_password,
		
	));
	/*Kullanici adı ,şifresi ve yetkisi admin ise*/

	$say=$kullanicisor->rowCount();
	/*Satırları saydır kaçtane satır döndü aranan satır döndüyse  say =1 ise giriş yap*/

	if ($say==1) {/*istenen değerler Uyuyor ise Giriş Yaptır ve yönlendir.*/
		
		
		echo $_SESSION['adminkullanici_adi']=$kullanici_adi;
		
		header("Location:production/index.php?durum=basariligiris");
		exit;
	}
	else{
		
		header("Location:adminlogin.php?durum=basarisizgiris");
	}



}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Yönetim Paneli LOGİN</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<form action="adminlogin.php" method="POST">
		<div id="site">
			<div id="sitebosluk"></div>
			<div id="ortainput">
				<div id="kullaniciadi"><label>Kullanıcı Adı</label>
					<div id="kullaniciadiinput"><input name="kullanici_adi" size="20px" type="text" /></div>
				</div>

				<div id="sifre">
					<label>Şifre</label>
					<div id="sifreinput"><input type="password" name="kullanici_password" size="20px" /></div>
				</div>
				


				<div id="alt"><?php  
				if ($_GET['durum']=="basarisizgiris") {?>
					<div id="hata"><img src="img/hata.png" alt="" /> <a>Hata :</a> lütfen kullanıcı adı ve şifrenizi kontol edin</div>
					<?php }

					else{?>

						<div id="hata"></div>

						<?php } 
						?>



						<div id="girisyap"><input type="submit" name="admingiris" /></div>
					</div>


				</div>
			</div>
		</form>
	</body>
	</html>
