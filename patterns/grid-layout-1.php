<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Grid Layout 1
 * Slug: caledros-basic-theme/grid-layout-1
 * Categories: caledros-basic-theme/layout
 */
?>

<?php
$hero_image_url = get_template_directory_uri() . '/assets/images/patterns/sky-background.webp';
if (!filter_var($hero_image_url, FILTER_VALIDATE_URL)) { 
    $hero_image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundColor":"#0d0d0d","containerDarkBackgroundColor":"#0d0d0d","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container has-global-padding cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px auto 0px auto;--cbb-light-bg-color:#0d0d0d;--cbb-dark-bg-color:#0d0d0d;justify-content:center;align-items:center;min-height:auto;row-gap:15px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/grid-container {"numberOfColumns":3,"numberOfColumnsTablet":3,"containerRowGap":"15px","containerColumnGap":"15px","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":false},"containerPadding":{"top":"20px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false}} -->
<div class="cbb-grid-container" style="max-width:100%;width:100%;margin:0px;padding:20px 0px 0px 0px;min-height:auto;row-gap:15px;column-gap:15px;--cbb-col-lg:3;--cbb-col-md:3;--cbb-col-sm:1"><!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#232428","containerDarkBackgroundColor":"#232428","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#232428;--cbb-dark-bg-color:#232428;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"rocket-takeoff","iconsSize":100,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-icon cbb-icon--rocket-takeoff" style="--cbb-icon-size:100px;--cbb-icon-color:var(--wp--preset--color--base);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Discover New Horizons</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="font-size:13px">Explore exciting opportunities and broaden your perspective with our curated content designed to inspire and motivate.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#232428","containerDarkBackgroundColor":"#232428","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#232428;--cbb-dark-bg-color:#232428;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"building","iconsSize":100,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-icon cbb-icon--building" style="--cbb-icon-size:100px;--cbb-icon-color:var(--wp--preset--color--base);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Innovative Solutions</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="font-size:13px">Learn about cutting-edge technologies and creative strategies that drive success in today’s dynamic market.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#fec119","containerDarkBackgroundColor":"#fec119","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#fec119;--cbb-dark-bg-color:#fec119;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"lightbulb","iconsSize":100,"iconsDarkColor":"#000000"} -->
<div class="cbb-icon cbb-icon--lightbulb" style="--cbb-icon-size:100px;--cbb-icon-color:#000000;--cbb-icon-dark-color:#000000"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-small-font-size">Connect &amp; Collaborate</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"13px"}},"textColor":"contrast"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color" style="font-size:13px">Build meaningful relationships and work together with like-minded individuals to achieve common goals.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/grid-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerPadding":{"top":"0px","right":"0px","bottom":"20px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"containerColumnGap":"15px","containerRowGap":"15px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px 0px 20px 0px;min-height:auto;row-gap:15px;column-gap:15px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"40%","containerMinHeight":"200px","containerLightBackgroundColor":"#ffffff","containerDarkBackgroundColor":"#ffffff","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px","fullWidthMobileEnabled":true,"fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color cbb-flex-container--full-width-tablet  cbb-flex-container--full-width-mobile" style="max-width:40%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#ffffff;--cbb-dark-bg-color:#ffffff;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"wrench-adjustable","iconsSize":100,"iconsDarkColor":"#000000"} -->
<div class="cbb-icon cbb-icon--wrench-adjustable" style="--cbb-icon-size:100px;--cbb-icon-color:#000000;--cbb-icon-dark-color:#000000"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"25px"}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color" style="font-size:25px">Insights &amp; Trends</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"13px"}},"textColor":"contrast"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color" style="font-size:13px">Stay ahead of the curve with the latest industry insights, expert analyses, and emerging trends shaping the future.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"60%","containerMinHeight":"200px","containerLightBackgroundColor":"#23252985","containerDarkBackgroundColor":"#23252985","containerBackgroundImage":{"id":1362,"alt":"","url":"<?php echo esc_url($hero_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.48,"y":0.12},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px","fullWidthMobileEnabled":true,"fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color cbb-flex-container--full-width-tablet  cbb-flex-container--full-width-mobile" style="max-width:60%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#23252985;--cbb-dark-bg-color:#23252985;justify-content:center;align-items:center;min-height:200px;row-gap:15px;background-image:url(<?php echo esc_url($hero_image_url); ?>);background-position:48% 12%;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"robot","iconsSize":100,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-icon cbb-icon--robot" style="--cbb-icon-size:100px;--cbb-icon-color:var(--wp--preset--color--base);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Fast by Design</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="font-size:13px">Built for speed with clean code and optimized custom plugins—no unnecessary load, ever.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->