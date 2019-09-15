<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strings.php"); 
require_once("app/functions/strip_output.php"); 
require_once("app/functions/pagination.php");
require_once("app/functions/breadcrups.php"); 
$l = new functions\l(); 
$pagination = new functions\pagination();
$string = new functions\strings(); 
echo $data['headerModule'];// assets
echo $data['headertop']; 
?>


<div class="site-tabs"></div>

<div class="l-main">
    <div class="l-content">
        <a id="main-content"></a>
        <article role="article" class="node node--storytelling-page node--promoted node--full node--storytelling-page--full">
            <div class="node__content">
                <div class="dp-composite-field-container clearfix">
                    <div class="field field--name-field-story-blocks field--type-dp-composite-field field--label-hidden">
                        <div class="field__items">
                            <div class="field__item odd">
                                <div class="entity entity-dp-composite-field-item dp-composite-field-item-in-the-news clearfix">
                                    <div class="content" style="background: none">

                                        <div class="field field--name-field-title field--type-text field--label-hidden">
                                            <div class="field__items">
                                                <div class="field__item even">
                                                    <section id="in-the-news" class="anchor">
                                                        <a name="in-the-news" title="In The News"></a>
                                                    </section>
                                                    <div class="field field--name-field-title field--type-text field--label-hidden">
                                                        <div class="field__items">
                                                            <div class="field__item even BPGNinoMtavruli">
                                                            <?=(isset($data["newsId"])) ? $data["news_inside"]["title"] : $l->translate("news")?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="field field--name-field-url field--type-link-field field--label-hidden">
                                            <div class="field__items">
                                                
                                                 
                                                <div class="field__item even">
                                                    <?php
                                                    if(isset($data["newsId"])){
                                                        echo strip_tags($data["news_inside"]["description"], "<h1><h2><h3><h4><h5><h6><p><a><ul><li><iframe><br><strong><b>");

                                                        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                        
                                                        echo '<div style="clear:both; margin-top: 40px;"></div>';
                                                        echo '<div class="fb-share-button" 
                                                        data-href="'.$actual_link.'" 
                                                        data-layout="button_count">
                                                      </div>';
                                                    }else{
                                                        ?>

                                                        <div class="field-rss-feed">
                                                            <ul>
                                                                <?=$data["news"]["html"]?> 
                                                            </ul>
                                                        </div>

                                                        <?php
                                                    }
                                                    ?>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>



<?=$data['footer']?>


</body>
</html>