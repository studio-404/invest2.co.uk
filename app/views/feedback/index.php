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
				<h2>დამატებითი კითხვების, შენიშვნების, რჩევების შემთხვევაში მოგვწერეთ</h2>
			</div>

			<div class="col-md-12">
				<form>
				  <div class="form-group">
				    <label for="">სახელი</label>
				    <input type="text" class="form-control" />
				  </div>
				  <div class="form-group">
				    <label for="">ელ-ფოსტა</label>
				    <input type="email" class="form-control" />
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
				  </div>

				  <button type="submit" class="btn btn-primary mb-2">გაგზავნა</button>
				</form>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>