<?php include"header.php"; 
$urunsor=$db->prepare("SELECT* FROM tblurunler where urun_id=:id");
$urunsor->execute(array(

	'id'=>$_GET['urun_id']

));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

?>


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
						<th>Sipariş Tarihi</th>
						<th>Tutar</th>
						<th>Ödeme Tip</th>
						<th>Durum</th>
						
						
						
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php 
					$kullanici_id=$kullanicicek['kullanici_id'];
					$siparissor=$db->prepare("SELECT * FROM tblsiparis where kullanici_id=:id ORDER BY siparis_zaman DESC");
					$siparissor->execute(array(
						'id' => $kullanici_id
					));

					while($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) {?>
						<tr>

							<td><?php echo $sipariscek['siparis_id']; ?></td>
							<td><?php echo $sipariscek['siparis_zaman']; ?></td>
							<td><?php echo $sipariscek['siparis_toplam']; ?></td>
							<td><?php echo $sipariscek['siparis_tip']; ?></td>
							<td><?php

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



							?></td>

							<th>



								
								<a href="siparis-detay?siparis_id=<?php echo $sipariscek['siparis_id']?>" class="btn btn-success btn-xs" role="button">Sipariş Detay</a>


							</th>

							
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