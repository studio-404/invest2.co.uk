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
      
      <div class="col-md-12 g-text-page">
        <h2><?=strip_tags($data["pageData"]["title"])?></h2>
      </div>      
      
      <div class="col-md-12">
        <?=strip_tags($data["pageData"]["text"], "<h1><h2><h3><h4><h5><h6><p><a><ul><li><iframe><br><strong><b>")?>

        <div class="margin-top-40"></div>
      </div>
    </div>

  </div>
</main>


<?=$data['footer']?>


</body>
</html>