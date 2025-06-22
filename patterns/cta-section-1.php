<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Call to Action 1
 * Slug: caledros-basic-theme/call-to-action-1
 * Categories: caledros-basic-theme/call-to-action
 */
?>

<?php
$image_url = get_template_directory_uri() . '/assets/images/patterns/acuarium.webp';
if (!filter_var($image_url, FILTER_VALIDATE_URL)) { 
    $image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMinHeight":"300px","containerLightBackgroundColor":"#00000066","containerDarkBackgroundColor":"#00000066","containerBackgroundImage":{"id":1128,"alt":"","url":"<?php echo esc_url($image_url); ?>"},"containerBgImageFocalPoint":{"x":0.47,"y":0.35},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"40px"},"containerMargin":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentMarginsEnabled":true},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"metadata":{"categories":["caledros-basic-theme/call-to-action"],"patternName":"caledros-basic-theme/call-to-action-1","name":"Call to Action 1"}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px 0px 0px 0px;padding:0px;--cbb-light-bg-color:#00000066;--cbb-dark-bg-color:#00000066;min-height:300px;background-image:url(<?php echo esc_url($image_url); ?>);background-position:47% 35%;border-radius:40px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"40px 0px 0px 40px"},"containerPadding":{"top":"30px","right":"30px","bottom":"0px","left":"30px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"flex-start","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:30px 30px 0px 30px;justify-content:center;align-items:flex-start;min-height:auto;row-gap:20px;border-radius:40px 0px 0px 40px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-large-font-size" style="line-height:1.2">Ready to Build Your Next Site?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"inter"} -->
<p class="has-base-color has-text-color has-link-color has-inter-font-family">Get started with Caledros Basic Theme and launch faster with fewer roadblocks.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"50%"},"containerPadding":{"top":"30px","right":"0px","bottom":"30px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:30px 0px 30px 0px;justify-content:center;align-items:center;min-height:auto;border-radius:50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/button {"buttonText":"Learn more \u003e","buttonLightColor":"#00000000","buttonDarkColor":"#00000000","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonTextLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonFontFamily":"inter","buttonFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)","buttonLetterSpacing":"2px","buttonBorder":{"style":"solid","width":"1px","lightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","darkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","radius":"5px"},"buttonPadding":{"top":"5px","right":"15px","bottom":"5px","left":"15px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:#00000000;--cbb-button-dark-color:#00000000;--cbb-button-hover-light-color:var(--wp--preset--color--contrast);--cbb-button-hover-dark-color:var(--wp--preset--color--contrast);--cbb-button-text-light-color:var(--wp--preset--color--contrast-dark);--cbb-button-text-dark-color:var(--wp--preset--color--contrast-dark);font-family:var(--wp--preset--font-family--inter);font-weight:400;font-style:normal;font-size:var(--wp--preset--font-size--small);border-style:solid;border-width:1px;--cbb-button-light-border-color:var(--wp--preset--color--contrast-dark);--cbb-button-dark-border-color:var(--wp--preset--color--contrast-dark);border-radius:5px;letter-spacing:2px;margin:0px;padding:5px 15px 5px 15px" href="#">Learn more ></a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->