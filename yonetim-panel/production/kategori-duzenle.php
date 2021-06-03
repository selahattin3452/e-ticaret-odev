<?php include"header.php";

$kategorisor=$db->prepare("SELECT * FROM tblkategori where kategori_id=:id");
$kategorisor->execute(array(
  'id' => $_GET['kategori_id']
  ));

$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
?>



<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3>Kategori Güncelleme İşlemleri <small>

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
         
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>

      <div class="x_content" ">
                   <form action="../islemler.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kategori_adi" value="<?php echo $kategoricek['kategori_adi'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              
          

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kategori_sira" value="<?php echo $kategoricek['kategori_sira'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
			  
			   
              





            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Durum<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="kategori_durum" required>



                   <!-- Kısa İf Kulllanımı 

                    <?php echo $kategoricek['kategori_durum'] == '1' ? 'selected=""' : ''; ?>

                  -->




                  <option value="1" <?php echo $kategoricek['kategori_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>



                  <option value="0" <?php if ($kategoricek['kategori_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>
                  <!-- <?php 

                   if ($kategoricek['kategori_durum']==0) {?>


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
             


             <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id'] ?>"> 


             <div class="ln_solid"></div>
             <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="kategoriduzenle" class="btn btn-success">Güncelle</button>
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