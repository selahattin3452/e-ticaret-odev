<?php include"header.php";

?>



<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3>Menu Ekleme
	  İşlemleri <small>

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
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Adı<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="menu_adi" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Url<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="menu_url"  required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
		  
		  
		  
		  <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Ust<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="menu_ust"  required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
		     <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Durum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="menu_durum" required>

                  <option value="1" >Aktif</option>
                  <option value="0" >Pasif</option>
               
                 </select>
               </div>
             </div>

          


          


        


          

          

          

          

          

          

         
          
          <div class="ln_solid"></div>
          <div class="form-group ">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 pull-right">

              <button type="submit" class="btn btn-success" name="menuekle">Kaydet</button>

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
</div>
</div>






<?php include"footer.php" ?>