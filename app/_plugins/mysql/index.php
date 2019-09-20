<?php
require_once 'app/functions/url.php';
$url = new functions\url();
$getUrl = explode("/", $url->getUrl());
?>

<div class="row" style="display: block;">
	
	<div class="col s3">
		<div class="collection moduleList" style="margin-top:0px;">
			<?php
			$Database = new Database("mysqlcommand", array(
				"method"=>"shows"
			));
			
			foreach ($Database->getter() as $value):
				$active = (isset($getUrl[4]) && $getUrl[4]==$value['Tables_in_buu']) ? " active" : "";
			?>
				<a href="/<?=$_SESSION["LANG"]?>/dashboard/plugins/mysql/<?=$value['Tables_in_buu']?>" class="collection-item<?=$active?>"><?=$value['Tables_in_buu']?></a>
			<?php
			endforeach;
			?>
		</div>
	</div>
	
	<div class="col s9">
		<a href="javascript:void(0)" onclick="sql_command('<?=$getUrl[4]?>', 'ge')" class="waves-effect waves-light btn margin-bottom-20"><i class="material-icons left">note_add</i>SQL ბრზანება</a>
		<div style="clear:both;"></div>
		<?php
		$collumns = new Database("mysqlcommand", array(
			"method"=>"show_columns",
			"column"=>$getUrl[4]
		));
		$getter = $collumns->getter();

		// echo "<pre>";
		// print_r($getter);
		// echo "</pre>";
		?>
		<table class="highlight">
			<thead>
				<tr>
					<th data-field="id" width="50">სვეტები</th>
					<th data-field="id" width="50">ტიპი</th>
				</tr>
			</thead>


			<tbody>
				<?php foreach ($getter as $v) :	?>
				<tr>
					<td><?=$v['Field']?></td>
					<td><?=$v['Type']?></td>
				</tr>
				<?php endforeach; ?>				
			</tbody>
		</table>
	</div>


</div>