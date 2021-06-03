<?php include"header.php";

$yorumsor=$db->prepare("SELECT * FROM tblyorum order by yorum_onay ASC");
$yorumsor->execute(array());// sorgumuzu execute yaparak çalıştırdık




?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Yorum İşlemleri <small></small></h3>
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

        <table class="table table-bordered" style="text-align: center;" >
          <thead >
            <tr>
              <th>S.No</th>
              <th>Yorum</th>
              <th>Kullanıcı</th>
              <th>Ürün</th>
              <th>Durum</th>
              <th></th>




              
            </tr>
          </thead>
          <tbody>

                <?php 

                $say=0;

                while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $yorumcek['yorum_detay'] ?></td>
                 <td><?php 

                   $kullanici_id=$yorumcek['kullanici_id'];

                   $kullanicisor=$db->prepare("SELECT * FROM tbluyeler where kullanici_id=:id");
                   $kullanicisor->execute(array(
                    'id' => $kullanici_id
                    ));

                   $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

                   echo $kullanicicek['kullanici_adsoyad'];



                   ?></td>
                   <td><?php 

                     $urun_id=$yorumcek['urun_id'];

                     $urunsor=$db->prepare("SELECT * FROM tblurunler where urun_id=:id");
                     $urunsor->execute(array(
                      'id' =>  $urun_id

                      ));

                     $uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);


                     echo $uruncek['urun_ad'];



                     ?></td>
                     <td><center><?php 

                       if ($yorumcek['yorum_onay']==0) {?>

                       <a href="../islemler.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>&yorum_one=1&yorum_onay=ok"><button class="btn btn-success btn-xs">Onayla</button></a>


                       <?php } elseif ($yorumcek['yorum_onay']==1) {?>


                       <a href="../islemler.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>&yorum_one=0&yorum_onay=ok"><button class="btn btn-warning btn-xs">Kaldır</button></a>

                       <?php } ?>


                     </center></td>


                     


           
            <td><center><a href="../islemler.php?yorum_id=<?php echo $yorumcek['yorum_id']; ?>&yorumsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
           </table>

         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>





<?php include"footer.php" ?>