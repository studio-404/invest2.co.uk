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
			
			<div class="col-md-12 g-feedback-page">
				<h2>ძიება</h2>
				<p>საკვანძო სიტყვა: <?=$data["word"]?></p>
			</div>

			<div class="col-md-12">
				<blockquote class="blockquote">
					<p class="mb-0"><a href="">ოქროს სამაჯური</a></p>
					<footer class="blockquote-footer">აუქციონი</footer>
				</blockquote>

				<blockquote class="blockquote">
					<p class="mb-0"><a href="">ოქროს სამაჯური</a></p>
					<footer class="blockquote-footer">წილები</footer>
				</blockquote>

				<blockquote class="blockquote">
					<p class="mb-0"><a href="">ოქროს სამაჯური</a></p>
					<footer class="blockquote-footer">ინვესტირება</footer>
				</blockquote>

				<div class="margin-top-40"></div>

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


</body>
</html>