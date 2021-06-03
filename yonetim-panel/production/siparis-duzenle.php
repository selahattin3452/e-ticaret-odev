<?php include"header.php";

$siparissor=$db->prepare("SELECT * FROM tblsiparis where siparis_id=:id");
$siparissor->execute(array(
  'id' => $_GET['siparis_id']
));

$sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC);
?>



<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3>siparis Güncelleme İşlemleri <small>

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
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Siparis Durum<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
           <select id="heard" class="form-control" name="siparis_durum" required>




            <option value="4" <?php echo $sipariscek['siparis_durum'] == '4' ? 'selected=""' : ''; ?>>İptal edildi</option>
            <option value="3" <?php echo $sipariscek['siparis_durum'] == '3' ? 'selected=""' : ''; ?>>Kargo Teslim Edildi</option>
            <option value="2" <?php echo $sipariscek['siparis_durum'] == '2' ? 'selected=""' : ''; ?>>Kargoya Verildi</option>
            <option value="1" <?php echo $sipariscek['siparis_durum'] == '1' ? 'selected=""' : ''; ?>>Ödeme Onaylandı</option>
            <option value="0" <?php if ($sipariscek['siparis_durum']==0) { echo 'selected=""'; } ?>>Ödeme Bekleniyor</option>



          </select>
        </div>
      </div>



      <input type="hidden" name="siparis_id" value="<?php echo $sipariscek['siparis_id'] ?>"> 


      <div class="ln_solid"></div>
      <div class="form-group">
        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button type="submit" name="siparisduzenle" class="btn btn-success">Güncelle</button>
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