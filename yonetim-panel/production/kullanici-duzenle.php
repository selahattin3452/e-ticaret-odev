<?php include"header.php";

$kullaniciadi=$db->prepare("SELECT * FROM tbluyeler where kullanici_id=:id");// prepare ile sorguyu hazırlıyoruz
$kullaniciadi->execute(array(
  'id' => $_GET['kullanici_id']));// gelen get değerini diziye alarak çekiyoruz.

$kullaniciyaz=$kullaniciadi->fetch(PDO::FETCH_ASSOC);// fetch methodu ile ekrana yazdırıyoruz fetch_assoc ile diziyi döndürüyoruz.
?>



<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3>Üye İşlemleri <small>

        <?php 
        if ($_GET['durum']=='ok') {?>

        <a style="color:green "> İşlem Başarılı</a>

        <?php }elseif ($_GET['durum']=='no') {?>
        <a style="color:red "> İşlem Başarısız</a>

        <?php } ?>











      </small></h3>
    </div>


  </div>



  <div class="row">
   <div class=" col-xs-12">
    <div class="x_panel">

      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>

      <div class="x_content" ">
        <form action="../islemler.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">AD SOYAD <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="kullanici_adsoyad" value="<?php echo $kullaniciyaz['kullanici_adsoyad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ADRES <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea class="form-control" id="first-name" name="kullanici_adres"  rows="5" required="required" id="comment" class="form-control col-md-7 col-xs-12"><?php echo $kullaniciyaz['kullanici_adres'] ?></textarea>
            </div>

          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">MAİL <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="kullanici_mail" value="<?php echo $kullaniciyaz['kullanici_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TELEFON <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="tel" id="first-name" placeholder="(0000)-(000)-(00)-(00)" name="kullanici_tel" value="<?php echo $kullaniciyaz['kullanici_tel'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KULLANICI ADI <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="kullanici_adi"  value="<?php echo $kullaniciyaz['kullanici_adi'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİFRE <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name"  name="kullanici_sifre"  value="<?php echo $kullaniciyaz['kullanici_sifre'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KAYIT TARİHİ <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="datetime" id="first-name" name="kullanici_kayit_tarihi"  value="<?php echo $kullaniciyaz['kullanici_kayit_tarihi'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
		     <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Durum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="kullanici_durum" required>



                   <!-- Kısa İf Kulllanımı 

                    <?php echo $kullaniciyaz['kullanici_durum'] == '1' ? 'selected=""' : ''; ?>

                  -->




                  <option value="1" <?php echo $kullaniciyaz['kullanici_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>



                  <option value="0" <?php if ($kullaniciyaz['kullanici_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>
                  <!-- <?php 

                   if ($kullaniciyaz['kullanici_durum']==0) {?>


                   <option value="0">Pasif</option>
                   <option value="1">Aktif</option>


                   <?php } else {?>

                   <option value="1">Aktif</option>
                   <option value="0">Pasif</option>

                   <?php  }

                   ?> -->


                 </select>
               </div>
             </div>


          

          

          

          

          

          

          <input type="hidden" name="kullanici_id" value="<?php echo $kullaniciyaz['kullanici_id'] ?>">
          
          <div class="ln_solid"></div>
          <div class="form-group ">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 pull-right">

              <button type="submit" class="btn btn-success" name="kullaniciduzenle">Guncelle</button>

            </div>
          </div>

        </form>


      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>






<?php include"footer.php" ?>