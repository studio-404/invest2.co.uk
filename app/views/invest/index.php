<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strings.php"); 
require_once("app/functions/strip_output.php"); 
require_once("app/functions/timeleft.php"); 

$l = new functions\l(); 
$string = new functions\strings(); 
echo $data['headerModule'];// assets
echo $data['headertop'];// assets

// echo "<pre>";
// print_r($data['invests']);
// echo "</pre>";
?>
<main>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 g-invest-page">
				<h2>ინვესტიცია</h2>
			</div>
			
			<?php 
			foreach($data['invests'] as $item): 
			$status = "";
			if($item["additional1"]=="active"){
				$status = sprintf(
					"<span class=\"badge badge-info\">მიმდინარე</span>"
				);
			}else if($item["additional1"]=="bought"){
				$status = sprintf(
					"<span class=\"badge badge-success\">შეძენილი</span>"
				);
			}else{
				$status = sprintf(
					"<span class=\"badge badge-danger\">ჩაშლილი</span>"
				);
			}

			$percent = functions\strings::percentInvested($item["classname"], $item["investedAmount"]);
			?>
			<div class="col-md-4">
				<div class="card">
				  <div class="img" style="background-image:url('<?=$item["photo"]?>')"></div>
				  <div class="card-body">
				    <h5 class="card-title"><?=$item["title"]?> <?=$status?></h5>
				    <p class="card-text">
				    	<b>სრული ფასი: </b><span><?=$item["classname"]?> ლარი</span><br>
				    	<p class="timeleft" data-end="<?=$item["date"]?>"><?php echo functions\timeleft::index($item["date"])?></p>
				    	<b>შეგროვილი თანხა:</b><br>
						<div class="progress">
						  <div class="progress-bar" style="width: <?=$percent?>%;" aria-valuenow="<?=$percent?>" aria-valuemin="0" aria-valuemax="100"><?=$percent?>% - <?=(int)$item["investedAmount"]?> ლარი</div>
						</div>
				    </p>
				    <a href="/<?=$_SESSION["LANG"]?>/invest/read/<?=$item["idx"]?>/<?=urlencode($item["title"])?>" class="btn btn-primary">სრულად</a>
				  </div>
				</div>
			</div>
			<?php endforeach; ?>

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