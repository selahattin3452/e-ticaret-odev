<?php include"header.php";

$siparissor=$db->prepare("SELECT * FROM tblsiparis ORDER BY siparis_id DESC ");// siparis tablosundaki verileri çekmek için sorgumuzu elde ettik
$siparissor->execute();// sorgumuzu execute yaparak çalıştırdık




?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>siparis İşlemleri <small>


        </small></h3>
      </div>



      <div class="row">
       <div class=" col-xs-12">
        <div class="x_panel">


          <div class="clearfix"></div>

          <div class="x_content">

            <table class="table table-bordered" style="text-align: center;" id="tblCustomers" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>Sipariş No</th>
                  <th>Tarih</th>
                  <th>Tutar</th>
                  <th>Ödeme Tip</th>
                  <th>Durum</th>
                  <th>Sipariş Detay</th>

                  <td></td>
                </tr>
              </thead>
              <tbody>
                <?php while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) {?><!--Elde ettiğimiz sonuçları While Döngüsüne alarak fetch metodu ile ekrana yazdırdık Fetch ASSOC ile diziyi döndürdük-->

                <tr>
                  <td><?php echo $sipariscek['siparis_id']; ?></td>
                  <td><?php echo $sipariscek['siparis_zaman']; ?></td>
                  <td><?php echo $sipariscek['siparis_toplam']; ?></td>
                  <td><?php echo $sipariscek['siparis_tip']; ?></td>
                  <td>
                    <?php

                    if ($sipariscek['siparis_durum']==0) {
                      echo "<b style='color:red'>Ödeme Bekleniyor</b>";

                    }elseif ($sipariscek['siparis_durum']==1) {

                      echo "<b style='color:#228B22'>Ödeme Onaylandı</b>";

                    }elseif ($sipariscek['siparis_durum']==2) {

                      echo "<b style='color:#7FFF00'>Kargoya Verildi</b>";

                    }elseif ($sipariscek['siparis_durum']==3) {

                      echo "<b style='color:'>Kargo Teslim Edildi</b>";
                    }elseif ($sipariscek['siparis_durum']==4) {
                      echo "<b style='color:#B22222'>İptal edildi</b>";
                    }



                    ?>
                    



                  </td>



                  <td><center><a href="siparis-detay.php?siparis_id=<?php echo $sipariscek['siparis_id']?>"><button class="btn btn-warning btn-xs">Detay</button></center></a></td>
                  <td><center><a href="siparis-duzenle.php?siparis_id=<?php echo $sipariscek['siparis_id']?>"><button class="btn btn-success btn-xs">Sipariş Durum Güncelle</button></center></a></td>
                 
                </tr>

              <?php } 

              ?>
              <input type="button" id="btnExport" value="Dışa aktar" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Siparisler.pdf");
                }
            });
        });
    </script>
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