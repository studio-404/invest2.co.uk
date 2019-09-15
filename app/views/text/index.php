<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strings.php"); 
require_once("app/functions/strip_output.php"); 
// require_once("app/functions/breadcrups.php"); 
$l = new functions\l(); 
$string = new functions\strings(); 
echo $data['headerModule'];// assets
echo $data['headertop'];// assets
?>
<div class="site-tabs"></div>

<div class="l-main">
    <div class="l-content" role="main">
      <a id="main-content"></a>
      <h1 class="page-title"><?=$data["pageData"]["title"]?></h1>
      <article role="article" class="node node--interior-content node--full node--interior-content--full">
        <div class="node__content">


          <!-- START -->
          <?php 
          // echo "<pre>";
          // print_r();
          // echo "</pre>";

          if(count($data["sub_navigation"])):
          ?>
          <div class="field-collection-container clearfix">
            <div class="field field--name-field-navigation-listing field--type-field-collection field--label-hidden">
              <div class="field__items">
                
                <?php 
                $x = 1;
                foreach($data["sub_navigation"] as $nav): 
                $class = (($x%2)==0) ? "even" : "odd";
                ?>
                <div class="field__item <?=$class?>">
                  <div class="field-collection-view clearfix view-mode-full">
                    <div class="entity entity-field-collection-item field-collection-item-field-navigation-listing clearfix">
                      <div class="content">
                        <div class="nav-item">
                          <div class="field field--name-field-title field--type-text field--label-hidden">
                            <div class="field__items">
                              <div class="field__item even">
                                <a href="<?=Config::WEBSITE.$_SESSION["LANG"]?>/<?=$nav["slug"]?>" class="nav-item-title"><?=$nav["title"]?></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="nav-item-rollover">
                          <div class="inner">
                            <div class="field field--name-field-title field--type-text field--label-hidden">
                              <div class="field__items">
                                <div class="field__item even">
                                  <a href="<?=Config::WEBSITE.$_SESSION["LANG"]?>/<?=$nav["slug"]?>" class="nav-item-title"><?=$nav["title"]?></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>

              </div>
            </div>
          </div>
          <?php 
          endif;
          ?>
          <!-- END -->




          
          <div class="field field--name-body field--type-text-with-summary field--label-hidden">
            <div class="field__items">
              <div class="field__item even" style="text-align: left; margin-bottom:40px;">
                

                <?=strip_tags($data["pageData"]["text"], "<h1><h2><h3><h4><h5><h6><p><a><ul><li><iframe><br><strong><b>")?>               


                <?php 
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                        
                echo '<div style="clear:both; margin-top: 40px;"></div>';
                echo '<div class="fb-share-button" 
                data-href="'.$actual_link.'" 
                data-layout="button_count">
              </div>';
                ?>

              </div>
            </div>
          </div>

        </div>
      </article>
    </div>
  </div>

<?=$data['footer']?>

<script type="text/javascript">
  (function ($) {
  $("body").addClass("node-type-interior-content").addClass("node-type-navigation-landing");   
})(jQuery);
</script>
</body>
</html>