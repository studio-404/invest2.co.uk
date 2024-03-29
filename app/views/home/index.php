<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strings.php"); 
require_once("app/functions/strip_output.php"); 
$l = new functions\l(); 
$string = new functions\strings(); 
echo $data['headerModule'];// assets
echo $data['headertop'];// assets
?>
<main>
	<div class="container">
		<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
			<div class="col-md-12 px-0">
				<h1 class="font-italic">ინვესტიცია თანამედროვე ეკონომიკის განუყოფელი ნაწილია</h1>
				<p class="lead my-3">პლათფორმა “ინვესტორი” საშუალებას აძლევს ნებისმიერ მომხმარებელს ისეთი მცირე თანხით როგორიც 10 ლარია განახორციელოს ინვესტირება ძვირადღირებულ პროდუქტებში: ოქრო, ვერცხლი, საინვესტიციო მონეტები, მიწის ნაკვეთები, ბინბი და ა.შ.</p>
				<p class="lead mb-0"><a href="/<?=$_SESSION["LANG"]?>/aboutus" class="text-white font-weight-bold">განაგრძე კითხვა...</a></p>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-12">
				<h2>ინვესტიცია</h2>
			</div>

			<div class="col-md-4">
				<div class="card">
				  <div class="img" style="background-image:url('https://www.moneymuseum.nbg.gov.ge/uploads_script/products/thumb2_a6x0mi818nra2g7.png')"></div>
				  <div class="card-body">
				    <h5 class="card-title">ოქროს საინვესტიციო მონეტა</h5>
				    <p class="card-text">
				    	<b>სრული ფასი: </b><span>2032.95 ლარი</span><br>
				    	<b>დარჩენილი დრო: </b><span>დარჩა 9 საათი 35 წუთი</span><br>
				    	<b>შეგროვილი თანხა: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 25.5%;" aria-valuenow="25.5" aria-valuemin="0" aria-valuemax="100">25.5%</div>
						</div>
				    </p>
				    <a href="#" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="img" style="background-image:url('https://www.moneymuseum.nbg.gov.ge/uploads_script/products/thumb2_9io32zuj80aqtqb.png')"></div>
				  <div class="card-body">
				    <h5 class="card-title">რაგბის თემაზე საკოლექცი...</h5>
				    <p class="card-text">
				    	<b>სრული ფასი: </b><span>75 ლარი</span><br>
				    	<b>დარჩენილი დრო: </b><span>დარჩა 9 საათი 35 წუთი</span><br>
				    	<b>შეგროვილი თანხა: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 82.5%;" aria-valuenow="82.5" aria-valuemin="0" aria-valuemax="100">82.5%</div>
						</div>
				    </p>
				    <a href="#" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="img" style="background-image:url('https://classicroom.ge/images/detailed/1/rinz1.jpg')"></div>
				  <div class="card-body">
				    <h5 class="card-title">Gold Lion Ring</h5>
				    <p class="card-text">
				    	<b>სრული ფასი: </b><span>270 ლარი</span><br>
				    	<b>დარჩენილი დრო: </b><span>დარჩა 9 საათი 35 წუთი</span><br>
				    	<b>შეგროვილი თანხა: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
						</div>
				    </p>
				    <a href="#" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<div class="img" style="background-image:url('https://static.my.ge/myhome/photos/large/0901/9566234_1.jpg')"></div>
				  
				  <div class="card-body">
				    <h5 class="card-title">კომერციული მიწის ნაკვეთი</h5>
				    <p class="card-text">
				    	<b>სრული ფასი: </b><span>24,900 ლარი</span><br>
				    	<b>დარჩენილი დრო: </b><span>დარჩა 9 საათი 35 წუთი</span><br>
				    	<b>შეგროვილი თანხა: </b><br>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
						</div>
				    </p>
				    <a href="#" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>	

			<div class="clear"></div>
			
			<div class="col-md-12">
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

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>