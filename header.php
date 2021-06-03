<?php include"baglan.php" ;
include"fonksiyon.php";
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
ob_start();
session_start();//Oturum Yönetimi İçin gereklidir.

$kullanicisor=$db->prepare("SELECT * FROM tbluyeler where kullanici_mail=:mail");//kullanici adını çek
$kullanicisor->execute(array(
  'mail' => $_SESSION['userkullanici_mail']// Oturum açan üyenin Adi ile işleştir
));
$say=$kullanicisor->rowCount();//satırları saydır

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC); //indis değerlerinden kurtul 

$ayaradi=$db->prepare("SELECT * FROM tblayar where ayar_id=:id");// prepare ile sorguyu hazırlıyoruz
$ayaradi->execute(array(
  'id' => 0));// gelen get değerini diziye alarak çekiyoruz.

$ayaryaz=$ayaradi->fetch(PDO::FETCH_ASSOC);// fetch methodu ile ekrana yazdırıyoruz fetch_assoc ile diziyi döndürüyoruz.





?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $ayaryaz['ayar_title']; ?></title>
	<link rel="shortcut icon" href="images/depositphotos_52283153-stock-illustration-hand-book-logo.jpg" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/price-range.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/dikey.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->       
<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	

	<header id="header" ><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<?php // Eger gelen kullanici adı dolu değil ise 
							if (!isset($_SESSION['userkullanici_mail'])){?>
								<ul class="nav nav-pills" style="margin-top: 5px;">
									<a href="login" class="btn btn-default btn-xs " role="button"><i class="fa fa-lock"></i>Giriş Yap</a>
									<a href="kayitol" class="btn btn-default btn-xs" role="button"><i class="fa fa-user"></i>Kayıt Ol</a>
								</ul>
							<?php /*dolu ise*/ } else { ?>

								<ul class="nav nav-pills" style="margin-top: 2px;">
									<li><a href="#" style="font-weight:600"></i></a></li>
									<a href="hesap.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']?>" class="btn btn-default btn-sm " role="button">Hoşgeldiniz ' <?php echo $kullanicicek["kullanici_adsoyad"]; ?></a>
									
								</ul>
							<?php }



							?>

						</div>
					</div>

					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container" style="background-color: white">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo pull-left">
							<a href="index"><img width="100" height="75" src="images/<?php echo $ayaryaz['ayar_logo']; ?>" style="margin-top: 2px; margin-left: 10px;"></a>
						</div>

					</div>
					<div class="col-sm-6">
						<div id="custom-search-input ">
							<form action="arama" method="POST">
							<div class="input-group col-sm-12" style="margin-top: 17px">
								<input type="text" name="arama" class="  search-query form-control" placeholder="Kitap Ara" />
								<span class="input-group-btn">
									<a href="arama"><button class="btn btn-danger" type="button">
										<span class=" glyphicon glyphicon-search"></span>
									</button></a>
								</span>
							</div>
						</div>
					</form>
						
					</div>
					<div class="col-sm-4">
						<div class="shop-menu pull-right">
						<?php // Eger gelen kullanici adı dolu değil ise 
						if (!isset($_SESSION['userkullanici_mail'])){?>
							<ul class="nav navbar-nav" style="margin-top: 15px;">

								<h5>Harran Üniversite Bilgisayar Mühendisliği</h5>

							</ul>
							
							
							
						<?php /*dolu ise*/ } else { ?>

							
						<?php }



						?>


						<?php /* Kullanıcı giriş yapmış ise yetkili alanları göster*/
						if (isset($_SESSION['userkullanici_mail'])) {?>

							<ul class="nav navbar-nav" style="margin-top: 15px;">

								<li><a href="hesap.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']?>"><i class="fa fa-user"></i> Hesabım</a></li>
								<li><a href="siparislerim"><i class="fa fa-shopping-cart"></i> Siparişlerim</a></li>
								<li><a href="logout"><i class="fa fa-shopping-cart"></i> Çıkış Yap</a></li>

							</ul>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							
							<ul class="nav navbar-nav">
								<li><a href="index">Anasayfa</a></li>

							<?php 
								$menusor=$db->prepare("SELECT * FROM tblmenu where menu_durum=:durum order by menu_sira ASC limit 5 ");// uyeler tablosundaki verileri çekmek için sorgumuzu elde ettik
								$menusor->execute(array(
									'durum' => 1
								));// sorgumuzu execute yaparak çalıştırdık
								
								while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){
									?>
									
									<li><a href="<?php echo $menucek['menu_url'] ?>"><?php echo $menucek['menu_adi'] ?></a></li>
									
								<?php } ?>
								
								
								
							</ul>
							
							<a class="btn btn-info navbar-btn pull-right" href="sepet">
								<i class="fa fa-shopping-cart"></i> Sepetim
								<?php 
								$kullanici_id=$kullanicicek['kullanici_id'];
								$sepetsor=$db->prepare("SELECT * FROM tblsepet where kullanici_id=:id");
								$sepetsor->execute(array(
									'id' => $kullanici_id
								));
								$say=$sepetsor->rowCount();












								?>
								<span class="badge badge-light"><?php echo ("$say") ?></span>

							</a>
						</div>
					</nav>
					
					
					
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->

