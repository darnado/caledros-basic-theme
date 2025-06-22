<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Hero Section 1
 * Slug: caledros-basic-theme/hero-section-1
 * Categories: caledros-basic-theme/hero-sections
 */
?>

<?php
$hero_image_url = get_template_directory_uri() . '/assets/images/patterns/hero1.webp';
if (!filter_var($hero_image_url, FILTER_VALIDATE_URL)) { 
    $hero_image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMinHeight":"500px","containerLightBackgroundColor":"#ffffff2b","containerDarkBackgroundColor":"#00000061","containerBackgroundImage":{"id":202,"alt":"","url":"<?php echo esc_url($hero_image_url); ?>"},"containerPadding":{"top":"0px","right":"50px","bottom":"0px","left":"50px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px","metadata":{"categories":["caledros-basic-theme/hero-sections"],"patternName":"caledros-basic-theme/hero-section-1","name":"Hero Section 1"}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:0px 50px 0px 50px;--cbb-light-bg-color:#ffffff2b;--cbb-dark-bg-color:#00000061;justify-content:center;align-items:center;min-height:500px;row-gap:20px;background-image:url(<?php echo esc_url($hero_image_url); ?>);background-position:50% 50%;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"600px","containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container" style="max-width:600px;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:15px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="line-height:1.2">Welcome to Your Next Big Idea</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Discover powerful tools and seamless solutions designed to help you grow, create, and succeed—no matter where you're starting from.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/button {"buttonText":"Get Started","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002daccent-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002daccent-1)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","buttonFontFamily":"inter","buttonFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)","buttonLetterSpacing":"3px","buttonPadding":{"top":"5px","right":"15px","bottom":"5px","left":"15px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:var(--wp--preset--color--contrast);--cbb-button-dark-color:var(--wp--preset--color--contrast);--cbb-button-hover-light-color:var(--wp--preset--color--accent-1);--cbb-button-hover-dark-color:var(--wp--preset--color--accent-1);--cbb-button-text-light-color:#f4f4f4;--cbb-button-text-dark-color:var(--wp--preset--color--base);font-family:var(--wp--preset--font-family--inter);font-weight:400;font-style:normal;font-size:var(--wp--preset--font-size--small);border-radius:5px;letter-spacing:3px;margin:0px;padding:5px 15px 5px 15px" href="#">Get Started</a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->