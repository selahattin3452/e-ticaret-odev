<?php include'header.php';

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");// prepare ile sorguyu hazırlıyoruz
$hakkimizdasor->execute(array(
  'id' => 0));// gelen get değerini diziye alarak çekiyoruz.

$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);// fetch methodu ile ekrana yazdırıyoruz fetch_assoc ile diziyi döndürüyoruz.



?>
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center"><strong><?php echo $hakkimizdacek['hakkimizda_baslik']?></strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					       <div class="col-sm-6">
						   <h1><?php echo $hakkimizdacek['hakkimizda_baslik']?></h1>
						   <?php echo $hakkimizdacek['hakkimizda_icerik']?></div>
						   <div class="col-sm-6"><iframe width="550" height="315"
                              src="https://www.youtube.com/embed/<?php echo $hakkimizdacek['hakkimizda_video']?>"> </iframe>
                                                         
						</div>
					</div>
				</div>			 		
			</div>    	
    		 
    	</div>	
    </div><!--/#contact-page-->
	
	<?php include'footer.php' ?>