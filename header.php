<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amatech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <div class="blur">
        <div class="popup_form">
            <div class="container">
                <div class="close_btn"></div>
                <div class="contact_logo">
                    <div class="contact_logo_inner">
<!--                        <img src="http://www.amatech.com.ua/wp-content/uploads/2024/02/popup_logo.png" alt="">-->
                        <img src="http://www.amatech.com.ua/wp-content/uploads/2024/03/popup_logo_svg.svg" alt="">
                    </div>
                    <div class="contact_logo_slogan">
                        Let’s make your business great
                    </div>
                </div>
                <div class="contact_form_inner">
                    <div class="contact_form_sub_title">
                        How can we help you?
                    </div>
                    <div class="contact_form_form">
                        <div class="contact_form_form_right">
                            <?php echo do_shortcode('[contact-form-7 id="d8e2c0f" title="Контактна форма 1 "]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup_send_mail_inner" class="popup_send_mail_inner">
            <div class="popup_send_sub_wrapper">
                <div class="img_inner">
                    <img src="http://www.amatech.com.ua/wp-content/uploads/2024/03/popup_logo_svg.svg" alt="">
                </div>
                <div class="popup_send_text">
                    Message sent!
                </div>
                <div class="popup_send_close_btn">
                            <span>
                                Ok
                            </span>
                </div>
            </div>
        </div>
    </div>
</head>
<script type="text/javascript">
_linkedin_partner_id = "6823017";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=6823017&fmt=gif" />
</noscript>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
