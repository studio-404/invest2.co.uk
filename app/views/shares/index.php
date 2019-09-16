<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strings.php"); 
require_once("app/functions/strip_output.php"); 
// require_once("app/functions/menu_data.php"); 
// $menu_data = new functions\menu_data(); 
$l = new functions\l(); 
$string = new functions\strings(); 
echo $data['headerModule'];// assets
echo $data['headertop'];// assets
?>
<main>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 g-shares-page">
				<h2>წილები</h2>
			</div>

			<div class="col-md-4">
				<div class="card">
				  <div class="img" style="background-image:url('https://www.moneymuseum.nbg.gov.ge/uploads_script/products/thumb2_a6x0mi818nra2g7.png')"></div>
				  <div class="card-body">
				    <h5 class="card-title">ოქროს საინვესტიციო მონეტა</h5>
				    <p class="card-text">
				    	<b>ფასი: </b><span>16 ლარი</span><br>
				    	<b>წონა უნციებში: </b><span>0.50</span><br>
				    	<b>წონა გრამებში: </b><span>15.5 გრამი</span><br>
				    	<b>დიამეტრი: </b><span>28 მმ</span><br><br>
				    	
				    	<b>მომხმარებელი: </b><span>mr_root</span><br><br>
				    	<b>წილი: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 0.5%;" aria-valuenow="0.5" aria-valuemin="0" aria-valuemax="100">0.5%</div>
						</div>
				    </p>
				    <a href="#" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>