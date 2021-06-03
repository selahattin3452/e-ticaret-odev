<?php include"header.php";

$urunsor=$db->prepare("SELECT * FROM tblurunler ORDER BY urun_id DESC ");// urun tablosundaki verileri çekmek için sorgumuzu elde ettik
$urunsor->execute();// sorgumuzu execute yaparak çalıştırdık




?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>urun İşlemleri <small>

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

        <a href="urun-ekle.php">  <button type="button" class="btn btn-primary"> YENİ URUN EKLE</button></a>
        <div class="clearfix"></div>

        <div class="x_content" ">

          <table class="table table-bordered" style="text-align: center;" >
            <thead >
              <tr>



                <th>URUN AD</th>


                <th>URUN FİYAT</th>
                <th>URUN STOK</th>
                <th>URUN SEO URL</th>
                
                <th>ÖNE ÇIKART</th>
                <th>URUN RESİM</th>


                <th>Duzenle</th>
                <th>Sil</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {?><!--Elde ettiğimiz sonuçları While Döngüsüne alarak fetch metodu ile ekrana yazdırdık Fetch ASSOC ile diziyi döndürdük-->

              <tr>

                <td><?php echo $uruncek['urun_ad'] ?></td>
                

                <td><?php echo $uruncek['urun_fiyat'] ?></td>
                <td><?php echo $uruncek['urun_stok'] ?></td>
                <td><?php echo $uruncek['urun_seourl'] ?></td>
                <td>
                  <center><?php 

                  if ($uruncek['urun_onecikar']==0) {?>

                    <a href="../islemler.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urun_one=1&urun_onecikar=ok"><button class="btn btn-success btn-xs">Ön Çıkar</button></a>


                  <?php } elseif ($uruncek['urun_onecikar']==1) {?>


                   <a href="../islemler.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urun_one=0&urun_onecikar=ok"><button class="btn btn-warning btn-xs">Kaldır</button></a>

                 <?php } ?>


               </center></td>

               <td><center><a href="urun-galeri.php?urun_id=<?php echo $uruncek['urun_id']?>"><button class="btn btn-info btn-xs">Ürün Resim Galeri</button></center></a></td>


               <td><center><a href="urun-duzenle.php?urun_id=<?php echo $uruncek['urun_id']?>"><button class="btn btn-success btn-xs">DÜZENLE</button></center></a></td>
               <td><center><a href="../islemler.php?urun_id=<?php echo $uruncek['urun_id']; ?>&urunsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
             </tr>

           <?php } 

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