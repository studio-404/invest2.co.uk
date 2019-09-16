<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strip_output.php"); 
$l = new functions\l(); 
echo $data['headerModule']; 
echo $data['headertop']; 
?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-md-12 g-faq-page">
				<h2>ხშირად დასმული კითხვები (FAQ)</h2>
			</div>

			<div class="col-md-12" style="margin-bottom: 40px">
				
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									რა არის საჭირო ვებ გვერდზე თანხის დასაბანდებლად ?
								</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								<ol>
									<li>მობილურის ნომერი ( სმს ვერიფიკაციისთვის )</li>
									<li>ID ბარათი ან სხვა პირადობის დამადასტურებელი დოკუმენტი ( დოკუმენტი უნდა იქნას ატვირთული ვებ გვერდზე )</li>
									<li>თქვენი ფოტო პირადობის დამადასტურებელ დოკუმენტთან ერთად ( ფოტო უნდა იქნას ატვირთული ვებ გვერდზე )</li>
									<li>ანგარიშზე მინიმუმ 10.30 ლარის ქონა</li>
								</ol>
							</div>
						</div>
					</div>

				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								როგორ მუშაობს ვებ გვერდი ? როგორ და სად ხდება თანხების დაბანდება ?
							</button>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							ჰიჰიჰი
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								ყველა ნივთის საინვესტიციო პერიოდი 1 წელი იქნება ?
							</button>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							არა, ყველა ნივთს ექნება სხვადასხვა საინვესტიციო პერიოდი და მინიმალური მოგების პროცენტი რასაც განსაზღვრავს ჩვენი ვებ გვერდი.
						</div>
					</div>
				</div>

				</div>

			</div>
		</div>
	</div>	
</main>

<?=$data['footer']?>