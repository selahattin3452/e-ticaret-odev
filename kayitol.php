<?php include"header.php"; ?>
 <?php 

        if ($_GET['durum']=="farklisifre") {?>

            <script type="text/javascript">

                alert("Farklı Şifre Girdiniz");

            </script>

            <?php } elseif ($_GET['durum']=="eksiksifre") {?>
                <script type="text/javascript">

                    alert("Eksik Şifre Girdiniz");

                </script>

                <?php } elseif ($_GET['durum']=="mukerrerkayit") {?>
                 <script type="text/javascript">

                    alert("Daha Önceden Kayıt olunmuş. Lütfen Farklı Bir mail ile kayıt olunuz");

                </script>

                <?php } elseif ($_GET['durum']=="basarisiz") {?>

                   <script type="text/javascript">

                    alert("Kayıt Olma Başarısız");

                </script>

                <?php }
                ?>

<div class="container" style=" background: linear-gradient(to bottom right, white, gray);  height: 750px;  ">
    <div class="row">
       

                <div class='col-sm-3'></div>
                <div class="col-sm-6">
                    <div class="login-box well">
                       <form action="yonetim-panel/islemler.php" method="POST">
                        <legend>KAYIT OL</legend>
                        <div class="form-group">
                            <label for="username-email">Ad-Soyad</label>
                            <input type="text" class="form-control"  required="" name="kullanici_adsoyad" placeholder="Ad ve Soyadınızı Giriniz...">
                        </div>
                        <div class="form-group">
                            <label for="username-email">E-mail Giriniz</label>
                            <input type="email" class="form-control" required="" name="kullanici_mail"  placeholder="Dikkat! Mail adresiniz kullanıcı adınız olacaktır.">
                        </div><div class="form-group">
                            <label for="username-email">Adres Giriniz</label>
                            <textarea class="form-control" required="" name="kullanici_adres"  placeholder="Dikkat! Kargonuz kayıtlı Olan adresinize gönderilecektir."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="username-email">Sifre Giriniz</label>
                            <input type="password" class="form-control" name="kullanici_passwordone"    placeholder="Şifrenizi Giriniz...">
                        </div>
                        <div class="form-group">
                            <label for="username-email">Sifre Tekrar</label>
                            <input type="password" class="form-control" name="kullanici_passwordtwo"   placeholder="Şifrenizi Tekrar Giriniz...">
                        </div>


                        <div class="form-group">
                            <button type="submit" name="kullanicikaydet" class="btn btn-default btn-login-submit btn-block m-t-md" >Kayıt ol</button>


                        </div>

                        <div class="form-group">
                            <p class="text-center m-t-xs text-sm">Zaten bir hesabın varmı ?</p> 
                            <a href="login.php" class="btn btn-default btn-block m-t-md">Giriş Yap</a>
                        </div>
                    </form>

                </div>
            </div>
            <div class='col-sm-3'></div>
        </div>
    </div>



    <?php include"footer.php" ?>