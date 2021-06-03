<?php include"../baglan.php";
include"../fonksiyon.php";
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);


/*SİTE LOGO DUZENLEME ALANI*/
if (isset($_POST['logoduzenle'])) {

	

	$uploads_dir = '../images';

	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];//önbellekteki dosya
	@$name = $_FILES['ayar_logo']["name"];//dosya adı

	$benzersizsayi4=rand(20000,32000);//random sayı ata
    $refimgyol=substr($uploads_dir)."/".$benzersizsayi4.$name;// atanmış random sayıyı dosya isimi ile birleştir

	 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");//resimi yükle

	 $duzenle=$db->prepare("UPDATE tblayar SET
	 	ayar_logo=:logo
	 	WHERE ayar_id=0");
	 $update=$duzenle->execute(array(
	 	'logo' => $refimgyol
		));//veri tabanındaki ilgili alana yaz



	 if ($update) {

		$resimsilunlink=$_POST['eski_yol'];// eski resimin yolunu yakalıyorum
		unlink("../../images/$resimsilunlink");// yakaladığım eski resimi siiliyorum

		Header("Location:production/site-ayar-duzenle.php?durum=ok");

	} else {

		Header("Location:production/site-ayar-duzenle.php?durum=no");
	}

}
/*KULLANICI RESİM DUZENLEME*/

