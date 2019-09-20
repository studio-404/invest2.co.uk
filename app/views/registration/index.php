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

$next = functions\request::index("GET", "next");
?>

<main>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 g-feedback-page">
				<h2>რეგისტრაცია</h2>
			</div>

			<div class="col-md-12">
				<form>
					<?php if(!$next || $next==1): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
					</div>

					<div class="form-group">
						<label for="">მობილურის ნომერი</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">+995</div>
							</div>
							<input type="text" class="form-control" placeholder="599..." />
						</div>
					</div>
					
					<div class="form-group">
						<label for="">პაროლი</label>
						<input type="password" class="form-control" />
						<div class="error">ელ-ფოსტის ველი სავალდებულოა!</div>
					</div>

					<div class="form-group">
						<label for="">გაიმეორეთ პაროლი</label>
						<input type="password" class="form-control" />
						<div class="error">ელ-ფოსტის ველი სავალდებულოა!</div>
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

					<button type="submit" class="btn btn-primary mb-2">შემდეგი</button>
					<?php endif; ?>
					
					<?php if($next==2): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
					</div>
					<div class="form-group">
						<label for="">სმს კოდი</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="" />
						</div>
					</div>
					<button type="submit" class="btn btn-primary mb-2">შემდეგი</button>
					<?php endif; ?>

					<?php if($next==3): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
					</div>

					<div class="form-group">
						<label for="">პირადი ნომერი</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">სახელი</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">გვარი</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">ელ-ფოსტა</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">მისამართი</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="" />
						</div>
					</div>

					<button type="submit" class="btn btn-primary mb-2">შემდეგი</button>
					<?php endif; ?>
					
					<?php if($next==4): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
					</div>

					<div class="form-group" style="margin-bottom:0">
						<label for="customFile">პირადობის დამადასტურებელი დოკუმენტის წინა მახრე</label>
					</div>
					<div class="custom-file" style="margin-bottom:1rem">
					  <input type="file" class="custom-file-input" id="customFile">
					  <label class="custom-file-label" for="customFile">აირჩიეთ ფაილი</label>
					</div>

					<div class="form-group" style="margin-bottom:0">
						<label for="customFile">პირადობის დამადასტურებელი დოკუმენტის უკანა მახრე</label>
					</div>
					<div class="custom-file" style="margin-bottom:1rem">
					  <input type="file" class="custom-file-input" id="customFile">
					  <label class="custom-file-label" for="customFile">აირჩიეთ ფაილი</label>
					</div>
					
					<div class="form-group" style="margin-bottom:0">
						<label for="customFile">თქვენი ფოტოსურათი პირადობის დამადასტურებელ დოკუმენტთან ერთად</label>
					</div>
					<div class="custom-file" style="margin-bottom:1rem">
					  <input type="file" class="custom-file-input" id="customFile">
					  <label class="custom-file-label" for="customFile">აირჩიეთ ფაილი</label>
					</div>

					<button type="submit" class="btn btn-primary mb-2">შემდეგი</button>
					<?php endif; ?>


					<?php if($next==5): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
					</div>

					<div class="alert alert-success" role="alert">
					  თქვენ წარმატებით გაიარეთ რეგისტრაცია !
					</div>

					<button type="button" class="btn btn-primary mb-2">სისტემაში შესვლა</button>
					<?php endif; ?>



				</form>

				<div class="margin-top-40"></div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>