<?php include"header.php";

$kategorisor=$db->prepare("SELECT * FROM tblkategori ORDER BY kategori_sira ASC ");// kategori tablosundaki verileri çekmek için sorgumuzu elde ettik
$kategorisor->execute();// sorgumuzu execute yaparak çalıştırdık




?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Kategori İşlemleri <small>


        </small></h3>
      </div>



      <div class="row">
       <div class=" col-xs-12">
        <div class="x_panel">

          <a href="kategori-ekle.php">  <button type="button" class="btn btn-primary"> YENİ KATEGORİ EKLE</button></a>
          <div class="clearfix"></div>

          <div class="x_content" ">

            <table class="table table-bordered" style="text-align: center;" >
              <thead >
                <tr>
                  <th>Kategori Id</th>
                  <th>Kategori Adı</th>
                  <th>Kategori Ust</th>
                  <th>Kategori Sira</th>
                  <th>Kategori Durum</th>
                  <th>Kategori Url</th>
                  <th>Kategori SeoUrl</th>     
                  <th>Duzenle</th>
                  <th>Sil</th>

                </tr>
              </thead>
              <tbody>
                <?php while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {?><!--Elde ettiğimiz sonuçları While Döngüsüne alarak fetch metodu ile ekrana yazdırdık Fetch ASSOC ile diziyi döndürdük-->

                <tr>
                  <td><?php echo $kategoricek['kategori_id'] ?></td><!--Sutunları çektik-->
                  <td><?php echo $kategoricek['kategori_adi'] ?></td>
                   <td><?php echo $kategoricek['kategori_ust'] ?></td>
                  <td><?php echo $kategoricek['kategori_sira'] ?></td>


                  <td><?php if($kategoricek['kategori_durum'] == 1)
                  {?>
                   <button type="button " class="btn btn-success btn-xs">Aktif</button>
                   <?php  }
                   else{ ?>
                     <button type="button " class="btn btn-danger btn-xs">Pasif</button>
                     <?php }
                     ?>
                   </td>



                   <td><?php echo $kategoricek['kategori_url'] ?></td>
                   <td><?php echo $kategoricek['kategori_seourl'] ?></td>





                   <td><center><a href="kategori-duzenle.php?kategori_id=<?php echo $kategoricek['kategori_id']?>"><button class="btn btn-success btn-xs">DÜZENLE</button></center></a></td>
                   <td><center><a href="../islemler.php?kategori_id=<?php echo $kategoricek['kategori_id']; ?>&kategorisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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