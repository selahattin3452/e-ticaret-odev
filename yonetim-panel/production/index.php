<?php include"header.php" ?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Admin Panel <small>Hoşgeldiniz</small></h3>
      </div>

      
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Kullanıcılar<small>Kullanıcı sayısı</small></h2>
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
          </div>
          <div class="x_content">
           <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Kayıtlı Kullanıcı Sayısı</span>
              <?php

              $kullanicisor=$db->prepare("SELECT * FROM tbluyeler");
              $kullanicisor->execute();
              $kullanicisay=$kullanicisor->rowCount();




              ?>
              <div class="count"><?php echo ("$kullanicisay"); ?></div>
              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Toplam Sipariş</span>
              <?php

              $siparissor=$db->prepare("SELECT * FROM tblsiparis");
              $siparissor->execute();
              $siparissay=$siparissor->rowCount();




              ?>
              <div class="count"><?php echo ("$siparissay"); ?></div>
              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Onay Bekleyen Siparişler</span>
              <?php

              $siparissor=$db->prepare("SELECT * FROM tblsiparis where siparis_durum=:durum");
              $siparissor->execute(array(

                'durum'=>0



              ));
              $onaysay=$siparissor->rowCount();




              ?>
              <div class="count green"><?php echo ("$onaysay"); ?></div>

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Toplam Yorum Sayısı</span>

              <?php 

              $yorumsor=$db->prepare("SELECT * FROM tblyorum");
              $yorumsor->execute();
              $yorumsay=$yorumsor->rowCount();



              ?>


              <div class="count"><?php echo ("$yorumsay"); ?></div>

            </div>
          
           
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