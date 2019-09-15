<?php
require_once("app/functions/l.php"); 
require_once("app/functions/strip_output.php");
require_once("app/functions/breadcrups.php");
$l = new functions\l();
echo $data['headerModule']; 
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
                                                            <?php echo $l->translate("gallery")?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
          
                                       <?php echo $data["gallery"]; ?>


                                       <script type="text/javascript">
                                        jQuery('.g-gallery').magnificPopup({
                                          delegate: 'a', 
                                          type: 'image',
                                          gallery:{
                                            enabled:true
                                          }
                                        });
                                       </script>


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

<script type="text/javascript">
  

    (function ($) {
  $("body").addClass("page-node-5916").addClass("node-type-storytelling-page").addClass("section-aboutuva").addClass("setupBreakpoints-processed").removeClass("front").addClass("not-front");   
})(jQuery);
</script>

</body>
</html>