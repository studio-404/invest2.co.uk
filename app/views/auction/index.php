<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strip_output.php"); 
$l = new functions\l(); 
echo $data['headerModule']; 
echo $data['headertop']; 
?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-md-12 g-auction-page">
				<h2>აუქციონი</h2>
			</div>
			
			<div class="col-md-4">
				<div class="card">
				  <div class="img" style="background-image:url('https://www.moneymuseum.nbg.gov.ge/uploads_script/products/thumb2_a6x0mi818nra2g7.png')"></div>
				  <div class="card-body">
				    <h5 class="card-title">ოქროს საინვესტიციო მონეტა</h5>
				    <p class="card-text">
				    	<b>ფასი: </b><span>2532.95 ლარი</span><br>
				    	<b>ბიდები: </b><span>5</span><br>
				    	
				    	<b>წონა უნციებში: </b><span>0.50</span><br>
				    	<b>წონა გრამებში: </b><span>15.5 გრამი</span><br>
				    	<b>დიამეტრი: </b><span>28 მმ</span><br><br>				    	
				    	<b>დასრულებამდე: </b><span>დარჩა 9 საათი 35 წუთი</span>
				    </p>
				    <a href="#" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>
			
		</div>
	</div>	
</main>

<?=$data['footer']?>