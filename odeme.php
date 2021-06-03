<?php include"header.php"; ?> 



<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="urunler.php">Urun</a></li>
				<li class="active">Sepetim</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			
		</div>
	</div>
</section> <!--/#cart_items-->


<section id="do_action">
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Ürün Resim</th>
								<th>Ürün ad</th>
								<th>Ürün Kodu</th>
								<th>Adet</th>
								<th class="text-right">Toplam Fiyat</th>
								<th> </th>
							</tr>
						</thead>
						<form action="yonetim-panel/islemler.php" method="POST">
							<tbody>
								<?php 
								$kullanici_id=$kullanicicek['kullanici_id'];
								$sepetsor=$db->prepare("SELECT * FROM tblsepet where kullanici_id=:id");
								$sepetsor->execute(array(
									'id' => $kullanici_id
								));

								while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {
									$urun_id=$sepetcek['urun_id'];
									$urunsor=$db->prepare("SELECT * FROM tblurunler where urun_id=:urun_id");
									$urunsor->execute(array(
										'urun_id' => $urun_id
									));

									$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
									$toplamfiyat+=$uruncek['urun_fiyat']*$sepetcek['urun_adet'];
									$resimsor=$db->prepare("SELECT * FROM tblurun_resim where urun_id=:rid");
									$resimsor->execute(array(
										'rid'=>$urun_id


									));
									$resimcek=$resimsor->fetch(PDO::FETCH_ASSOC);






									?>
									<tr>
										<td><img width="50" height="50" src="images/urun/<?php echo $resimcek['urunfoto_resimyol']; ?>"> </td>
										<td><?php echo $uruncek['urun_ad'] ?></td>
										<td><?php echo $uruncek['urun_id'] ?></td>
										<td><?php echo $sepetcek['urun_adet'] ?></td>
										<td class="text-right"><?php echo $uruncek['urun_fiyat']; ?>₺</td>
										<td class="text-right"> </td>
									</tr>


								<?php }




								?>

								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><strong>Toplam :</strong></td>
									<td class="text-right"><strong><?php echo $toplamfiyat; ?> ₺</strong></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="container">
						<div class="category-tab shop-details-tab"><!--category-tab-->
							<div class="col-sm-12">
								<ul class="nav nav-tabs">
									
									<li class="active"><a href="#reviews" data-toggle="tab">BANKA HAVALESİ</a></li>
								</ul>
							</div>
							<div class="tab-content">


								<div class="tab-pane fade active in" id="reviews" >
									<div class="col-sm-12">
								
										<label>İşlem Yapan :<?php echo $kullanicicek['kullanici_adsoyad']; ?></label>

										<?php 
						$bankasor=$db->prepare("SELECT * FROM tblbanka  ");// banka tablosundaki verileri çekmek için sorgumuzu elde ettik
                        $bankasor->execute();// sorgumuzu execute yaparak çalıştırdık
                        while ($bankacek=$bankasor->fetch(PDO::FETCH_ASSOC)) {?>


                        	<div class="checkbox">
                        		<label><input type="radio" name="siparis_banka" value="<?php echo $bankacek['banka_ad']; ?>">
                        			<?php echo $bankacek['banka_ad'];
                        			echo"--->IBAN NUMARASI ";
                        			echo"<b style='color:red'>";echo $bankacek['banka_iban'];echo"</b>"; ?>
                        		</label>
                        	</div>

                        	

                        	



                        <?php }?>



                        <input type="hidden" name="siparis_toplam" value="<?php  echo $toplamfiyat ?> ">
                        <input type="hidden" name="kullanici_id" value="<?php  echo $kullanicicek['kullanici_id'] ?> ">
                        <button class="btn btn-success" type="submit" name="bankasiparisekle">Sipariş Ver</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<?php include"footer.php"; ?>