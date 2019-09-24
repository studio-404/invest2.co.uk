<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strings.php"); 
require_once("app/functions/strip_output.php"); 
require_once("app/functions/request.php"); 
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
			<div class="col-md-12 g-feedback-page" style="margin: 40px 0px 10px 0">
				<h2>
					<span>პაროლის შეცვლა</span> 
				</h2>
			</div>

			<div class="col-md-12">
				<form action="/<?=$_SESSION["LANG"]?>/profile" method="post" id="g-profile-password-form">

					<div class="form-group">
						<label for="">ძველი პაროლი <font color="red">*</font></label>
						<div class="input-group">
							<input type="password" class="form-control" name="oldpassword" value="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">ახალი პაროლი <font color="red">*</font></label>
						<div class="input-group">
							<input type="password" class="form-control" name="newpassword" value="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">პაროლის დადასტურება <font color="red">*</font></label>
						<div class="input-group">
							<input type="password" class="form-control" name="comfirmpassword" value="" />
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

					<button type="button" class="btn btn-primary mb-2 g-update-profile-password" modal-title="შეტყობინება">
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
						<span>განახლება</span>
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