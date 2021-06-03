<?php include"header.php"; ?>


<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="urunler.php">Urun</a></li>
				<li class="active">Siparişlerim</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<th>Sipariş No</th>
						<th>Urun Adı</th>
						<th>Tutar</th>
						<th>Urun Adet</th>
						<th>Adres</th>
						
						
						
						
						<td></td>
					</tr>
				</thead>
				<tbody>


					<?php 
					

					$siparis_id=$asipariscek['urun_id'];

					$siparissor=$db->prepare("SELECT * FROM tblsiparis_detay  where siparis_id=:id ");// siparis tablosundaki verileri çekmek için sorgumuzu elde ettik
					$siparissor->execute(array(

						'id'=>$_GET['siparis_id']
                     ));// sorgumuzu execute yaparak çalıştırdık


					while($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) {
						

					 $dsiparissor=$db->prepare("SELECT * FROM tblurunler where urun_id =".$sipariscek['urun_id']);// siparis tablosundaki verileri çekmek için sorgumuzu elde ettik
					 $dsiparissor->execute();
					 $dsipariscek=$dsiparissor->fetch(PDO::FETCH_ASSOC);

		





					 ?>
					 <tr>


					 	<td><?php echo $sipariscek['siparis_id']; ?></td>
					 	<td><?php echo $dsipariscek['urun_ad']; ?></td>
					 	<td><?php echo $sipariscek['urun_fiyat']; ?></td>
					 	<td><?php echo $sipariscek['urun_adet']; ?></td>
					 	<td><?php echo $kullanicicek['kullanici_adres']; ?></td>




					 </tr>

					<?php } ?>












				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->


<section id="do_action">
	<div class="container">

		<div class="row">

			
		</div>
	</div>
</section>

<?php include"footer.php" ?>