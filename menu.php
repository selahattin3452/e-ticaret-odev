<div class="mainmenu pull-left">
	<ul class="nav navbar-nav collapse navbar-collapse">
		<li><a href="index.php" class="active">Anasayfa</a></li>
		
		<?php 
								$menusor=$db->prepare("SELECT * FROM tblmenu where menu_durum=:durum order by menu_sira ASC limit 5 ");// uyeler tablosundaki verileri çekmek için sorgumuzu elde ettik
								$menusor->execute(array(
									'durum' => 1
								));// sorgumuzu execute yaparak çalıştırdık
								
								while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){
									?>
									
									<li><a href="<?php echo $menucek['menu_url'] ?>"><?php echo $menucek['menu_adi'] ?></a></li>
									
									<?php } ?>
									
								</ul>
							</div>