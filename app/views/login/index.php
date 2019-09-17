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

$_SESSION['protect_x'] = $string::random(8);
?>

<main>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 g-feedback-page">
				<h2>სისტემაში შესვლა</h2>
			</div>

			<div class="col-md-12">
				<form action="<?=Config::WEBSITE?>" method="POST">
				  <div class="form-group g-mobile-box">
				    <label for="">მობილურის ნომერი</label>
				    <div class="input-group">
				    	<div class="input-group-prepend">
				          <div class="input-group-text">+995</div>
				        </div>
				        <input type="text" class="form-control" name="mobile" placeholder="599..." value="" />
				    </div>				    
				    <div class="error">მობილურის ნომრის ველი სავალდებულოა!</div>
				  </div>
				  <div class="form-group g-password-box">
				    <label for="">პაროლი</label>
				    <input type="password" class="form-control" name="password" value="" />
				    <div class="error">ელ-ფოსტის ველი სავალდებულოა!</div>
				  </div>

				  <div class="row">
				  	<div class="col-md-8">
				  		<div class="form-group g-code-box">
							<label for="">შეიყვანეთ დამცავი კოდი</label>
							<input type="text" class="form-control" name="code" value="" />
							<div class="error">დამცავი ველის ველი სავალდებულოა!</div>
						</div>
				  	</div>
				  	<div class="col-md-4">
				  		<?php $_SESSION["protect_hash"] = md5(sha1("s".time())); ?>
				  		<img src="/<?=$_SESSION["LANG"]?>/protect?hash=<?=$_SESSION["protect_hash"]?>" alt="" class="protect-img" />
				  	</div>
				  </div>

				  <button type="button" class="btn btn-primary mb-2 g-login-button">შესვლა</button>
				</form>

				<div class="margin-top-40"></div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>