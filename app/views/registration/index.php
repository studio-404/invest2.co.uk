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
$token = functions\request::index("GET", "token");
?>

<main>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 g-feedback-page" style="margin: 40px 0px 10px 0">
				<h2>რეგისტრაცია</h2>
			</div>

			<div class="col-md-12">
				<form action="/<?=$_SESSION["LANG"]?>/registration?next=<?=$next?>&token=<?=$token?>" method="post" id="g-registration-form" enctype="multipart/form-data">
					<?php if(!$next || $next==1): ?>
					<div class="alert alert-info" role="alert">
						<strong>რეგისტრაციისთვის აუცილებელია გქონდეთ:</strong>
						<ul>
							<li>მობილურის ნომერი. ( ჯეოსელი/მაგთი/ბილაინი )</li>
							<li>ელ-ფოსტა.</li>
							<li>ID ბარათი ან სხვა პირადობის დამადასტურებელი დოკუმენტი.</li>
							<li>თქვენი ფოტო პირადობის დამადასტურებელ დოკუმენტთან ერთად.</li>
						</ul>
					</div>

					<div class="form-group">
						<label for="">მობილურის ნომერი <font color="red">*</font></label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">+995</div>
							</div>
							<input type="text" class="form-control" name="mobile" placeholder="599..." value="" />
						</div>
					</div>
					
					<div class="form-group">
						<label for="">პაროლი <font color="red">*</font></label>
						<input type="password" class="form-control" name="password" value="" />
					</div>

					<div class="form-group">
						<label for="">გაიმეორეთ პაროლი <font color="red">*</font></label>
						<input type="password" class="form-control" name="password_confirm" value="" />
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

					<button type="button" class="btn btn-primary mb-2 g-reg-stepone" modal-title="შეტყობინება">
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
						<span>შემდეგი</span>
					</button>
					<?php endif; ?>
					
					<?php if($next==2 && $token!=""): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
					</div>

					<div class="alert alert-info" role="alert">
						<strong>გთხოვთ შეიყვანოთ კოდი რომელიც მიიღეთ სმს-ით.</strong>
					</div>

					<div class="form-group">
						<label for="">სმს კოდი <font color="red">*</font></label>
						<div class="input-group">
							<input type="hidden" name="token" value="<?=$token?>" />
							<input type="text" class="form-control" name="sms_code" placeholder="" />
						</div>
					</div>
					<button type="button" class="btn btn-primary mb-2 g-reg-steptwo" modal-title="შეტყობინება">
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
						<span>შემდეგი</span>
					</button>
					<?php endif; ?>

					<?php if($next==3): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
					</div>

					<div class="alert alert-info" role="alert">
						<strong>შეავსეთ პირადი ინფორმაცია</strong>
					</div>

					<div class="form-group">
						<label for="">პირადი ნომერი <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control" name="personalnumber" placeholder="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">სახელი <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control" name="firstname" placeholder="" value="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">გვარი <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control" name="lastname" placeholder="" value="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">დაბადების თარიღი (Y-m-d) <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control datepicker" name="dob" placeholder="" value="<?=date("Y-m-d")?>" readonly="readonly" />
						</div>
					</div>

					<div class="form-group">
						<label for="">ელ-ფოსტა <font color="red">*</font></label>
						<div class="input-group">
							<input type="text" class="form-control" name="email" placeholder="" value="" />
						</div>
					</div>

					<div class="form-group">
						<label for="">მისამართი</label>
						<div class="input-group">
							<input type="text" class="form-control" name="address" placeholder="" value="" />
							<input type="hidden" name="token" value="<?=$token?>" />
						</div>
					</div>

					<button type="button" class="btn btn-primary mb-2 g-reg-stepthree" modal-title="შეტყობინება">
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
						<span>შემდეგი</span>
					</button>
					<?php endif; ?>
					
					<?php if($next==4): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
					</div>

					<div class="alert alert-info" role="alert">
						<strong>ვერიფიკაციის გასავლელად გთხოვთ ატვირთოთ დოკუმენტები !</strong>

						<ul>
							<li>ფოტოს ფორმატი: jpg, png</li>
							<li>ფოტოს მაქსიმალური ზომა: 5MB</li>
							<li>ატვირთულ ფოტოში გარკვევით უნდა ჩანდეს ინფორმაცია.</li>
						</ul>

					</div>

					<div class="form-group" style="margin-bottom:0">
						<label for="customFile">პირადობის დამადასტურებელი დოკუმენტის წინა მახრე <font color="red">*</font></label>
					</div>
					<div class="custom-file" style="margin-bottom:1rem">
					  <input type="file" class="custom-file-input" id="customFile" name="id_pic_front" value="" />
					  <label class="custom-file-label" for="customFile">აირჩიეთ ფაილი</label>
					</div>

					<div class="form-group" style="margin-bottom:0">
						<label for="customFile2">პირადობის დამადასტურებელი დოკუმენტის უკანა მახრე <font color="red">*</font></label>
					</div>
					<div class="custom-file" style="margin-bottom:1rem">
					  <input type="file" class="custom-file-input" id="customFile2" name="id_pic_back" value="" />
					  <label class="custom-file-label" for="customFile2">აირჩიეთ ფაილი</label>
					</div>
					
					<div class="form-group" style="margin-bottom:0">
						<label for="customFile3">თქვენი ფოტოსურათი პირადობის დამადასტურებელ დოკუმენტთან ერთად <font color="red">*</font></label>
					</div>
					<div class="custom-file" style="margin-bottom:1rem">
					  <input type="file" class="custom-file-input" id="customFile3" name="id_pic_with_owner" value="" />
					  <label class="custom-file-label" for="customFile3">აირჩიეთ ფაილი</label>
					</div>

					<button type="button" class="btn btn-primary mb-2 g-register-final">რეგისტრაცია</button>
					<?php endif; ?>

					<script type="text/javascript">
						var errors = {
							message:"შეტყობინება",
							fileType:"მოხდა შეცდომა, ფაილის ტიპი არასწორია !",
							fileSize:"ფაილის ზომა არ უნდა აღემატებოდეს 5MB !"
						};
					</script>


					<?php if($next==5): ?>
					<div class="progress" style="margin: 0 0 40px 0">
						<div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
					</div>

					<div class="alert alert-success" role="alert">
					  თქვენ წარმატებით გაიარეთ რეგისტრაცია !
					</div><br />

					<button type="button" class="btn btn-primary mb-2" onclick="location.href='/<?=$_SESSION["LANG"]?>/login'">სისტემაში შესვლა</button>
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