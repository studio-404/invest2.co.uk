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
				<h2>მადლობა</h2>
			</div>

			<div class="col-md-12">
				
				<div class="alert alert-success">
					<strong>თანხა წარმატებით დაჯდა <font color="red">დროებით ანგარიშზე</font> !</strong>

					<ul>
						<li>3 სამუშაო დღის განმავლობაში გადავა <font color="green">მთავარ ანგარიშზე</font>, რის შემდეგაც შეძლებთ ინვესტირებას.</li>
						<li><font color="green">მთავარ ანგარიშზე</font> გადასვლა გეცნობებათ SMS-ით.</li>
					</ul>
				</div>

				<div class="margin-top-40"></div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>