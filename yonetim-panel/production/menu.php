<?php include"header.php";

$menusor=$db->prepare("SELECT * FROM tblmenu ");// uyeler tablosundaki verileri çekmek için sorgumuzu elde ettik
$menusor->execute();// sorgumuzu execute yaparak çalıştırdık




?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Menu İşlemleri <small></small></h3>
      </div>

      
    </div>
	
	 

    

    <div class="row">
     <div class=" col-xs-12">
      <div class="x_panel">
       <a href="menu-ekle.php" class="btn btn-primary pull-left" role="button">YENİ MENU EKLE</a>
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
                <th>Menu Adı</th>
				<th>Menu Url</th>
                <th>Menu Seo Url</th>
				<th>Menu Sıra</th>
				<th>Menu Durum</th>
				<th>Menu Ust</th>
				
               
                

                <th>Duzenle</th>
                <th>Sil</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {?><!--Elde ettiğimiz sonuçları While Döngüsüne alarak fetch metodu ile ekrana yazdırdık Fetch ASSOC ile diziyi döndürdük-->

                <tr>
                  <td><?php echo $menucek['menu_id'] ?></td><!--Sutunları çektik-->
                  <td><?php echo $menucek['menu_adi'] ?></td>
				  <td><?php echo $menucek['menu_url'] ?></td>
                  <td><?php echo $menucek['menu_seourl'] ?></td>
				  <td><?php echo $menucek['menu_sira'] ?></td>
				  
                 
				  
                  <td><?php if($menucek['menu_durum'] == 1)
				  {?>
					  <button type="button " class="btn btn-success btn-xs">Aktif</button>
				<?php  }
				  else{ ?>
					  <button type="button " class="btn btn-danger btn-xs">Pasif</button>
				 <?php }
					  ?></td>
                  <td><?php echo $menucek['menu_ust'] ?></td>
                  
                
                  <td><center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']?>"><button class="btn btn-success btn-xs">DÜZENLE</button></center></a></td>
                  <td><center><a href="../islemler.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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