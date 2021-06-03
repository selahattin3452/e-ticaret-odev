<?php include"header.php"; ?>



<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3>urun Ekleme İşlemleri <small>

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
            <form action="../islemler.php" method="POST"          id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Urun Adı<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_ad" value="<?php echo $urunyaz['urun_ad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Seç<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-6">

                  <?php  

                  $urun_id=$uruncek['kategori_id']; 

                  $kategorisor=$db->prepare("select * from tblkategori ");
                  $kategorisor->execute();

                  ?>
                  <select class="select2_multiple form-control" required="" name="kategori_id" >


                   <?php 

                   while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {

                     $kategori_id=$kategoricek['kategori_id'];

                     ?>

                     <option  value="<?php echo $kategoricek['kategori_id']; ?>"><?php echo $kategoricek['kategori_adi']; ?></option>

                     <?php } ?>

                   </select>
                 </div>
               </div>

               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Urun FİYAT<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_fiyat" value="<?php echo $urunyaz['urun_fiyat'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Urun STOK<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_stok" value="<?php echo $urunyaz['urun_stok'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Urun Detay <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea class="form-control" id="first-name" name="urun_detay" required="required" id="comment" class="form-control col-md-7 col-xs-12"><?php echo $urunyaz['urun_detay'] ?></textarea>
                </div>
              </div>





              <div class="ln_solid"></div>
              <div class="form-group ">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 pull-right">

                  <button type="submit" class="btn btn-success" name="urunekle">EKLE</button>

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