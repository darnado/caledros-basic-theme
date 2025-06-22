<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Misc UI Page
 * Slug: caledros-basic-theme/misc-ui-page
 * Categories: caledros-basic-theme/demo-content
 */
?>

<?php
$sky_background_image_url = get_template_directory_uri() . '/assets/images/patterns/sky-background.webp';
if (!filter_var($sky_background_image_url , FILTER_VALIDATE_URL)) { 
    $sky_background_image_url  = ''; 
}
$tree_image_url = get_template_directory_uri() . '/assets/images/patterns/tree.webp';
if (!filter_var($tree_image_url, FILTER_VALIDATE_URL)) { 
    $tree_image_url = ''; 
}
$sparrow_image_url = get_template_directory_uri() . '/assets/images/patterns/sparrow.webp';
if (!filter_var($sparrow_image_url, FILTER_VALIDATE_URL)) { 
    $sparrow_image_url = ''; 
}
$mountain_image_url = get_template_directory_uri() . '/assets/images/patterns/hero1.webp';
if (!filter_var($mountain_image_url, FILTER_VALIDATE_URL)) { 
    $mountain_image_url = ''; 
}
$acuarium_image_url = get_template_directory_uri() . '/assets/images/patterns/acuarium.webp';
if (!filter_var($acuarium_image_url, FILTER_VALIDATE_URL)) { 
    $acuarium_image_url = ''; 
}
$trees_image_url = get_template_directory_uri() . '/assets/images/patterns/trees.webp';
if (!filter_var($trees_image_url, FILTER_VALIDATE_URL)) { 
    $trees_image_url = ''; 
}
$buildings_image_url = get_template_directory_uri() . '/assets/images/patterns/buildings.webp';
if (!filter_var($buildings_image_url, FILTER_VALIDATE_URL)) { 
    $buildings_image_url = ''; 
}
$buildings_300_image_url = get_template_directory_uri() . '/assets/images/patterns/buildings-300x300.webp';
if (!filter_var($buildings_300_image_url, FILTER_VALIDATE_URL)) { 
    $buildings_300_image_url = ''; 
}
$buildings_768_image_url = get_template_directory_uri() . '/assets/images/patterns/buildings-768x768.webp';
if (!filter_var($buildings_768_image_url, FILTER_VALIDATE_URL)) { 
    $buildings_768_image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerMargin":{"top":"40px","right":"0px","bottom":"0px","left":"0px","differentMarginsEnabled":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:40px 0px 0px 0px;padding:0px;justify-content:center;align-items:center;min-height:auto;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMargin":{"top":"0px","right":"0px","bottom":"40px","left":"0px","differentMarginsEnabled":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"40px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px 0px 40px 0px;padding:0px;min-height:auto;row-gap:40px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px","lineHeight":"1.2"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:60px;line-height:1.2">Misc UI</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This section presents a variety of user interface elements, each designed to illustrate different layout and content arrangements. It includes examples such as flexible grid structures, a blog-style layout, a selection of call-to-action components, and some two-columns layouts. Each element serves as a visual reference, helping to demonstrate how different pieces can come together in a cohesive design system.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The goal is to showcase a mix of patterns and styles that can be adapted to a wide range of use cases. Whether for content presentation, user engagement, or structural layout, these components offer a snapshot of practical, reusable design approaches.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">Grid Layout</h2>
<!-- /wp:heading -->

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

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"60%","containerMinHeight":"200px","containerLightBackgroundColor":"#23252985","containerDarkBackgroundColor":"#23252985","containerBackgroundImage":{"id":1362,"alt":"","url":"<?php echo esc_url($sky_background_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.48,"y":0.12},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px","fullWidthMobileEnabled":true,"fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color cbb-flex-container--full-width-tablet  cbb-flex-container--full-width-mobile" style="max-width:60%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#23252985;--cbb-dark-bg-color:#23252985;justify-content:center;align-items:center;min-height:200px;row-gap:15px;background-image:url(<?php echo esc_url($sky_background_image_url); ?>);background-position:48% 12%;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"robot","iconsSize":100,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
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
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">Grid Layout 2</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundColor":"#ffffff","containerDarkBackgroundColor":"#ffffff","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
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
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px 0px 20px 0px;min-height:auto;row-gap:15px;column-gap:15px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"60%","containerMinHeight":"200px","containerLightBackgroundColor":"#23252985","containerDarkBackgroundColor":"#23252985","containerBackgroundImage":{"id":1362,"alt":"","url":"<?php echo esc_url($sky_background_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.48,"y":0.12},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px","fullWidthMobileEnabled":true,"fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color cbb-flex-container--full-width-tablet  cbb-flex-container--full-width-mobile" style="max-width:60%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#23252985;--cbb-dark-bg-color:#23252985;justify-content:center;align-items:center;min-height:200px;row-gap:15px;background-image:url(<?php echo esc_url($sky_background_image_url); ?>);background-position:48% 12%;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"rocket-takeoff","iconsSize":100,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
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
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">Blog Layout</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"solid","width":"1px","lightColor":"#0000002e","darkColor":"#ffffff47","radius":"0px"},"containerPadding":{"top":"10px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"}} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:100%;width:100%;margin:0px;padding:10px;min-height:auto;border-style:solid;border-width:1px;--cbb-light-border-color:#0000002e;--cbb-dark-border-color:#ffffff47;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container has-global-padding" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;justify-content:center;align-items:center;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerBorder":{"style":"none","width":"2px","lightColor":"#2b5bb8","darkColor":"#00000000","radius":"0px"},"containerPadding":{"top":"0px","right":"0px","bottom":"20px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"20px","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:0px 0px 20px 0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;column-gap:20px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none none solid none","width":"1px","lightColor":"#0055cd","darkColor":"#ffffff","radius":"0px"},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"containerColumnGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;column-gap:15px;border-style:none none solid none;border-width:1px;--cbb-light-border-color:#0055cd;--cbb-dark-border-color:#ffffff;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"50px","containerJustifyContent":"center","containerAlignItems":"center","fullWidthMobileEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--full-width-mobile" style="max-width:50px;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"40px","containerMinHeight":"40px","containerBorder":{"style":"solid","width":"2px","lightColor":"#0055cd","darkColor":"#ffffff","radius":"50%"},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:40px;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:40px;border-style:solid;border-width:2px;--cbb-light-border-color:#0055cd;--cbb-dark-border-color:#ffffff;border-radius:50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-style:normal;font-weight:700">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerBorder":{"style":"none","width":"1px","lightColor":"#0055cd","darkColor":"#ffffff","radius":"0px"},"containerPadding":{"top":"0px","right":"0px","bottom":"15px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerRowGap":"5px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px 0px 15px 0px;justify-content:center;min-height:200px;row-gap:5px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size">18th May 2025</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-left has-medium-font-size">Navigating the Future of Digital Design</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">As technology evolves, so does the way we approach design. This post explores emerging trends, from AI-driven interfaces to the growing importance of accessibility and user-centered design principles.</p>
<!-- /wp:paragraph -->

<!-- wp:caledros-basic-blocks/flex-container {"containerAlignItems":"center","containerColumnGap":"5px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;align-items:center;min-height:auto;column-gap:5px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"50px","containerMinHeight":"50px","containerBackgroundImage":{"id":1447,"alt":"","url":"<?php echo esc_url($sparrow_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.17,"y":0.54},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"50%"}} -->
<div class="cbb-flex-container" style="max-width:50px;width:100%;margin:0px;padding:0px;min-height:50px;background-image:url(<?php echo esc_url($sparrow_image_url); ?>);background-position:17% 54%;border-radius:50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"11px"}}} -->
<h3 class="wp-block-heading" style="font-size:11px">By Jhon Doe</h3>
<!-- /wp:heading --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"200px","containerMinHeight":"200px","containerBackgroundImage":{"id":709,"alt":"","url":"<?php echo esc_url($tree_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.97,"y":0.13},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"50% 50% 50% 0px"}} -->
<div class="cbb-flex-container" style="max-width:200px;width:100%;margin:0px;padding:0px;min-height:200px;background-image:url(<?php echo esc_url($tree_image_url); ?>);background-position:97% 13%;border-radius:50% 50% 50% 0px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container has-global-padding" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;justify-content:center;align-items:center;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerBorder":{"style":"none","width":"2px","lightColor":"#2b5bb8","darkColor":"#00000000","radius":"0px"},"containerPadding":{"top":"0px","right":"0px","bottom":"20px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column-reverse"},"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"20px","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:0px 0px 20px 0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;column-gap:20px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column-reverse"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"200px","containerMinHeight":"200px","containerBackgroundImage":{"id":202,"alt":"Blue mountains","url":"<?php echo esc_url($mountain_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.53,"y":0.45},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"50% 50% 0px 50%"}} -->
<div class="cbb-flex-container" style="max-width:200px;width:100%;margin:0px;padding:0px;min-height:200px;background-image:url(<?php echo esc_url($mountain_image_url); ?>);background-position:53% 45%;border-radius:50% 50% 0px 50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none none solid none","width":"1px","lightColor":"#0055cd","darkColor":"#ffffff","radius":"0px"},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"containerColumnGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;column-gap:15px;border-style:none none solid none;border-width:1px;--cbb-light-border-color:#0055cd;--cbb-dark-border-color:#ffffff;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"50px","containerJustifyContent":"center","containerAlignItems":"center","fullWidthMobileEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--full-width-mobile" style="max-width:50px;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"40px","containerMinHeight":"40px","containerBorder":{"style":"solid","width":"2px","lightColor":"#0055cd","darkColor":"#ffffff","radius":"50%"},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:40px;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:40px;border-style:solid;border-width:2px;--cbb-light-border-color:#0055cd;--cbb-dark-border-color:#ffffff;border-radius:50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-style:normal;font-weight:700">02</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerBorder":{"style":"none","width":"1px","lightColor":"#0055cd","darkColor":"#ffffff","radius":"0px"},"containerPadding":{"top":"0px","right":"0px","bottom":"15px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerRowGap":"5px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px 0px 15px 0px;justify-content:center;min-height:200px;row-gap:5px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size">18th May 2025</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-left has-medium-font-size">Building Resilient Teams in a Remote World</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">Discover strategies for cultivating strong, adaptable teams in remote or hybrid environments. Learn how communication, culture, and trust play pivotal roles in long-term success.</p>
<!-- /wp:paragraph -->

<!-- wp:caledros-basic-blocks/flex-container {"containerAlignItems":"center","containerColumnGap":"5px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;align-items:center;min-height:auto;column-gap:5px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"50px","containerMinHeight":"50px","containerBackgroundImage":{"id":1447,"alt":"","url":"<?php echo esc_url($sparrow_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.17,"y":0.54},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"50%"}} -->
<div class="cbb-flex-container" style="max-width:50px;width:100%;margin:0px;padding:0px;min-height:50px;background-image:url(<?php echo esc_url($sparrow_image_url); ?>);background-position:17% 54%;border-radius:50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"11px"}}} -->
<h3 class="wp-block-heading" style="font-size:11px">By Jhon Doe</h3>
<!-- /wp:heading --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">Call to Action 1</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMinHeight":"300px","containerLightBackgroundColor":"#00000066","containerDarkBackgroundColor":"#00000066","containerBackgroundImage":{"id":1128,"alt":"","url":"<?php echo esc_url($acuarium_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.47,"y":0.35},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"40px"},"containerMargin":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentMarginsEnabled":true},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"metadata":{"categories":["caledros-basic-theme/call-to-action"],"patternName":"caledros-basic-theme/call-to-action-1","name":"Call to Action 1"}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px 0px 0px 0px;padding:0px;--cbb-light-bg-color:#00000066;--cbb-dark-bg-color:#00000066;min-height:300px;background-image:url(<?php echo esc_url($acuarium_image_url); ?>);background-position:47% 35%;border-radius:40px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"40px 0px 0px 40px"},"containerPadding":{"top":"30px","right":"30px","bottom":"0px","left":"30px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"flex-start","containerRowGap":"20px"} -->
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
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">Call to Action 2</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMinHeight":"300px","containerLightBackgroundColor":"#00000066","containerDarkBackgroundColor":"#00000066","containerBackgroundImage":{"id":1137,"alt":"","url":"<?php echo esc_url($trees_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.47,"y":0.35},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"40px"},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"metadata":{"categories":["caledros-basic-theme/call-to-action"],"patternName":"caledros-basic-theme/call-to-action-2","name":"Call to Action 2"}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:0px;--cbb-light-bg-color:#00000066;--cbb-dark-bg-color:#00000066;min-height:300px;background-image:url(<?php echo esc_url($trees_image_url); ?>);background-position:47% 35%;border-radius:40px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"40px 0px 0px 40px"},"containerPadding":{"top":"30px","right":"30px","bottom":"0px","left":"30px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"flex-start","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:30px 30px 0px 30px;justify-content:center;align-items:flex-start;min-height:auto;row-gap:20px;border-radius:40px 0px 0px 40px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-large-font-size" style="line-height:1.2">Speed Meets Simplicity</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"inter"} -->
<p class="has-base-color has-text-color has-link-color has-inter-font-family">Experience a theme that’s fast, flexible, and easy to customize.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"50%"},"containerPadding":{"top":"30px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:30px;justify-content:center;align-items:center;min-height:auto;border-radius:50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/button {"buttonText":"Start Creating \u003e","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonTextLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonFontFamily":"inter","buttonFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)","buttonLetterSpacing":"2px","buttonBorder":{"style":"solid","width":"1px","lightColor":"#000 #000 #000 #000","darkColor":"#000 #000 #000 #000","radius":"50px"},"buttonPadding":{"top":"5px","right":"15px","bottom":"5px","left":"15px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:var(--wp--preset--color--contrast);--cbb-button-dark-color:var(--wp--preset--color--contrast);--cbb-button-hover-light-color:var(--wp--preset--color--contrast);--cbb-button-hover-dark-color:var(--wp--preset--color--contrast);--cbb-button-text-light-color:var(--wp--preset--color--contrast-dark);--cbb-button-text-dark-color:var(--wp--preset--color--contrast-dark);font-family:var(--wp--preset--font-family--inter);font-weight:400;font-style:normal;font-size:var(--wp--preset--font-size--small);border-style:solid;border-width:1px;--cbb-button-light-border-color:#000 #000 #000 #000;--cbb-button-dark-border-color:#000 #000 #000 #000;border-radius:50px;letter-spacing:2px;margin:0px;padding:5px 15px 5px 15px" href="#">Start Creating ></a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">Two Columns Layout 1</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerBorder":{"style":"solid","width":"1px","lightColor":"#0000002e","darkColor":"#ffffff47","radius":"0px"},"containerMargin":{"top":"20px","right":"0px","bottom":"20px","left":"0px","differentMarginsEnabled":true},"containerPadding":{"top":"20px","right":"0px","bottom":"20px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"row","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"20px","containerRowGap":"20px","metadata":{"categories":["caledros-basic-theme/layout"],"patternName":"caledros-basic-theme/two-columns-1","name":"Two Columns 1"}} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:var(--wp--style--global--content-size);width:100%;margin:20px 0px 20px 0px;padding:20px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;column-gap:20px;border-style:solid;border-width:1px;--cbb-light-border-color:#0000002e;--cbb-dark-border-color:#ffffff47;--cbb-fdir-lg:row;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"solid","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:20px;min-height:auto;row-gap:20px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading -->
<h2 class="wp-block-heading">Solutions That Fit Your Needs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our services are designed to support your goals every step of the way. Whether you need expert guidance, hands-on support, or a fully customized approach, we’re here to help make it happen.</p>
<!-- /wp:paragraph -->

<!-- wp:caledros-basic-blocks/button {"buttonText":"Learn more","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002daccent-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002daccent-1)","buttonTextLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)","buttonLetterSpacing":"2px","buttonBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"10px"},"buttonPadding":{"top":"5px","right":"10px","bottom":"5px","left":"10px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:var(--wp--preset--color--highlight-1);--cbb-button-dark-color:var(--wp--preset--color--highlight-1);--cbb-button-hover-light-color:var(--wp--preset--color--accent-1);--cbb-button-hover-dark-color:var(--wp--preset--color--accent-1);--cbb-button-text-light-color:var(--wp--preset--color--contrast-dark);--cbb-button-text-dark-color:var(--wp--preset--color--contrast-dark);font-weight:400;font-style:normal;font-size:var(--wp--preset--font-size--small);border-radius:10px;letter-spacing:2px;margin:0px;padding:5px 10px 5px 10px" href="#">Learn more</a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002daccent-1)","radius":"20px"},"containerBoxShadow":{"enabled":true,"hOffset":"0px","vOffset":"0px","blur":"8px","spread":"0px","lightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","darkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","style":""},"containerPadding":{"top":"20px","right":"0px","bottom":"0px","left":"30px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerAlignItems":"flex-start","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-box-shadow" style="max-width:100%;width:100%;margin:0px;padding:20px;align-items:flex-start;min-height:auto;row-gap:15px;border-radius:20px;--cbb-light-box-shadow: 0px 0px 8px 0px var(--wp--preset--color--highlight-1);--cbb-dark-box-shadow: 0px 0px 8px 0px var(--wp--preset--color--highlight-1);--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/menu-link {"menuLabel":"Consulting","contentType":"custom","menuDarkHoverColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","menuFontFamily":"inter","menuFontWeight":600,"menuFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)"} /-->

<!-- wp:caledros-basic-blocks/menu-link {"menuLabel":"Strategy Planning","menuDarkHoverColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","menuFontFamily":"inter","menuFontWeight":600,"menuFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)"} /-->

<!-- wp:caledros-basic-blocks/menu-link {"menuLabel":"Support \u0026 Maintenance","menuDarkHoverColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","menuFontFamily":"inter","menuFontWeight":600,"menuFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)"} /-->

<!-- wp:caledros-basic-blocks/menu-link {"menuLabel":"Custom Solutions","menuDarkHoverColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","menuFontFamily":"inter","menuFontWeight":600,"menuFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)"} /-->

<!-- wp:caledros-basic-blocks/menu-link {"menuLabel":"Project Management","menuDarkHoverColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","menuFontFamily":"inter","menuFontWeight":600,"menuFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)"} /-->

<!-- wp:caledros-basic-blocks/menu-link {"menuLabel":"Training \u0026 Onboarding","menuDarkHoverColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","menuFontFamily":"inter","menuFontWeight":600,"menuFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)"} /--></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">Two Columns Layout 2</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerBorder":{"style":"solid","width":"1px","lightColor":"#0000002e","darkColor":"#ffffff47","radius":"0px"},"containerMargin":{"top":"20px","right":"0px","bottom":"20px","left":"0px","differentMarginsEnabled":true},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column-reverse"},"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"20px","containerRowGap":"20px","metadata":{"categories":["caledros-basic-theme/layout"],"patternName":"caledros-basic-theme/two-columns-2","name":"Two Columns 2"}} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:var(--wp--style--global--content-size);width:100%;margin:20px 0px 20px 0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;column-gap:20px;border-style:solid;border-width:1px;--cbb-light-border-color:#0000002e;--cbb-dark-border-color:#ffffff47;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column-reverse"><!-- wp:caledros-basic-blocks/flex-container -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/responsive-image {"sourceImage":{"id":265,"alt":"About section","url":"<?php echo esc_url($buildings_image_url); ?>","height":800,"width":800,"srcSet":"<?php echo esc_url($buildings_300_image_url); ?> 300w, <?php echo esc_url($buildings_768_image_url); ?> 768w, <?php echo esc_url($buildings_image_url); ?> 800w","sizes":"(max-width:800px) 100vw, 800px"},"imgFilter":{"type":"none","content":"0","hOffset":"0px","vOffset":"0px","blur":"0px","color":"#000"}} -->
<figure class="cbb-resp-img" style="max-width:800px;height:auto"><img src="<?php echo esc_url($buildings_image_url); ?>" alt="About section" width="800" height="800" style="object-fit:cover;width:100%;height:100%;aspect-ratio:800/800" srcset="<?php echo esc_url($buildings_300_image_url); ?> 300w, <?php echo esc_url($buildings_768_image_url); ?> 768w, <?php echo esc_url($buildings_image_url); ?> 800w" sizes="(max-width:800px) 100vw, 800px"/></figure>
<!-- /wp:caledros-basic-blocks/responsive-image --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"solid","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:20px;min-height:auto;row-gap:20px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading -->
<h2 class="wp-block-heading">Ready to Take the Next Step?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Let’s work together to turn your ideas into results. Reach out today and discover how we can help you move forward.</p>
<!-- /wp:paragraph -->

<!-- wp:caledros-basic-blocks/button {"buttonText":"Contact us","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002daccent-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002daccent-1)","buttonTextLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)","buttonLetterSpacing":"2px","buttonBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"10px"},"buttonPadding":{"top":"5px","right":"10px","bottom":"5px","left":"10px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:var(--wp--preset--color--highlight-1);--cbb-button-dark-color:var(--wp--preset--color--highlight-1);--cbb-button-hover-light-color:var(--wp--preset--color--accent-1);--cbb-button-hover-dark-color:var(--wp--preset--color--accent-1);--cbb-button-text-light-color:var(--wp--preset--color--contrast-dark);--cbb-button-text-dark-color:var(--wp--preset--color--contrast-dark);font-weight:400;font-style:normal;font-size:var(--wp--preset--font-size--small);border-radius:10px;letter-spacing:2px;margin:0px;padding:5px 10px 5px 10px" href="#">Contact us</a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->