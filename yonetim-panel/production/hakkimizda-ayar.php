<?php include"header.php";

$ayaradi=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");// prepare ile sorguyu hazırlıyoruz
$ayaradi->execute(array(
  'id' => 0));// gelen get değerini diziye alarak çekiyoruz.

$ayaryaz=$ayaradi->fetch(PDO::FETCH_ASSOC);// fetch methodu ile ekrana yazdırıyoruz fetch_assoc ile diziyi döndürüyoruz.

?>

<head>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</head>

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

      
        <form action="../islemler.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">HAKKIMIZDA BAŞLIK <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="hakkimizda_baslik" value="<?php echo $ayaryaz['hakkimizda_baslik'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
		  
		    <!-- Ck Editör Başlangıç -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="hakkimizda_icerik"><?php echo $ayaryaz['hakkimizda_icerik']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör Bitiş -->


		  
		  <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">HAKKIMIZDA VİDEO <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="hakkimizda_video" value="<?php echo $ayaryaz['hakkimizda_video'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">HAKKIMIZDA VİZYON <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="hakkimizda_vizyon" value="<?php echo $ayaryaz['hakkimizda_vizyon'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
		  
		 


         
          
          <div class="ln_solid"></div>
          <div class="form-group ">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 pull-right">

              <button type="submit" class="btn btn-success" name="hakkimizdaduzenle">Guncelle</button>

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