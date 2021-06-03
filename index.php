<?php include"header.php";
$urunsor=$db->prepare("SELECT * FROM tblurunler ORDER BY urun_id DESC LIMIT 0,3  ");// kategori tablosundaki verileri çekmek için sorgumuzu elde ettik
$urunsor->execute();// sorgumuzu execute yaparak çalıştırdık


?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
			<div id="slider">

				<?php  

                        $slidersor=$db->prepare("SELECT * FROM tblslider ORDER BY slider_id DESC ");// uyeler tablosundaki verileri çekmek için sorgumuzu elde ettik
                          $slidersor->execute();// sorgumuzu execute yaparak çalıştırdık
                          
                          while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {
                          	?>

                          	<div class="slayt"><img src="images/Slider/<?php echo $slidercek['slider_resimyol'] ?>" /></div>



                          <?php  }




                          ?>



                          <div id="kontrol">
                          	<a href="javascript:oncekiSlayt()">Önceki</a>
                          	<a href="javascript:sonrakiSlayt()">Sonraki</a>
                          </div>
                        </div>







                      </div>
                    </div>
                  </div>

                  <section>
                   <div class="container">
                    <div class="row">
                     <div class="col-sm-3" style="margin-top:10px ">





                      <?php include"sidebar.php" ?>
                      <div class="col-sm-3" style="margin-top: 15px; margin-bottom: 15px;">

                     




                     </div>
                   </div>
                 </div>

                 <div class="col-sm-9 padding-right">
                   <div class="features_items"><!--features_items-->
                    <h2 class="title text-center" style="margin-top:10px ">Yeni Çıkan Ürünler</h2>

                    <?php 


                    while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC))


                     {?>
                      <?php 
                      $urun_id=$uruncek['urun_id'];
                      $urunfotosor=$db->prepare("SELECT* FROM tblurun_resim where urun_id=:id LIMIT 1");
                      $urunfotosor->execute(array(

                        'id'=>$urun_id

                      ));
                      $urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);



                      ?>

                      <div class="col-sm-4">
                       <div class="product-image-wrapper">
                        <div class="single-products">
                         <div class="productinfo text-center">
                          <img src="images/urun/<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" height="225px" width="175px" />
                          <h1><?php echo $uruncek['urun_fiyat']; ?>₺</h1>
                          <p><?php echo $uruncek['urun_ad']; ?></p>

                        </div>
                        <div class="product-overlay">
                          <div class="overlay-content">
                           <img src="images/urun/<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" height="125px" />
                           <h4 style="color:white"><?php echo $uruncek['urun_fiyat']; ?>₺</h4>
                           <p><?php echo $uruncek['urun_ad']; ?></p>

                           <form action="yonetim-panel/islemler.php" method="POST">
                            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                            <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">



                          </form>




                          <form action="yonetim-panel/islemler.php" method="POST">
                            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                            <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">

                            <div class="row">

                             <input type="hidden" class="form-control input-sm" value="1" name="urun_adet">
                           </div>
                           <?php if (!isset($_SESSION['userkullanici_mail'])) {?>


                             Sepete Ürün Eklemek İçin Lütfen <a href="login">GİRİŞ YAPIN</a> 


                           <?php } else{?>

                             <input type="submit" class="btn btn-default add-to-cart" name="sepeteekle" value="SEPETE EKLE">

                           <?php }



                           ?>


                         </form>






                       </div>
                     </div>
                     <img src="images/home/sale.png" class="new" alt="" />
                   </div>
                   <div class="choose">
                     <ul class="nav nav-pills nav-justified">
                      <li><a href="urun-<?=seo($uruncek["urun_ad"]) ?>"><i class="fa fa-plus-square"></i>Detay İçin Tıklayınız</a></li>

                    </ul>
                  </div>
                </div>
              </div>



            <?php }?>

          </div>

          <h2 class="title text-center" style="margin-top:10px; color: red">ÖNE ÇIKAN KİTAPLAR</h2>

          <div class="container">
           <div class="row">
            <div class="col-sm-9" >
             <?php 
             $urunsor=$db->prepare("SELECT * FROM tblurunler where urun_onecikar=:urun_onecikar");
             $urunsor->execute(array(
              'urun_onecikar' => 1

            ));


            while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {?>

              <div class="col-sm-4">
               <div class="product-image-wrapper">
                <div class="single-products">
                 <div class="productinfo text-center">
                  <?php 

                  $urun_id=$uruncek['urun_id'];
                  $urunfotosor=$db->prepare("SELECT* FROM tblurun_resim where urun_id=:id LIMIT 1");
                  $urunfotosor->execute(array(

                    'id'=>$urun_id

                  ));
                  $urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);
                  ?>
                  <img src="images/urun/<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" height="225px" width="175px" />
                  <h1><?php echo $uruncek['urun_fiyat']; ?>₺</h1>
                  <p><?php echo $uruncek['urun_ad']; ?></p>

                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                   <img src="images/urun/<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="" height="125px" />
                   <h4 style="color:white"><?php echo $uruncek['urun_fiyat']; ?>₺</h4>
                   <p><?php echo $uruncek['urun_ad']; ?></p>

                   <form action="yonetim-panel/islemler.php" method="POST">
                    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                    <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">



                  </form>




                  <form action="yonetim-panel/islemler.php" method="POST">

                    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                    <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">

                    <div class="row">

                     <input type="hidden" class="form-control input-sm" value="1" name="urun_adet">
                   </div>
                   <?php if (!isset($_SESSION['userkullanici_mail'])) {?>


                     Sepete Ürün Eklemek İçin Lütfen <a href="login">GİRİŞ YAPIN</a> 


                   <?php } else{?>

                     <input type="submit" class="btn btn-default add-to-cart" name="sepeteekle" value="SEPETE EKLE">

                   <?php }



                   ?>


                 </form>






               </div>
             </div>
             <img src="images/home/sale.png" class="new" alt="" />
           </div>
           <div class="choose">
             <ul class="nav nav-pills nav-justified">

              <li><a href="urun-<?=seo($uruncek["urun_ad"]) ?>"><i class="fa fa-plus-square"></i>Detay İçin Tıklayınız</a></li>

            </ul>
          </div>
        </div>
      </div>

    <?php } ?>


  </div>
</div>
</div>
</div>


</div>
<div class="container">
 <div class=""></div>
</div>



</div><!--features_items-->

</div>










<?php include"footer.php" ?>

