<?php include"header.php";

$slidersor=$db->prepare("SELECT * FROM tblslider ");// uyeler tablosundaki verileri çekmek için sorgumuzu elde ettik
$slidersor->execute();// sorgumuzu execute yaparak çalıştırdık




?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Slider İşlemleri <small></small></h3>
      </div>

      
    </div>



    

    <div class="row">
     <div class=" col-xs-12">
      <div class="x_panel">
        <a href="slider-ekle" class="btn btn-primary pull-left" role="button">YENİ SLİDER EKLE</a>

        
        <div class="clearfix"></div>

        <div class="x_content" ">

          <table class="table table-bordered" style="text-align: center;" >
            <thead >
              <tr>

                <th>Slider Adı</th>
                <th>Slider Resim</th>
                
                <th>Sil</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {?><!--Elde ettiğimiz sonuçları While Döngüsüne alarak fetch metodu ile ekrana yazdırdık Fetch ASSOC ile diziyi döndürdük-->

              <tr>
                <!--Sutunları çektik-->
                <td><?php echo $slidercek['slider_ad'] ?></td>
                <td><img src=" ../../images/Slider<?php echo $slidercek['slider_resimyol'] ?>" width="100" height="100"></td>

                <td><center><a href="../islemler.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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