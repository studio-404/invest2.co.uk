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
				    	<b>მფლობელი: </b><span>mr_root</span><br><br>
				    	<b>წილი: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 0.5%;" aria-valuenow="0.5" aria-valuemin="0" aria-valuemax="100">0.5%</div>
						</div>
				    </p>
				    <a href="/<?=$_SESSION["LANG"]?>/shares/read/125/<?=urlencode("ოქროს საინვესტიციო მონეტა 15%")?>" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

			<div class="col-md-12">
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
				    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item"><a class="page-link" href="#">Next</a></li>
				  </ul>
				</nav>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>