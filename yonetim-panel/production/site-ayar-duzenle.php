<?php include"header.php";

$ayaradi=$db->prepare("SELECT * FROM tblayar where ayar_id=:id");// prepare ile sorguyu hazırlıyoruz
$ayaradi->execute(array(
  'id' => 0));// gelen get değerini diziye alarak çekiyoruz.

$ayaryaz=$ayaradi->fetch(PDO::FETCH_ASSOC);// fetch methodu ile ekrana yazdırıyoruz fetch_assoc ile diziyi döndürüyoruz.

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
          <div class="clearfix"></div>
            <br />

            <form action="../islemler.php" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo<br><span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">

                    <?php 
                    if (strlen($ayaryaz['ayar_logo'])>0) {?>

                    <img width="200"  src="../../images/<?php echo $ayaryaz['ayar_logo']; ?>">

                    <?php } else {?>


                    <img width="200"  src="../../images/noimage.jpg">


                    <?php } ?>

                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="ayar_logo"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <input type="hidden" name="eski_yol" value="<?php echo $ayaryaz['ayar_logo']; ?>">

                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="logoduzenle" class="btn btn-primary">Güncelle</button>
                </div>

              </form>

              <hr>

          
          <form action="../islemler.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE BAŞLIK <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="ayar_title" value="<?php echo $ayaryaz['ayar_title'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE URL <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="ayar_url" value="<?php echo $ayaryaz['ayar_url'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE AÇIKLAMA <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="ayar_description" value="<?php echo $ayaryaz['ayar_description'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE ANAHTAR KELİME <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="ayar_keywords" value="<?php echo $ayaryaz['ayar_keywords'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE YAZAR <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="ayar_author" value="<?php echo $ayaryaz['ayar_author'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE TELEFON NUMARASI <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="ayar_tel" value="<?php echo $ayaryaz['ayar_tel'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE İŞ TEL <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="ayar_gsm" value="<?php echo $ayaryaz['ayar_gsm'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE MAİL <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="mail" id="first-name" name="ayar_mail" value="<?php echo $ayaryaz['ayar_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE İLÇE <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="mail" id="first-name" name="ayar_ilce" value="<?php echo $ayaryaz['ayar_ilce'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE İL <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="mail" id="first-name" name="ayar_il" value="<?php echo $ayaryaz['ayar_il'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE ADRES <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="mail" id="first-name" name="ayar_adres" value="<?php echo $ayaryaz['ayar_adres'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE MESAİ SAATLERİ <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="mail" id="first-name" name="ayar_mesai" value="<?php echo $ayaryaz['ayar_mesai'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE HARİTALAR <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="mail" id="first-name" name="ayar_maps" value="<?php echo $ayaryaz['ayar_maps'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SİTE BAKIM <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="mail" id="first-name" name="ayar_bakim" value="<?php echo $ayaryaz['ayar_bakim'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            


            <input type="hidden" name="ayar_id" value="<?php echo $ayaryaz['ayar_id'] ?>">
            
            <div class="ln_solid"></div>
            <div class="form-group ">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 pull-right">

                <button type="submit" class="btn btn-success" name="ayarduzenle">Guncelle</button>

              </div>
            </div>

          </form>


        </div>
      </div>
    </div>
  </div>
</div>
</div>







<?php include"footer.php" ?>