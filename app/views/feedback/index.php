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
				<h2>დამატებითი კითხვების, შენიშვნების, რჩევების შემთხვევაში მოგვწერეთ</h2>
			</div>

			<div class="col-md-12">
				<form>
				  <div class="form-group g-error">
				    <label for="">სახელი</label>
				    <input type="text" class="form-control" />
				    <div class="error">სახელის ველი სავალდებულოა!</div>
				  </div>
				  <div class="form-group">
				    <label for="">ელ-ფოსტა</label>
				    <input type="email" class="form-control" />
				    <div class="error">ელ-ფოსტის ველი სავალდებულოა!</div>
				  </div>
				  <div class="form-group">
				    <label for="">კატეგორია</label>
				    <select class="form-control">
				      <option>კითხვა</option>
				      <option>შენიშვნა</option>
				      <option>რჩევა</option>
				      <option>სხვა</option>
				    </select>
				  </div>
				  
				  <div class="form-group">
				    <label>შეტყობინება</label>
				    <textarea class="form-control" rows="3"></textarea>
				    <div class="error">შეტყობინების ველი სავალდებულოა!</div>
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

				  <button type="submit" class="btn btn-primary mb-2">გაგზავნა</button>
				</form>

				<div class="margin-top-40"></div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>