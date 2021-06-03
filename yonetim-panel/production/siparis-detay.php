<?php include"header.php";

$siparissor=$db->prepare("SELECT * FROM tblsiparis_detay where siparis_id=:id ");// siparis tablosundaki verileri çekmek için sorgumuzu elde ettik
$siparissor->execute(array(

  'id'=>$_GET['siparis_id']
));// sorgumuzu execute yaparak çalıştırdık

$kullanicisor=$db->prepare("SELECT * FROM tbluyeler where kullanici_mail=:mail");//kullanici adını çek
$kullanicisor->execute(array(
  'mail' => $_SESSION['userkullanici_mail']// Oturum açan üyenin Adi ile işleştir
));
$say=$kullanicisor->rowCount();//satırları saydır

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>siparis İşlemleri <small>


        </small></h3>
      </div>



      <div class="row">
       <div class=" col-xs-12">
        <div class="x_panel">


          <div class="clearfix"></div>

          <div class="x_content" ">

            <table class="table table-bordered" style="text-align: center;" >
              <thead>
                <tr>
                  <th>Sipariş No</th>
                  <th>Urun Adı</th>
                  <th>Tutar</th>
                  <th>Adet</th>
                  <th>Adres</th>
                  <th>Sipariş Veren Ad Soyad</th>



                </tr>
              </thead>
              <tbody>
                <?php



                while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) {
                  $dsiparissor=$db->prepare("SELECT * FROM tblurunler where urun_id =".$sipariscek['urun_id']);// siparis tablosundaki verileri çekmek için sorgumuzu elde ettik
                  $dsiparissor->execute();
                  $dsipariscek=$dsiparissor->fetch(PDO::FETCH_ASSOC);




                  ?><!--Elde ettiğimiz sonuçları While Döngüsüne alarak fetch metodu ile ekrana yazdırdık Fetch ASSOC ile diziyi döndürdük-->

                  <tr>
                    <td><?php echo $sipariscek['siparis_id']; ?></td>
                    <td><?php echo $dsipariscek['urun_ad']; ?></td>
                    <td><?php echo $sipariscek['urun_fiyat']; ?></td>
                    <td><?php echo $sipariscek['urun_adet']; ?></td>
                    <td><?php echo $kullanicicek['kullanici_adres']; ?></td>
                    <td><?php echo $kullanicicek['kullanici_adsoyad']; ?></td>

                  </tr>

                <?php } 

                ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>





<?php include"footer.php" ?>