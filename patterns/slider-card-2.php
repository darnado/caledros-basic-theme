<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Demo Slider Card 2
 * Slug: caledros-basic-theme/demo-slider-card-2
 * Categories: caledros-basic-theme/slider-cards
 */
?>
<?php
$image_url = get_template_directory_uri() . '/assets/images/patterns/office.webp';
if (!filter_var($image_url, FILTER_VALIDATE_URL)) { 
    $image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"450px","containerBackgroundImage":{"id":704,"alt":"","url":"<?php echo esc_url($image_url); ?>"},"containerBgImageFocalPoint":{"x":0.49,"y":0.61},"containerLightBackgroundGradient":"linear-gradient(180deg,rgba(0,0,0,0) 4%,rgba(0,0,0,0.81) 74%)","containerDarkBackgroundGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.81) 79%)","containerPadding":{"top":"0px","right":"30px","bottom":"60px","left":"30px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"flex-end","containerAlignItems":"flex-start","containerRowGap":"11px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-gradient" style="max-width:100%;width:100%;margin:0px;padding:0px 30px 60px 30px;justify-content:flex-end;align-items:flex-start;min-height:450px;row-gap:11px;--cbb-dark-bg-gradient:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.81) 79%), url(<?php echo esc_url($image_url); ?>);--cbb-light-bg-gradient:linear-gradient(180deg,rgba(0,0,0,0) 4%,rgba(0,0,0,0.81) 74%), url(<?php echo esc_url($image_url); ?>);background-position:49% 61%;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|paragraph-dark"}}},"typography":{"lineHeight":"1.2"}},"textColor":"paragraph-dark","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-paragraph-dark-color has-text-color has-link-color has-large-font-size" style="line-height:1.2">Reliable Support</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1.5"}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-left has-base-color has-text-color has-link-color has-small-font-size" style="line-height:1.5">Our team is here 24/7 to help you with any questions or issues that come up.</p>
<!-- /wp:paragraph -->

<!-- wp:caledros-basic-blocks/button {"buttonText":"Contact Us","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dneutral-1)","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dneutral-1)","buttonTextLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","buttonFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)","buttonPadding":{"top":"5px","right":"10px","bottom":"5px","left":"10px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:var(--wp--preset--color--highlight-1);--cbb-button-dark-color:var(--wp--preset--color--neutral-1);--cbb-button-hover-light-color:var(--wp--preset--color--highlight-1);--cbb-button-hover-dark-color:var(--wp--preset--color--neutral-1);--cbb-button-text-light-color:var(--wp--preset--color--base);--cbb-button-text-dark-color:var(--wp--preset--color--base);font-weight:400;font-style:normal;font-size:var(--wp--preset--font-size--small);border-radius:5px;margin:0px;padding:5px 10px 5px 10px" href="#">Contact Us</a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->
