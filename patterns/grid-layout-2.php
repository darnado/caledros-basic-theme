<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Grid Layout 2
 * Slug: caledros-basic-theme/grid-layout-2
 * Categories: caledros-basic-theme/layout
 */
?>

<?php
$hero_image_url = get_template_directory_uri() . '/assets/images/patterns/sky-background.webp';
if (!filter_var($hero_image_url, FILTER_VALIDATE_URL)) { 
    $hero_image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundColor":"#ffffff","containerDarkBackgroundColor":"#ffffff","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px","metadata":{"categories":["caledros-basic-theme/layout"],"patternName":"caledros-basic-theme/grid-layout-1","name":"Grid Layout 1"}} -->
<div class="cbb-flex-container has-global-padding cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px auto 0px auto;--cbb-light-bg-color:#ffffff;--cbb-dark-bg-color:#ffffff;justify-content:center;align-items:center;min-height:auto;row-gap:15px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/grid-container {"numberOfColumns":2,"numberOfColumnsTablet":2,"containerRowGap":"15px","containerColumnGap":"15px","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":false},"containerPadding":{"top":"20px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false}} -->
<div class="cbb-grid-container" style="max-width:100%;width:100%;margin:0px;padding:20px 0px 0px 0px;min-height:auto;row-gap:15px;column-gap:15px;--cbb-col-lg:2;--cbb-col-md:2;--cbb-col-sm:1"><!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#ef476f","containerDarkBackgroundColor":"#ef476f","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#ef476f;--cbb-dark-bg-color:#ef476f;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"gear","iconsSize":100,"iconsDarkColor":"#000000"} -->
<div class="cbb-icon cbb-icon--gear" style="--cbb-icon-size:100px;--cbb-icon-color:#000000;--cbb-icon-dark-color:#000000"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-small-font-size">Quick Start</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"13px"}},"textColor":"contrast"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color" style="font-size:13px">Get up and running with minimal setup. Perfect for small projects and rapid prototyping.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"15px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:15px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#ffd166","containerDarkBackgroundColor":"#ffd166","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#ffd166;--cbb-dark-bg-color:#ffd166;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"tools","iconsSize":100,"iconsDarkColor":"#000000"} -->
<div class="cbb-icon cbb-icon--tools" style="--cbb-icon-size:100px;--cbb-icon-color:#000000;--cbb-icon-dark-color:#000000"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-small-font-size"> Responsive Design</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"13px"}},"textColor":"contrast"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color" style="font-size:13px">Components that adapt smoothly to all screen sizes, from mobile to desktop.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/grid-container {"numberOfColumns":2,"numberOfColumnsTablet":2,"containerRowGap":"15px","containerColumnGap":"15px"} -->
<div class="cbb-grid-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:15px;column-gap:15px;--cbb-col-lg:2;--cbb-col-md:2;--cbb-col-sm:1"><!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#06d6a0","containerDarkBackgroundColor":"#06d6a0","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#06d6a0;--cbb-dark-bg-color:#06d6a0;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"stickies","iconsSize":100,"iconsDarkColor":"#000000"} -->
<div class="cbb-icon cbb-icon--stickies" style="--cbb-icon-size:100px;--cbb-icon-color:#000000;--cbb-icon-dark-color:#000000"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-small-font-size">Accessible by Default</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"13px"}},"textColor":"contrast"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color" style="font-size:13px">Built with best practices in mind to ensure usability for everyone.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#118ab2","containerDarkBackgroundColor":"#118ab2","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#118ab2;--cbb-dark-bg-color:#118ab2;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"buildings","iconsSize":100,"iconsColor":"#ffffff"} -->
<div class="cbb-icon cbb-icon--buildings" style="--cbb-icon-size:100px;--cbb-icon-color:#ffffff;--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Customizable Styles</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="font-size:13px">Easily adjust styles and themes to match your brand or project aesthetic.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/grid-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/grid-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerPadding":{"top":"0px","right":"0px","bottom":"20px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"containerColumnGap":"15px","containerRowGap":"15px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px 0px 20px 0px;min-height:auto;row-gap:15px;column-gap:15px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"60%","containerMinHeight":"200px","containerLightBackgroundColor":"#23252985","containerDarkBackgroundColor":"#23252985","containerBackgroundImage":{"id":1362,"alt":"","url":"<?php echo esc_url($hero_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.48,"y":0.12},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px","fullWidthMobileEnabled":true,"fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color cbb-flex-container--full-width-tablet  cbb-flex-container--full-width-mobile" style="max-width:60%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#23252985;--cbb-dark-bg-color:#23252985;justify-content:center;align-items:center;min-height:200px;row-gap:15px;background-image:url(<?php echo esc_url($hero_image_url); ?>);background-position:48% 12%;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"rocket-takeoff","iconsSize":100,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-icon cbb-icon--rocket-takeoff" style="--cbb-icon-size:100px;--cbb-icon-color:var(--wp--preset--color--base);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Performance First</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="font-size:13px">Lightweight components designed to keep load times fast and interactions snappy.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"40%","containerMinHeight":"200px","containerLightBackgroundColor":"#073b4c","containerDarkBackgroundColor":"#073b4c","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px","fullWidthMobileEnabled":true,"fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color cbb-flex-container--full-width-tablet  cbb-flex-container--full-width-mobile" style="max-width:40%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#073b4c;--cbb-dark-bg-color:#073b4c;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"wrench-adjustable","iconsSize":100,"iconsColor":"#ffffff"} -->
<div class="cbb-icon cbb-icon--wrench-adjustable" style="--cbb-icon-size:100px;--cbb-icon-color:#ffffff;--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Open Source</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="font-size:13px">Fully open-source with active community support and regular updates.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->