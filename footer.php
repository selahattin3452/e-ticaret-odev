
<footer id="footer"><!--Footer-->
	
	
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>Sayfalar</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="index">Anasayfa</a></li>
							<li><a href="urunler">Kitaplar</a></li>
							<li><a href="index">Hakkımızda</a></li>
							<li><a href="index">İletişim</a></li>
							
						</ul>
					</div>
				</div>
				
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>İLETİŞİM</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="index">Harran@edu.tr</a></li>
							<li><a href="index">TEL 0123456789</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
						
						
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
					
						<ul class="nav nav-pills nav-stacked">
						
							
						</ul>
					</div>
				</div<div class="col-sm-2">
					<div class="single-widget">
				
						<ul class="nav nav-pills nav-stacked">
						
							
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
				
						<ul class="nav nav-pills nav-stacked">
							
							
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
			
						<ul class="nav nav-pills nav-stacked">
							<img  class="pull-right" src="images/Visa.png" height="50px" width="125px" style="margin-top: 125px;">
							
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
			
						<ul class="nav nav-pills nav-stacked">
							
							
						</ul>
					</div>
				</div>
						
				

				
			</div>
		</div>
		
	</div>
	
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="pull-left">Copyright © Berk Dusunur / Muhammede S. Karatas / Selahattin Altuntas</p>
				
			</div>
		</div>
	</div>
</div>
</footer><!--/Footer-->


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="jquery.velocity.min.js"></script>
<script type="text/javascript" src="jquery.touchSwipe.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>




<script>
"use strict";
  var _slayt = document.getElementsByClassName("slayt");
  var slaytSayisi = _slayt.length;
  var slaytNo = 0;
  var i = 0;

  slaytGoster(slaytNo);

  function sonrakiSlayt() {
    slaytNo++;
    slaytGoster(slaytNo);
  }

  function oncekiSlayt() {
    slaytNo--;
    slaytGoster(slaytNo);
  }

  function slaytGoster(slaytNumarasi) {
    slaytNo = slaytNumarasi;

    if (slaytNumarasi >= slaytSayisi) slaytNo = 0;

    if (slaytNumarasi < 0) slaytNo = slaytSayisi - 1;

    for (i = 0; i < slaytSayisi; i++) {
      _slayt[i].style.display = "none";
    }

    _slayt[slaytNo].style.display = "block";

  }
</script>










</body>
</html>