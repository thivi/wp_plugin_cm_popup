<?php
/*
Plugin Name: CM Poppup
Description: Site specific code changes for cricketmachan.com
*/
    if (isset($_COOKIE[cm_popup])){}
   else{
    wp_enqueue_style('stylecmpop',plugins_url()."/cm-popup/style.css",array(),'1.0.0','all');
    wp_enqueue_style('stylecmpopfont',"https://fonts.googleapis.com/css?family=Raleway:900",array(),'1.0.0','all');
    wp_enqueue_script('popup',plugins_url()."/cm-popup/popup.js",array(),'1.0.0',true);
    setcookie(cm_popup, 'down', time() + (86400 * 30), "/", 'cricketmachan.com', TRUE); 
    function CMpopup(){
        echo '<div class="cm-pop-pop-up">
                <div class="cm-pop-bg"> </div>
                <div class="cm-pop-box-wrap">
                    <div class="cm-pop-box">
                        
                        <img class="cm-pop-bg-img" src="'.plugins_url().'/cm-popup/bg.jpg">
                    
                        <div class="cm-pop-text"> Help us grow machan! Follow us on Facebook. </div>
                        <div class="cm-pop-close"> <i class="fa fa-window-close" aria-hidden="true"></i> </div>
                        <div class="cm-pop-buttons">
                            <div class="cm-pop-btn-wrap">
                                
                                <div class="fb-like" data-href="https://www.facebook.com/cricketmachanofficial" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
    add_action('wp_head', 'CMpopup');
}

?>