<?php include"header.php"; ?>
<?php 
ob_start();
session_start();

?>

<?php 

//Kullanıcı Giris Yap Başlangıç
if (isset($_POST['kullanicigiris'])) {

	$kullanici_mail=$_POST['kullanici_mail']; // formdan gelen kullanıcı adı
	$kullanici_password=md5($_POST['kullanici_password']);//formdan gelen sifre


	$kullanicisor=$db->prepare("select * from tbluyeler where kullanici_mail=:mail and  kullanici_password=:password");//Kullanıcının bilgilerini seç
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,//değişkene ata
		'password' => $kullanici_password//değişkene ata
		
	));


	$say=$kullanicisor->rowCount();
	//olan kullanıcıları saydır.



	if ($say==1) {// eger kullanıcı var ise

		echo $_SESSION['userkullanici_mail']=$kullanici_mail;//oturum aç

		header("Location:index.php?durum=basariligiris");// giriş başarılı 
		exit;
		




	} else {


		header("Location:login.php?durum=basarisizgiris");// değil ise aynı sayfada kal

	}


}
//Son
?>

<div class="container" style=" background: linear-gradient(to bottom right, white, red);  height: 500px;  ">
    <div class="row">
        <div class='col-sm-3'></div>
        <div class="col-sm-6">
            <div class="login-box well">
                <form action="login.php" method="POST">
                    <legend>Giriş Yap</legend>
                    <div class="form-group">
                        <label for="username-email">E-mail Giriniz</label>
                        <input type="text"id="username-email" placeholder="E-mail Giriniz" class="form-control" name="kullanici_mail" />
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre</label>
                        <input type="password"id="username-email" placeholder="Şifrenizi Giriniz" class="form-control" name="kullanici_password" />
                    </div>

                    <div class="form-group">
                        <button type="submit" name="kullanicigiris" class="btn btn-default btn-login-submit btn-block m-t-md" value="Giris" >Giriş Yap</button>


                    </div>

                    <div class="form-group">
                        <p class="text-center m-t-xs text-sm">Hesabın Yokmu?</p> 
                        <a href="kayitol.php" class="btn btn-default btn-block m-t-md">Yeni Hesap Oluştur</a>
                    </div>
                </form>
                
            </div>
        </div>
        <div class='col-sm-3'></div>
    </div>
</div>



<?php include"footer.php" ?>