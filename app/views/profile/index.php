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
$userdata = $_SESSION[Config::SESSION_PREFIX."userdata"];
?>

<main>
	<div class="container">
		<div class="row">
			<?php 
			// echo "<pre>";
			// print_r($_SESSION[Config::SESSION_PREFIX."userdata"]);
			// echo "</pre>";
			?>
			
			<div class="col-md-12 g-feedback-page" style="margin: 40px 0px 10px 0">
				<h2>
					<span>პროფილი</span> 
					<?php if($userdata["verified"]==1): ?>
					<font color="green" title="ვერიფიცირებული">
						<i class="fa fa-check" aria-hidden="true"></i>
					</font>
					<?php else: ?>
					<font color="red" title="ვერიფიცირების მოლოდინში">
						<i class="fa fa-times" aria-hidden="true"></i>
					</font>
					<?php endif; ?>
				</h2>
			</div>

			<div class="col-md-12">
				<form action="/<?=$_SESSION["LANG"]?>/profile" method="post" id="g-profile-form">
					<div class="alert alert-warning" role="alert">
						<strong>მონაცემების განახლების შემთხვევაში თქვენს პროფილს დასჭირდება ხელახალი ვერიფიკაცია !</strong>
					</div>

					<div class="form-group">
						<label for="">მობილურის ნომერი <font color="red">*</font></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">+995</div>
							</div>
							<input type="text" class="form-control" name="mobile" value="<?=$userdata["mobile"]?>" readonly="readonly" />
						</div>
					</div>

					<div class="form-group">
						<label for="">პირადი ნომერი <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control" name="personalnumber" value="<?=$userdata["personalnumber"]?>" />
						</div>
					</div>

					<div class="form-group">
						<label for="">სახელი <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control" name="firstname" placeholder="" value="<?=$userdata["firstname"]?>" />
						</div>
					</div>

					<div class="form-group">
						<label for="">გვარი <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control" name="lastname" placeholder="" value="<?=$userdata["lastname"]?>" />
						</div>
					</div>

					<div class="form-group">
						<label for="">დაბადების თარიღი (Y-m-d) <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control datepicker" name="dob" placeholder="" value="<?=$userdata["dob"]?>" readonly="readonly" />
						</div>
					</div>

					<div class="form-group">
						<label for="">ელ-ფოსტა <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control" name="email" placeholder="" value="<?=$userdata["email"]?>" />
						</div>
					</div>

					<div class="form-group">
						<label for="">მისამართი</label>
						<div class="input-group">
							<input type="text" class="form-control" name="address" placeholder="" value="<?=$userdata["address"]?>" />
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

					<button type="button" class="btn btn-primary mb-2 g-update-profile" modal-title="შეტყობინება">
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