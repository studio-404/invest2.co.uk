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
				    	<b>დასრულებამდე: </b><span>დარჩა 9 საათი 35 წუთი</span>
				    </p>
				    <a href="/<?=$_SESSION["LANG"]?>/auction/read/125/<?=urlencode("ოქროს საინვესტიციო მონეტა")?>" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

			<div class="col-md-12">
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
				    <li class="page-item"><a class="page-link" href="#">უკან</a></li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item"><a class="page-link" href="#">წინ</a></li>
				  </ul>
				</nav>
			</div>
			
		</div>
	</div>	
</main>

<?=$data['footer']?>