<?php include'header.php';

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");// prepare ile sorguyu hazırlıyoruz
$hakkimizdasor->execute(array(
  'id' => 0));// gelen get değerini diziye alarak çekiyoruz.

$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);// fetch methodu ile ekrana yazdırıyoruz fetch_assoc ile diziyi döndürüyoruz.



?>
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	  		
	    		    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3179.174377488397!2d38.9995498!3d37.1723267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15345d78558794e3%3A0xa48727be53209b60!2sHarran%20%C3%9Cniversitesi%20Osmanbey%20Kamp%C3%BCs%C3%BC!5e0!3m2!1str!2str!4v1620689765768!5m2!1str!2str" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">İletişim Bilgileri</h2>
	    				<address>
	    					<p>Ödev</p>
							
							<p>TURKİYE TR</p>
							<p>Mobile: +0123456789</p>
							<p>Fax: +0123456789</p>
							<p>Email: info@odev.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Ağlar</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<?php include'footer.php' ?>