if (isset($_POST['resimduzenle'])) {

	

	$uploads_dir = '../images/User';

	@$tmp_name = $_FILES['kullanici_img']["tmp_name"];//önbellekteki dosya
	@$name = $_FILES['kullanici_img']["name"];//dosya adı

	$benzersizsayi4=rand(20000,32000);//random sayı ata
    $refimgyol=substr($uploads_dir)."/".$benzersizsayi4.$name;// atanmış random sayıyı dosya isimi ile birleştir

	 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");//resimi yükle

	 $duzenle=$db->prepare("UPDATE tbluyeler SET
	 	kullanici_img=:img

	 	");
	 $update=$duzenle->execute(array(
	 	'img' => $refimgyol
		));//veri tabanındaki ilgili alana yaz



	 if ($update) {

		$resimsilunlink=$_POST['eski_yol'];// eski resimin yolunu yakalıyorum
		unlink("../../images/$resimsilunlink");// yakaladığım eski resimi siiliyorum

		Header("Location:../hesap.php?durum&kullanici_id=$kullanici_id&durum=ok");

	} else {

		Header("Location:../hesap.php?durum&kullanici_id=$kullanici_id&durum=no");
	}

}





if(isset($_POST['urunfotosil'])) {

	$urun_id=$_POST['urun_id'];


	echo $checklist = $_POST['urunfotosec'];

	
	foreach($checklist as $list) {

		$sil=$db->prepare("DELETE from tblurun_resim where urunfoto_id=:urunfoto_id");
		$kontrol=$sil->execute(array(
			'urunfoto_id' => $list
			));
	}

	if ($kontrol) {

		Header("Location:production/urun-galeri.php?urun_id=$urun_id&durum=ok");

	} else {

		Header("Location:production/urun-galeri.php?urun_id=$urun_id&durum=no");
	}


} 









/*SLİDER İŞLEMLERİ*/

if (isset($_POST['sliderkaydet'])) {


	$uploads_dir = '../images/Slider';
	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO tblslider SET
		slider_ad=:slider_ad,
		slider_link=:slider_link,
		slider_resimyol=:slider_resimyol
		");
	$insert=$kaydet->execute(array(
		'slider_ad' => $_POST['slider_ad'],
		'slider_link' => $_POST['slider_link'],
		'slider_resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:production/slider.php?durum=ok");

	} else {

		Header("Location:production/slider.php?durum=no");
	}




}
if ($_GET['slidersil']=="ok") {

	$sil=$db->prepare("DELETE from tblslider where slider_id=:id");// tbluyeler tablosundaki forumdan gelen gelen get değerine göre silme işlemini yaptırıyoruz.
	$kontrol=$sil->execute(array(
		'id' => $_GET['slider_id']//gelen ıd veri tabanındaki ıd eşit ise silme işlemi gerçekleşir.
	));


	if ($kontrol) {


		header("Location:production/slider.php?durum=ok");// silme işlemi tamamlandığında get işlemi ?.. yaparak geri döneceği konumu belirtiyoruz.


	} else {

		header("Location:production/slider.php?durum=no");

	}

}








/*MENU DUZENLEME KODLARI----------------------------------------*/
if (isset($_POST['menuduzenle'])) {// eğer postan gelen değer boş değil ise 

	$menu_id=$_POST['menu_id']; //kullanici id ye göre gelen değerleri yakalama işlemi gerçekleştiriyoruz
	
	$menu_seourl=seo($_POST['menu_adi']);

	
	//Tablo güncelleme işlemi kodları...
	$menukaydet=$db->prepare("UPDATE tblmenu SET


		
		menu_adi=:menu_adi,
		menu_url=:menu_url,
		menu_seourl=:menu_seourl,
		menu_ust=:menu_ust,
		menu_durum=:menu_durum,
		menu_sira=:menu_sira
		
		



		WHERE menu_id={$_POST['menu_id']}");

	$update=$menukaydet->execute(array(
		
		'menu_adi'=>$_POST['menu_adi'],
		'menu_url'=>$_POST['menu_url'],
		'menu_seourl'=> $menu_seourl,
		'menu_ust'=>$_POST['menu_ust'],
		'menu_durum'=>$_POST['menu_durum'],
		'menu_sira'=>$_POST['menu_sira']
		
		
	));


	if ($update) {

		header("Location:production/menu.php?menu_id=$menu_id&durum=ok");

	} else {

		header("Location:production/menu.php?menu_id=$menu_id&durum=no");
	}
	
}
/*MENU EKLEME KODLARI----------------------------------------*/
if (isset($_POST['menuekle'])) {// eğer postan gelen değer boş değil ise 

	
	
	$menu_seourl=seo($_POST['menu_adi']);// menu adını seo fonksiyonundan geçirerek seourl ye dönüştürüyoruz

	
	//Tablo güncelleme işlemi kodları...
	$menukaydet=$db->prepare("INSERT INTO tblmenu SET


		
		menu_adi=:menu_adi,
		menu_url=:menu_url,
		menu_seourl=:menu_seourl,
		menu_ust=:menu_ust,
		menu_durum=:menu_durum
		
		



		");

	$insert=$menukaydet->execute(array(
		
		'menu_adi'=>$_POST['menu_adi'],
		'menu_url'=>$_POST['menu_url'],
		'menu_seourl'=> $menu_seourl,
		'menu_ust'=>$_POST['menu_ust'],
		'menu_durum'=>$_POST['menu_durum']
		
		
	));


	if ($insert) {

		header("Location:production/menu.php?durum=ok");

	} else {

		header("Location:production/menu.php?durum=no");
	}
	
}

/*---------------------MENU SİLME Alanı Kodları------------------*/
if ($_GET['menusil']=="ok") {

	$sil=$db->prepare("DELETE from tblmenu where menu_id=:id");// tbluyeler tablosundaki forumdan gelen gelen get değerine göre silme işlemini yaptırıyoruz.
	$kontrol=$sil->execute(array(
		'id' => $_GET['menu_id']//gelen ıd veri tabanındaki ıd eşit ise silme işlemi gerçekleşir.
	));


	if ($kontrol) {


		header("Location:production/menu.php?durum=ok");// silme işlemi tamamlandığında get işlemi ?.. yaparak geri döneceği konumu belirtiyoruz.


	} else {

		header("Location:production/menu.php?durum=no");

	}

}



/*---------------------Urun SİLME Alanı Kodları------------------*/
if ($_GET['urunsil']=="ok") {

	$sil=$db->prepare("DELETE from tblurunler where urun_id=:id");// tbluyeler tablosundaki forumdan gelen gelen get değerine göre silme işlemini yaptırıyoruz.
	$kontrol=$sil->execute(array(
		'id' => $_GET['urun_id']//gelen ıd veri tabanındaki ıd eşit ise silme işlemi gerçekleşir.
	));


	if ($kontrol) {


		header("Location:production/urunler.php?durum=ok");// silme işlemi tamamlandığında get işlemi ?.. yaparak geri döneceği konumu belirtiyoruz.


	} else {

		header("Location:production/urunler.php?durum=no");

	}

}

/*---------------------Urun Duzenleme Alanı Kodları------------------*/


if (isset($_POST['urunduzenle'])) {// eğer postan gelen değer boş değil ise 

	$urun_id=$_POST['urun_id']; //kullanici id ye göre gelen değerleri yakalama işlemi gerçekleştiriyoruz
	$urun_seourl=seo($_POST['urun_ad']);

	
	//Tablo güncelleme işlemi kodları...
	$urunkaydet=$db->prepare("UPDATE tblurunler SET
		
		kategori_id=:kategori_id,
		urun_ad=:urun_ad,
		urun_detay=:urun_detay,
		urun_fiyat=:urun_fiyat,
		
		urun_stok=:urun_stok,
		urun_seourl=:urun_seourl
		WHERE urun_id={$_POST['urun_id']}");

	$update=$urunkaydet->execute(array(
		
		'kategori_id'=>$_POST['kategori_id'],
		'urun_ad'=>$_POST['urun_ad'],
		'urun_detay'=>$_POST['urun_detay'],
		'urun_fiyat'=>$_POST['urun_fiyat'],
		
		'urun_stok'=>$_POST['urun_stok'],
		'urun_seourl'=>$urun_seourl
		
	));


	if ($update) {

		header("Location:production/urunler.php?urun_id=$urun_id&durum=ok");

	} else {

		header("Location:production/urunler.php?urun_id=$urun_id&durum=no");
	}
	
}

if ($_GET['urun_onecikar']=="ok") {

	

	
	$duzenle=$db->prepare("UPDATE tblurunler SET
		
		urun_onecikar=:urun_onecikar
		
		WHERE urun_id={$_GET['urun_id']}");
	
	$update=$duzenle->execute(array(


		'urun_onecikar' => $_GET['urun_one']
		
		));



	if ($update) {

		

		Header("Location:production/urunler.php?durum=ok");

	} else {

		Header("Location:production/urunler.php?durum=no");
	}

}
/*---------------------Kategori Ekleme Alanı Kodları------------------*/

if (isset($_POST['urunekle'])) {// eğer postan gelen değer boş değil ise 

	$urun_seourl=seo($_POST['urun_ad']);


	
	//Tablo güncelleme işlemi kodları...
	$urunekle=$db->prepare("INSERT INTO tblurunler SET /* KATEGORİ EKLEME*/
		kategori_id=:kategori_id,
		urun_ad=:urun_ad,
		urun_detay=:urun_detay,
		urun_fiyat=:urun_fiyat,
		urun_stok=:urun_stok,
		urun_seourl=:urun_seourl
		");

	$ekle=$urunekle->execute(array(
		'kategori_id'=>$_POST['kategori_id'],
		'urun_ad'=>$_POST['urun_ad'],
		'urun_detay'=>$_POST['urun_detay'],
		'urun_fiyat'=>$_POST['urun_fiyat'],
		'urun_stok'=>$_POST['urun_stok'],
		'urun_seourl'=>$urun_seourl
	));


	if ($ekle) {

		header("Location:production/urunler.php?durum=ok");

	} else {

		header("Location:production/urunler.php?durum=no");
	}
	
}



/*---------------------Kullanıcı SİLME Alanı Kodları------------------*/
if ($_GET['kullanicisil']=="ok") {

	$sil=$db->prepare("DELETE from tbluyeler where kullanici_id=:id");// tbluyeler tablosundaki forumdan gelen gelen get değerine göre silme işlemini yaptırıyoruz.
	$kontrol=$sil->execute(array(
		'id' => $_GET['kullanici_id']//gelen ıd veri tabanındaki ıd eşit ise silme işlemi gerçekleşir.
	));


	if ($kontrol) {


		header("Location:production/kullanici.php?sil=ok");// silme işlemi tamamlandığında get işlemi ?.. yaparak geri döneceği konumu belirtiyoruz.


	} else {

		header("Location:production/kullanici.php?sil=no");

	}

}

/*---------------------Kullanıcı Duzenleme Alanı Kodları------------------*/

if (isset($_POST['kullaniciduzenle'])) {// eğer postan gelen değer boş değil ise 

	$kullanici_id=$_POST['kullanici_id']; //kullanici id ye göre gelen değerleri

	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE tbluyeler SET
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_adres=:kullanici_adres,
		kullanici_mail=:kullanici_mail,
		kullanici_tel=:kullanici_tel,
		kullanici_adi=:kullanici_adi,
		kullanici_sifre=:kullanici_sifre,
		kullanici_kayit_tarihi=:kullanici_kayit_tarihi,
		kullanici_durum=:kullanici_durum
		
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_adres' => $_POST['kullanici_adres'],
		'kullanici_mail' => $_POST['kullanici_mail'],
		'kullanici_tel' => $_POST['kullanici_tel'],
		'kullanici_adi' => $_POST['kullanici_adi'],
		'kullanici_sifre' => $_POST['kullanici_sifre'],
		'kullanici_kayit_tarihi' => $_POST['kullanici_kayit_tarihi'],
		'kullanici_durum' => $_POST['kullanici_durum']
	));


	if ($update) {

		header("Location:production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");

	} else {

		header("Location:production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");
	}
	
}

if (isset($_POST['hesapduzenle'])) {// eğer postan gelen değer boş değil ise 

	$kullanici_id=$_POST['kullanici_id']; //kullanici id ye göre gelen değerleri

	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE tbluyeler SET
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_mail=:kullanici_mail,
		kullanici_adres=:kullanici_adres
		
		
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_mail' => $_POST['kullanici_mail'],
		'kullanici_adres' => $_POST['kullanici_adres']
		
		
	));


	if ($update) {

		header("Location:../hesap.php?durum&kullanici_id=$kullanici_id&durum=ok");

	} else {

		header("Location:../hesap.php?durum&kullanici_id=$kullanici_id&durum=no");
	}
	
}

/*---------------------Kategori SİLME Alanı Kodları------------------*/
if ($_GET['kategorisil']=="ok") {

	$sil=$db->prepare("DELETE from tblkategori where kategori_id=:id");// tbluyeler tablosundaki forumdan gelen gelen get değerine göre silme işlemini yaptırıyoruz.
	$kontrol=$sil->execute(array(

		'id' => $_GET['kategori_id']//gelen ıd veri tabanındaki ıd eşit ise silme işlemi gerçekleşir.

	));


	if ($kontrol) {


		header("Location:production/kategori.php?sil=ok");// silme işlemi tamamlandığında get işlemi ?.. yaparak geri döneceği konumu belirtiyoruz.


	} else {

		header("Location:production/kategori.php?sil=no");

	}

}

/*---------------------Kategori Duzenleme Alanı Kodları------------------*/

if (isset($_POST['kategoriduzenle'])) {

	$kategori_id=$_POST['kategori_id'];
	$kategori_seourl=seo($_POST['kategori_adi']);

	
	$kaydet=$db->prepare("UPDATE tblkategori SET
		kategori_adi=:adi,
		kategori_durum=:kategori_durum,	
		kategori_seourl=:seourl,
		kategori_sira=:sira
		

		WHERE kategori_id={$_POST['kategori_id']}");
	$update=$kaydet->execute(array(
		'adi' => $_POST['kategori_adi'],
		'kategori_durum' => $_POST['kategori_durum'],
		'seourl' => $kategori_seourl,
		'sira' => $_POST['kategori_sira']

		

	));



	if ($update) {

		header("Location:production/kategori.php?kategori_id=$kategori_id&durum=ok");

	} else {

		header("Location:production/kategori-duzenle.php?kategori_id=$kategori_id&durum=no");
	}
	
}
/*---------------------Kategori Ekleme Alanı Kodları------------------*/

if (isset($_POST['kategoriekle'])) {// eğer postan gelen değer boş değil ise 

	$kategori_seourl=seo($_POST['kategori_adi']);
	
	//Tablo güncelleme işlemi kodları...
	$kaydet=$db->prepare("INSERT INTO tblkategori SET
		kategori_adi=:adi,
		kategori_durum=:kategori_durum,	
		kategori_seourl=:seourl,
		kategori_ust=:ust
		");
	$insert=$kaydet->execute(array(
		'adi' => $_POST['kategori_adi'],
		'kategori_durum' => $_POST['kategori_durum'],
		'seourl' => $kategori_seourl,
		'ust'=>$_POST['kategori_ust']		
	));


	if ($ekle) {

		header("Location:production/kategori.php?durum=ok");

	} else {

		header("Location:production/kategori.php?durum=no");
	}
	
}


//SEPET İŞLEMLERİ
if (isset($_POST['sepeteekle'])) {


	$ayarekle=$db->prepare("INSERT INTO tblsepet SET
		urun_adet=:urun_adet,
		kullanici_id=:kullanici_id,
		urun_id=:urun_id	
		
		");

	$insert=$ayarekle->execute(array(
		'urun_adet' => $_POST['urun_adet'],
		'kullanici_id' => $_POST['kullanici_id'],
		'urun_id' => $_POST['urun_id']
		
	));


	if ($insert) {
		$url = htmlspecialchars($_SERVER['HTTP_REFERER']);

		Header("Location: ".$url."?ekle=ok");

	} else {

		Header("Location:../urunler.php?durum=no");
	}

}


if ($_GET['sepetsil']=="ok") {

	              $sil=$db->prepare("DELETE from tblsepet where sepet_id=:id");// tbluyeler tablosundaki forumdan gelen gelen get değerine göre silme işlemini  yaptırıyoruz.
	              $kontrol=$sil->execute(array(
	              	'id' => $_GET['sepet_id']//gelen ıd veri tabanındaki ıd eşit ise silme işlemi gerçekleşir.
	              ));


	              if ($kontrol) {


	          	   header("Location:../sepet.php?durum=ok");// silme işlemi tamamlandığında get işlemi ?.. yaparak geri döneceği konumu belirtiyoruz.


	          	} else {

	          		header("Location:../sepet.php?durum=no");

	          	}

	          }






//SEPET İŞLEMLERİ

	          /*---------------------SİTE AYAR Duzenleme Alanı Kodları------------------*/

if (isset($_POST['ayarduzenle'])) {// eğer postan gelen değer boş değil ise 

	$ayar_id=$_POST['ayar_id']; //ayar id ye göre gelen değerleri

	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE tblayar SET

		ayar_title=:ayar_title,
		ayar_url=:ayar_url,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author,
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai,
		ayar_maps=:ayar_maps,
		ayar_bakim=:ayar_bakim
		
		WHERE ayar_id={$_POST['ayar_id']}");

	$update=$ayarkaydet->execute(array(

		'ayar_title' => $_POST['ayar_title'],
		'ayar_url' => $_POST['ayar_url'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author'],
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_bakim' => $_POST['ayar_bakim']
	));
	if ($update) {

		header("Location:production/site-ayar-duzenle.php?ayar_id=$ayar_id&durum=ok");

	} else {

		header("Location:production/site-ayar-duzenle.php?ayar_id=$ayar_id&durum=no");
	}
	
}

//HAKKIMIZDA DUZENLEME İŞLMELERİ 

if (isset($_POST['hakkimizdaduzenle'])) {// eğer postan gelen değer boş değil ise 

	$hakkimizda_id=$_POST['hakkimizda_id']; //kullanici id ye göre gelen değerleri yakalama işlemi gerçekleştiriyoruz

	
	//Tablo güncelleme işlemi kodları...
	$hakkimizdakaydet=$db->prepare("UPDATE hakkimizda SET
		
		
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_video=:hakkimizda_video,
		hakkimizda_vizyon=:hakkimizda_vizyon
		WHERE hakkimizda_id=0");

	$update=$hakkimizdakaydet->execute(array(
		
		
		'hakkimizda_baslik'=>$_POST['hakkimizda_baslik'],
		'hakkimizda_icerik'=>$_POST['hakkimizda_icerik'],
		'hakkimizda_video'=>$_POST['hakkimizda_video'],
		'hakkimizda_vizyon'=>$_POST['hakkimizda_vizyon']
		
	));


	if ($update) {

		header("Location:production/hakkimizda-ayar.php?hakkimizda_id=$hakkimizda_id&durum=ok");

	} else {

		header("Location:production/hakkimizda-ayar.php?hakkimizda_id=$hakkimizda_id&durum=no");
	}
	
}

/*KULLANICI KAYIT İŞLEMLERİ*/
if (isset($_POST['kullanicikaydet'])) {

	
	echo $kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']); echo "<br>";
	echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); echo "<br>";
	echo $kullanici_adres=htmlspecialchars($_POST['kullanici_adres']); echo "<br>";

	echo $kullanici_passwordone=trim($_POST['kullanici_passwordone']); echo "<br>";
	echo $kullanici_passwordtwo=trim($_POST['kullanici_passwordtwo']); echo "<br>";



	if ($kullanici_passwordone==$kullanici_passwordtwo) {


		if (strlen($kullanici_passwordone)>=6) {


			

			


// Başlangıç

			$kullanicisor=$db->prepare("select * from tbluyeler where kullanici_mail=:mail");
			$kullanicisor->execute(array(
				'mail' => $kullanici_mail
			));

			//dönen satır sayısını belirtir
			$say=$kullanicisor->rowCount();



			if ($say==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$password=md5($kullanici_passwordone);

				$kullanici_yetki=0;

			//Kullanıcı kayıt işlemi yapılıyor...
				$kullanicikaydet=$db->prepare("INSERT INTO tbluyeler SET
					kullanici_adsoyad=:kullanici_adsoyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password,
					kullanici_adres=:kullanici_adres,
					kullanici_yetki=:kullanici_yetki
					");
				$insert=$kullanicikaydet->execute(array(
					'kullanici_adsoyad' => $kullanici_adsoyad,
					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password,
					'kullanici_yetki' => $kullanici_yetki,
					'kullanici_adres'=>$kullanici_adres
				));

				if ($insert) {


					header("Location:../login.php?durum=loginbasarili");
					exit;


				//Header("Location:../production/genel-ayarlar.php?durum=ok");

				} else {


					header("Location:../kayitol.php?durum=basarisiz");
					exit;
				}

			} else {

				header("Location:../kayitol.php?durum=mukerrerkayit");
				exit;



			}




		// Bitiş



		} else {


			header("Location:../kayitol.php?durum=eksiksifre");
			exit;


		}



	} else {



		header("Location:../kayitol.php?durum=farklisifre");
		exit;
	}
	


}

/*yorum EKLEME KODLARI----------------------------------------*/

if (isset($_POST['yorumkaydet'])) {


	$gelen_url=$_POST['gelen_url'];

	$ayarekle=$db->prepare("INSERT INTO tblyorum SET
		yorum_detay=:yorum_detay,
		kullanici_id=:kullanici_id,
		urun_id=:urun_id	
		
		");

	$insert=$ayarekle->execute(array(
		'yorum_detay' => $_POST['yorum_detay'],
		'kullanici_id' => $_POST['kullanici_id'],
		'urun_id' => $_POST['urun_id']
		
	));


	if ($insert) {

		Header("Location:$gelen_url?durum=ok");
		exit;

	} else {

		Header("Location:$gelen_url?durum=no");
		exit;
	}

}
/*yorum duzenleme*/
if ($_GET['yorum_onay']=="ok") {

	
	$duzenle=$db->prepare("UPDATE tblyorum SET
		
		yorum_onay=:yorum_onay
		
		WHERE yorum_id={$_GET['yorum_id']}");
	
	$update=$duzenle->execute(array(

		'yorum_onay' => $_GET['yorum_one']
	));



	if ($update) {

		

		Header("Location:production/yorum.php?durum=ok");
		exit;

	} else {

		Header("Location:production/yorum.php?durum=no");
		exit;
	}

}




if ($_GET['yorumsil']=="ok") {
	
	$sil=$db->prepare("DELETE from tblyorum where yorum_id=:yorum_id");
	$kontrol=$sil->execute(array(
		'yorum_id' => $_GET['yorum_id']
	));

	if ($kontrol) {

		
		Header("Location:production/yorum.php?durum=ok");
		exit;

	} else {

		Header("Location:production/yorum.php?durum=no");
		exit;
	}

}

/*BANKA DUZENLEME KODLARI*/

if (isset($_POST['bankaduzenle'])) {

	$banka_id=$_POST['banka_id'];

	$kaydet=$db->prepare("UPDATE TBLbanka SET

		banka_ad=:ad,
		banka_durum=:banka_durum,	
		banka_hesap_adsoyad=:banka_hesap_adsoyad,
		banka_iban=:banka_iban
		WHERE banka_id={$_POST['banka_id']}");
	$update=$kaydet->execute(array(
		'ad' => $_POST['banka_ad'],
		'banka_durum' => $_POST['banka_durum'],
		'banka_hesap_adsoyad' => $_POST['banka_hesap_adsoyad'],
		'banka_iban' => $_POST['banka_iban']		
	));



	if ($update) {

		header("Location:production/banka.php?banka_id=$banka_id&durum=ok");
		exit;

	} else {

		header("Location:production/banka.php?banka_id=$banka_id&durum=no");
		exit;
	}
	
}

/* BANKA EKLEME ALANI KODLARI*/

if (isset($_POST['bankaekle'])) {

	
	

	
	$kaydet=$db->prepare("INSERT INTO tblbanka SET
		banka_ad=:banka_ad,
		banka_iban=:banka_iban,	
		banka_hesap_adsoyad=:banka_hesap_adsoyad
		
		");
	$update=$kaydet->execute(array(
		'banka_ad' => $_POST['banka_ad'],
		'banka_iban' => $_POST['banka_iban'],
		'banka_hesap_adsoyad' => $_POST['banka_hesap_adsoyad']
		

		

	));



	if ($update) {

		header("Location:production/banka.php?banka_id=$banka_id&durum=ok");
		exit;

	} else {

		header("Location:production/banka-duzenle.php?banka_id=$banka_id&durum=no");
		exit;
	}
	
}

/*BANKA SİL*/
if ($_GET['bankasil']=="ok") {

	$sil=$db->prepare("DELETE from tblbanka where banka_id=:id");// tbluyeler tablosundaki forumdan gelen gelen get değerine göre silme işlemini yaptırıyoruz.
	$kontrol=$sil->execute(array(
		'id' => $_GET['banka_id']//gelen ıd veri tabanındaki ıd eşit ise silme işlemi gerçekleşir.
	));


	if ($kontrol) {


		header("Location:production/banka.php?durum=ok");// silme işlemi tamamlandığında get işlemi ?.. yaparak geri döneceği konumu belirtiyoruz.
		exit;


	} else {

		header("Location:production/banka.php?durum=no");
		exit;

	}

}


//Sipariş İşlemleri
if (isset($_POST['siparisduzenle'])) {// eğer postan gelen değer boş değil ise 

	$siparis_id=$_POST['siparis_id']; //kullanici id ye göre gelen değerleri

	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE tblsiparis SET
		siparis_durum=:siparis_durum
		
		
		
		
		WHERE siparis_id={$_POST['siparis_id']}");

	$update=$ayarkaydet->execute(array(
		'siparis_durum' => $_POST['siparis_durum']
		
		
		
	));


	if ($update) {

		header("Location:production/siparis.php?durum&siparis_id=$siparis_id&durum=ok");

	} else {

		header("Location:production/siparis-duzenle.php?durum&siparis_id=$siparis_id&durum=no");
	}
	
}


if ($_GET['siparis_odeme']=="ok") {

	
	$duzenle=$db->prepare("UPDATE tblsiparis SET
		
		siparis_odeme=:siparis_odeme
		
		WHERE yorum_id={$_GET['yorum_id']}");
	
	$update=$duzenle->execute(array(

		'yorum_onay' => $_GET['yorum_one']
	));



	if ($update) {

		

		Header("Location:production/yorum.php?durum=ok");
		exit;

	} else {

		Header("Location:production/yorum.php?durum=no");
		exit;
	}

}

if (isset($_POST['bankasiparisekle'])) {


	$siparis_tip="Banka Havalesi";


	$kaydet=$db->prepare("INSERT INTO tblsiparis SET
		kullanici_id=:kullanici_id,
		siparis_tip=:siparis_tip,	
		siparis_banka=:siparis_banka,
		siparis_toplam=:siparis_toplam
		");
	$insert=$kaydet->execute(array(
		'kullanici_id' => $_POST['kullanici_id'],
		'siparis_tip' => $siparis_tip,
		'siparis_banka' => $_POST['siparis_banka'],
		'siparis_toplam' => $_POST['siparis_toplam']		
		));

	if ($insert) {

		//Sipariş başarılı kaydedilirse...

		echo $siparis_id = $db->lastInsertId();

		echo "<hr>";


		$kullanici_id=$_POST['kullanici_id'];
		$sepetsor=$db->prepare("SELECT * FROM tblsepet where kullanici_id=:id");
		$sepetsor->execute(array(
			'id' => $kullanici_id
			));

		while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

			$urun_id=$sepetcek['urun_id']; 
			$urun_adet=$sepetcek['urun_adet'];

			$urunsor=$db->prepare("SELECT * FROM tblurunler where urun_id=:id");
			$urunsor->execute(array(
				'id' => $urun_id
				));

			$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
			
			 $urun_fiyat=$uruncek['urun_fiyat'];


			
			$kaydet=$db->prepare("INSERT INTO tblsiparis_detay SET
				
				siparis_id=:siparis_id,
				urun_id=:urun_id,	
				urun_fiyat=:urun_fiyat,
				urun_adet=:urun_adet
				

				");
			$insert=$kaydet->execute(array(
				'siparis_id' => $siparis_id,
				'urun_id' => $urun_id,
				'urun_fiyat' => $urun_fiyat,
				'urun_adet' => $urun_adet


				));


		}

		if ($insert) {

			

			//Sipariş detay kayıtta başarıysa sepeti boşalt

			$sil=$db->prepare("DELETE from tblsepet where kullanici_id=:kullanici_id");
			$kontrol=$sil->execute(array(
				'kullanici_id' => $kullanici_id
				));

			
			Header("Location:../siparislerim?durum=ok");
			exit;


		}

		




	} else {

		echo "başarısız";

		//Header("Location:../production/siparis.php?durum=no");
	}




}





?>