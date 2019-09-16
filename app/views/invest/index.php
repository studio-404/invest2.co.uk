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
			
			<div class="col-md-12 g-invest-page">
				<h2>ინვესტიცია</h2>
			</div>

			<div class="col-md-4">
				<div class="card">
				  <div class="img" style="background-image:url('https://www.moneymuseum.nbg.gov.ge/uploads_script/products/thumb2_a6x0mi818nra2g7.png')"></div>
				  <div class="card-body">
				    <h5 class="card-title">ოქროს საინვესტიციო მონეტა</h5>
				    <p class="card-text">
				    	<b>ფასი: </b><span>2032.95 ლარი</span><br>
				    	<b>წონა უნციებში: </b><span>0.50</span><br>
				    	<b>წონა გრამებში: </b><span>15.5 გრამი</span><br>
				    	<b>დიამეტრი: </b><span>28 მმ</span><br><br>
				    	
				    	<b>შეგროვების დრო: </b><span>დარჩა 9 საათი 35 წუთი</span><br>
				    	<b>შეგროვილი თანხა: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 25.5%;" aria-valuenow="25.5" aria-valuemin="0" aria-valuemax="100">25.5%</div>
						</div>
				    </p>
				    <a href="/<?=$_SESSION["LANG"]?>/invest/read/125/<?=urlencode("ოქროს საინვესტიციო მონეტა")?>" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="img" style="background-image:url('https://www.moneymuseum.nbg.gov.ge/uploads_script/products/thumb2_9io32zuj80aqtqb.png')"></div>
				  <div class="card-body">
				    <h5 class="card-title">რაგბის თემაზე საკოლექციო დანიშნულების მონეტა</h5>
				    <p class="card-text">
				    	<b>ფასი: </b><span>75 ლარი</span><br>
				    	<b>წონა გრამებში: </b><span>15.5 გრამი</span><br>
				    	<b>დიამეტრი: </b><span>42X28 მმ</span><br><br>
				    	
				    	<b>შეგროვების დრო: </b><span>დარჩა 9 საათი 35 წუთი</span><br>
				    	<b>შეგროვილი თანხა: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 82.5%;" aria-valuenow="82.5" aria-valuemin="0" aria-valuemax="100">82.5%</div>
						</div>
				    </p>
				    <a href="/<?=$_SESSION["LANG"]?>/invest/read/125/<?=urlencode("ოქროს საინვესტიციო მონეტა")?>" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="img" style="background-image:url('https://classicroom.ge/images/detailed/1/rinz1.jpg')"></div>
				  <div class="card-body">
				    <h5 class="card-title">Gold Lion Ring</h5>
				    <p class="card-text">
				    	<b>ფასი: </b><span>270 ლარი</span><br>
				    	<b>ზომა: </b><span>18</span><br>
				    	
				    	<b>შეგროვების დრო: </b><span>დარჩა 9 საათი 35 წუთი</span><br>
				    	<b>შეგროვილი თანხა: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
						</div>
				    </p>
				    <a href="/<?=$_SESSION["LANG"]?>/invest/read/125/<?=urlencode("ოქროს საინვესტიციო მონეტა")?>" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="img" style="background-image:url('https://static.my.ge/myhome/photos/large/0901/9566234_1.jpg')"></div>
				  
				  <div class="card-body">
				    <h5 class="card-title">კომერციული მიწის ნაკვეთი</h5>
				    <p class="card-text">
				    	<b>ფასი: </b><span>24,900 ლარი</span><br>
				    	<b>ფართი: </b><span>113 მ²</span><br>
				    	<b>ადგილმდებარეობა: </b><span>ნიკეას 8, ქუთაისი, იმერეთი</span><br>
				    	
				    	<b>შეგროვების დრო: </b><span>დარჩა 9 საათი 35 წუთი</span><br>
				    	<b>შეგროვილი თანხა: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
						</div>
				    </p>
				    <a href="/<?=$_SESSION["LANG"]?>/invest/read/125/<?=urlencode("ოქროს საინვესტიციო მონეტა")?>" class="btn btn-primary">სრულად</a>
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