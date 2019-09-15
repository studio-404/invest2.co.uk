<?php
require_once("app/functions/l.php"); 
require_once("app/functions/strip_output.php");
require_once("app/functions/strings.php");
require_once("app/functions/breadcrups.php");
$l = new functions\l();
$string = new functions\strings(); 
echo $data['headerModule']; 
echo $data['headertop']; 
// $searchText = htmlspecialchars(strip_tags($data['searchText']));
?>

<div class="l-main">
	<div class="l-content">
		<a id="main-content"></a>
		<h1 class="page-title"><?=$l->translate("search")?></h1>

		<form class="search-form search-form" action="?" method="get" id="search-form" accept-charset="UTF-8">
			<div>
				<div class="container-inline form-wrapper" id="edit-basic">
					<div class="form-item form-type-textfield form-item-keys">
						<!-- <label for="edit-keys">Enter your keywords </label> -->
						<input type="text" id="edit-keys" name="w" value="<?=$data["word"]?>" size="40" maxlength="255" class="form-text" placeholder="<?=$l->translate("keyword")?>" autocomplete="off" style="outline: none">
					</div>
					<input type="button" id="edit-submit" name="op" value="Search" class="form-submit">
				</div>
			</div>
		</form>

		<?php
		// echo "<pre>";
		// print_r($data["search"]);
		// echo "</pre>";
		?>

		<div class="g-results">
			<ul>
				<?php 
				foreach ($data["search"] as $value):
					$url = "";
					if($value["page_type"]=="text"){
						$url = Config::WEBSITE.$_SESSION["LANG"]."/".$value["page_slug"];
					}
					if($value["page_type"]=="news"){
						$url = Config::WEBSITE.$_SESSION["LANG"]."/news/".(int)$value["page_idx"]."/".urlencode($value["page_title"]);
					}
				?>
				<li>
					<a href="<?=$url?>">
						<h3><?=$value["page_title"]?></h3>
						<p><?=$string->cut(strip_tags($value["page_text"]), 420)?></p>
						<strong><?=urldecode($url)?></strong>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>


	</div>
</div>



<?=$data['footer']?>

<script type="text/javascript">
	jQuery("body").removeClass("front");
</script>
</body>
</html>