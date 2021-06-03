<?php include"header.php";

?>



<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3>Banka Ekleme İşlemleri <small>

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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Adı <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="banka_ad" value="<?php echo $bankacek['banka_ad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              
          

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka İBAN <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="banka_iban" value="<?php echo $bankacek['banka_iban'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Hesap Ad Soyad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="banka_hesap_adsoyad" value="<?php echo $bankacek['banka_hesap_adsoyad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
			  
			   
              





          
             


             <div class="ln_solid"></div>
             <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="bankaekle" class="btn btn-success">EKLE</button>
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