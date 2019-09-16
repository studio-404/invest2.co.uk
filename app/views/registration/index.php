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
				<h2>რეგისტრაცია</h2>
				<p>ნაბიჯი 1</p>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
				</div>
			</div>

			<div class="col-md-12">
				<form>
				  <div class="form-group g-error">
				    <label for="">მობილურის ნომერი</label>
				    <div class="input-group">
				    	<div class="input-group-prepend">
				          <div class="input-group-text">+995</div>
				        </div>
				        <input type="text" class="form-control" placeholder="599..." />
				    </div>				    
				    <div class="error">მობილურის ნომრის ველი სავალდებულოა!</div>
				  </div>
				  <div class="form-group">
				    <label for="">პაროლი</label>
				    <input type="password" class="form-control" />
				    <div class="error">ელ-ფოსტის ველი სავალდებულოა!</div>
				  </div>

				  <div class="row">
				  	<div class="col-md-8">
				  		<div class="form-group">
							<label for="">შეიყვანეთ დამცავი კოდი</label>
							<input type="text" class="form-control" />
							<div class="error">დამცავი ველის ველი სავალდებულოა!</div>
						</div>
				  	</div>
				  	<div class="col-md-4">
				  		<img src="/<?=$_SESSION["LANG"]?>/protect" alt="" class="protect-img" />
				  	</div>
				  </div>

				  <button type="submit" class="btn btn-primary mb-2">შემდეგი</button>
				</form>

				<div class="margin-top-40"></div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>