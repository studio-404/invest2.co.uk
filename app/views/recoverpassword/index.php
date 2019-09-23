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
				<h2>პაროლის აღდგენა</h2>
			</div>

			<div class="col-md-12">
				<form action="" method="post" id="g-form-recover">
				  <div class="form-group">
				    <label for="">მობილურის ნომერი <font color="red">*</font></label>
				    <div class="input-group">
				    	<div class="input-group-prepend">
				          <div class="input-group-text">+995</div>
				        </div>
				        <input type="text" class="form-control" name="mobile" placeholder="599..." />
				    </div>
				  </div>
				  
				   <div class="row">
				  	<div class="col-md-8">
				  		<div class="form-group g-code-box">
							<label for="">შეიყვანეთ დამცავი კოდი <font color="red">*</font></label>
							<input type="text" class="form-control" name="code" value="" />
						</div>
				  	</div>
				  	<div class="col-md-2">
				  		<?php $_SESSION["protect_hash"] = md5(sha1("l".time())); ?>
				  		<img src="/<?=$_SESSION["LANG"]?>/protect?hash=<?=$_SESSION["protect_hash"]?>" alt="" class="protect-img" />
				  		<a href="javascript:void(0)" class="g-realod-protect" data-img="protect-img"><i class="fa fa-refresh"></i></a>
				  	</div>
				  </div>

				 <button type="button" class="btn btn-primary mb-2 g-recover-button" modal-title="შეტყობინება">
				  	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>შესვლა</span>
				  </button>
				</form>

				<div class="margin-top-40"></div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>