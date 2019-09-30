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

$page = functions\request::index("GET", "page");
$_SESSION['protect_x'] = $string::random(4);
?>

<main>
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 g-feedback-page" style="margin: 40px 0px 10px 0">
				<h2>ბალანსი</h2>
			</div>
			
			<!-- <span class="badge badge-primary badge-pill">15.58 ლარი</span> -->

			<div class="col-md-4">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">ჩემი ანგარიშები</h5>
				    <p class="card-text">
				    	მთავარი ანგარიში: <strong><font color="green">158.20 <b style="font-family:'LariSymbolV2';">L</b></font></strong><br />
						დროებითი ანგარიში: <strong><font color="red">15.58 $</font></strong><br />
						ინვესტირებული: <strong><font color="grey">15 000.00 <b style="font-family:'LariSymbolV2';">L</b></font></strong><br />	
						გატანის პროცესში: <strong><font color="blank">150.00 <b style="font-family:'LariSymbolV2';">L</b></font></strong>						
				    </p>
				  </div>
				</div>

				<div class="list-group" style="margin: 40px 0;">
					<a href="/<?=$_SESSION["LANG"]?>/balance/?page=deposit" class="list-group-item list-group-item-action<?=(!$page || $page=="deposit") ? ' active': ''?>">
						ბალანსის შევსება
					</a>
					<a href="/<?=$_SESSION["LANG"]?>/balance/?page=withdrow" class="list-group-item list-group-item-action<?=($page=="withdrow") ? ' active': ''?>">
						თანხის გატანა
					</a>
					<a href="/<?=$_SESSION["LANG"]?>/balance/?page=history" class="list-group-item list-group-item-action<?=($page=="history") ? ' active': ''?>">
						ტრანზაქციების ისტორია
					</a>
				</div>
			</div>

			<div class="col-md-8">
				<?php 
				switch ($page) {
					case 'history':
				?>
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">თარიღი</th>
					      <th scope="col">IP მისამართი</th>
					      <th scope="col">ოპერაცია</th>
					      <th scope="col">თანხა</th>
					      <th scope="col">სტატუსი</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th>2500</th>
					      <th>2019-05-20 12:35:25</th>
					      <td>94.240.245.46</td>
					      <td>ინვესტირება</td>
					      <td>1$</td>
					      <td>დასრულებული</td>
					    </tr>

					    <tr>
					      <th>2501</th>
					      <th>2019-05-20 12:35:25</th>
					      <td>94.240.245.46</td>
					      <td>თანხის შემოტანა</td>
					      <td>10$</td>
					      <td>მიმდინარე</td>
					    </tr>

					    <tr>
					      <th>2680</th>
					      <th>2019-05-20 23:35:04</th>
					      <td>94.240.245.46</td>
					      <td>თანხის გატანა</td>
					      <td>132$</td>
					      <td>დასრულებული</td>
					    </tr>
					    
					  </tbody>
					</table>

					<div class="col-md-12">
						<nav aria-label="Page navigation example">
						  <ul class="pagination">
						    <li class="page-item"><a class="page-link" href="#">უკან</a></li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item"><a class="page-link" href="#">წინ</a></li>
						  </ul>
						</nav>
					</div>
				<?php
						break;
					case 'withdrow':
				?>
					<form action="/<?=$_SESSION["LANG"]?>/balance" method="post" id="g-balance-form">
						<div class="alert alert-warning" role="alert">
							<strong>თანხის გატანა:</strong>
							<ul>
								<li>თანხის გატანა ხორციელდება <strong><font color="green">მთავარი ანგარიში</font></strong>-დან თქვენს საბანკო ანგარიშზე 3 სამუშაო დღის განმავლობაში</li>
								<li>გატანის საკომისიო შეადგენს <?=Config::CIMMITION_WITHDROW?>% ( კომპანია იტოვებს უფლებას სამომავლოდ შეცვალოს არსებული საკომისიო. )</li>
							</ul>
						</div>

						<div class="form-group">
							<label for="">საბანკო ანგარიში <font color="red">*</font></label>
							<div class="input-group">
								<input type="text" class="form-control" name="amount" placeholder="GE**TB****************" value="" />
							</div>
							<strong style="font-size: 11px;"><font color="red">* მიუთითეთ თქვენი საბანკო ანგარიში !</font></strong>
						</div>

						<div class="form-group">
							<label for="">თანხა <font color="red">*</font></label>
							<div class="input-group">
								<input type="number" class="form-control" name="amount" placeholder="1" value="1" />
							</div>
						</div>

						<div class="row">
						  	<div class="col-md-8">
						  		<div class="form-group g-code-box">
									<label for="">შეიყვანეთ დამცავი კოდი <font color="red">*</font></label>
									<input type="text" class="form-control" name="code" value="" />
								</div>
						  	</div>
						  	<div class="col-md-4">
						  		<?php $_SESSION["protect_hash"] = md5(sha1("l".time())); ?>
						  		<img src="/<?=$_SESSION["LANG"]?>/protect?hash=<?=$_SESSION["protect_hash"]?>" alt="" class="protect-img" />
						  		<a href="javascript:void(0)" class="g-realod-protect" data-img="protect-img"><i class="fa fa-refresh"></i></a>
						  	</div>
						</div>

						<button type="button" class="btn btn-primary mb-2 g-deposit" modal-title="შეტყობინება">
							<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
							<span>გატანა</span>
						</button>
					</form>
				<?php
						break;
					default:
						?>
						<!-- 
							https://www.paypal.com/cgi-bin/webscr
							https://www.sandbox.paypal.com/us/home -->
						<form action="/<?=$_SESSION["LANG"]?>/paynow" method="post" id="paypal_checkout">
							<div class="alert alert-warning" role="alert">
								<strong>ბალანსის შევსება:</strong>
								<ul>
									<li>ბალანსის შევსება ამ ეტაბზე ხორციელდება Paypal-ით, შევსებისას თანხა დაგიჯდებათ <strong><font color="red">დროებით ანგარიშზე</font></strong>, 3 სამუშაო დღის შემდეგ კი გადავა <strong><font color="green">მთავარ ანგარიშზე</font></strong>. ( ვინაიდან Paypal-ით ბალანსის შევსება მხოლოდ დოლარში ხდება, დოლარის კურსი კი მუდმივად იცვლება, თანხის კომპანიის საბანკო ანგარიშზე გადმორიცხვისა და ლარში დაკონვერტირებისას კომპანიამ შესაძლოა მნიშვნელოვანი ზარალი განიცადოს. )</li>
									<li>დოლარის დაკონვერტირება მოხდება თიბისი ბანკის კურსის მიხედვით</li>
									<li>კომპანია ბალანსის შევსებისას იღებს საკომისიოს <strong><?=Config::CIMMITION?>%</strong> ( კომპანია იტოვებს უფლებას სამომავლოდ შეცვალოს არსებული საკომისიო. )</li>
								</ul>
							</div>

							<div class="alert alert-info" role="alert">
								<strong>მაგალითის განხილვა:</strong>
								<ul>
									<li>მაგ.: ბალანსი შეავსეთ 100$-ით და შემოტანის დღეს თიბისი ბანკში დოლარის კურსი შეადგენს 2.85-ს. თქვენ <strong><font color="red">დროებით ანგარიშზე</font></strong> დაგიჯდებათ 285 ლარი. ( მინუს საკომისიო )</li>
									<li>3 სამუშაო დღის განმავლობაში თუ კურსი დაეცა 2.30-ზე, ხელახლა მოხდება გადაანგარიშება და თქვენ <strong><font color="green">მთავარ ანგარიშზე</font></strong> დაგიჯდებათ 230 ლარი. ( მინუს საკომისიო )</li>
									<li>თუ კურსი აიწევს და გახდება 2.98, <strong><font color="green">მთავარ ანგარიშზე</font></strong> დაგიჯდებათ 298 ლარი ( მინუს საკომისიო )</li>
									<li><strong><font color="green">მთავარ ანგარიშზე</font></strong> თანხის დასმის შემდეგ შეგიძლიათ განახორციელოთ ინვესტიცია.</li>
								</ul>
							</div>

							<div class="form-group">
								<label for="">თანხა <font color="red">*</font></label>
								<div class="input-group">
									<input type="number" class="form-control" name="amount" placeholder="1" value="1" min="1" />
								</div>
							</div>

							<div class="row">
							  	<div class="col-md-8">
							  		<div class="form-group g-code-box">
										<label for="">შეიყვანეთ დამცავი კოდი <font color="red">*</font></label>
										<input type="text" class="form-control" name="code" value="" />
									</div>
							  	</div>
							  	<div class="col-md-4">
							  		<?php $_SESSION["protect_hash"] = md5(sha1("l".time())); ?>
							  		<img src="/<?=$_SESSION["LANG"]?>/protect?hash=<?=$_SESSION["protect_hash"]?>" alt="" class="protect-img" />
							  		<a href="javascript:void(0)" class="g-realod-protect" data-img="protect-img"><i class="fa fa-refresh"></i></a>
							  	</div>
							</div>

							<button type="button" class="btn btn-primary mb-2 g-deposit2" modal-title="შეტყობინება">
								<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								<span>შევსება</span>
							</button>
						</form>
						<?php
				}
				?>

				<div class="margin-top-40"></div>
			</div>

		</div>

	</div>
</main>


<?=$data['footer']?>


</body>
</html>