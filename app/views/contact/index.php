<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strings.php"); 
require_once("app/functions/strip_output.php"); 
require_once("app/functions/breadcrups.php"); 
$l = new functions\l(); 
$string = new functions\strings(); 
echo $data['headerModule'];// assets
echo $data['headertop']; 

// $photo = (isset($data["pageData"]["photo"])) ? Config::WEBSITE_.$data["pageData"]["photo"] : "";
// echo "<pre>";
// print_r($data["contact"]);
// echo "</pre>";
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
                                                            <?=$data["pageData"]["title"]?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="g-contact-boxes">
                                          <div class="g-leftside">
                                                <h3><?=$l->translate("contactinfo")?></h3>
                                                <p><strong><?=$l->translate("email")?>:</strong> <span><?=strip_tags($data["contact"][1]["description"])?></span></p>
                                                <p><strong><?=$l->translate("contactnumber")?>:</strong> <span><?=strip_tags($data["contact"][0]["description"])?></span></p>
                                          </div>                      
                                          <div class="g-rightside">
                                              <form action="?" method="post">
                                                  <input type="hidden" name="lang" class="lang" id="lang" value="<?=$_SESSION["LANG"]?>" />
                                                  <div id="g-output"></div>
                                                  <input type="hidden" name="">
                                                  <label for="name"><?=$l->translate("firstname")?></label>
                                                  <input type="text" name="namelname" class="namelname" value="" />

                                                  <label for="theme"><?=$l->translate("email")?></label>
                                                  <input type="text" name="email" class="email" value="" /> 

                                                  <label for="theme"><?=$l->translate("contactnumber")?></label>
                                                  <input type="text" name="phone" class="phone" value="" />

                                                  <label for="message"><?=$l->translate("message")?></label>
                                                  <textarea name="message" class="message" id="message"></textarea>

                                                  <button type="button" class="sendEmail"><?=$l->translate("send")?></button>
                                              </form>
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