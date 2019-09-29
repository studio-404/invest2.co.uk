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

$_SESSION['protect_x'] = $string::random(4);
?>

<main>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 g-feedback-page">
				<h2>შეტყობინებები</h2>
			</div>

			<div class="col-md-12">
				

				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">თარიღი</th>
				      <th scope="col">შეტყობინება</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>2019-12-10</td>
				      <td>თქვენ წარმატებით გაიარეთ ვერიფიკაცია.</td>
				    </tr>
				  </tbody>
				</table>

				<div class="margin-top-40"></div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>