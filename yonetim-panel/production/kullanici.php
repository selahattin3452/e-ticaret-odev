<?php include"header.php";

$kullanicisor=$db->prepare("SELECT * FROM tbluyeler ");// uyeler tablosundaki verileri çekmek için sorgumuzu elde ettik
$kullanicisor->execute();// sorgumuzu execute yaparak çalıştırdık




?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Üye İşlemleri <small></small></h3>
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
                <th>No</th>
                <th>Adı Soyadı</th>
                <th>e Mail</th>
                <th>Telefon</th>
                <th>Kullanici Adı</th>
                <th>Sifre</th>
                

                <th>Duzenle</th>
                <th>Sil</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?><!--Elde ettiğimiz sonuçları While Döngüsüne alarak fetch metodu ile ekrana yazdırdık Fetch ASSOC ile diziyi döndürdük-->

                <tr>
                  <td><?php echo $kullanicicek['kullanici_id'] ?></td><!--Sutunları çektik-->
                  <td><?php echo $kullanicicek['kullanici_adsoyad'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_mail'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_tel'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_adi'] ?></td>
                  <td><?php echo $kullanicicek['kullanici_sifre'] ?></td>
                  
                
                  <td><center><a href="kullanici-duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']?>"><button class="btn btn-success btn-xs">DÜZENLE</button></center></a></td>
                  <td><center><a href="../islemler.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>&kullanicisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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