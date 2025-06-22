<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Homepage
 * Slug: caledros-basic-theme/homepage
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
$trees_image_url = get_template_directory_uri() . '/assets/images/404/404.webp';
if (!filter_var($trees_image_url, FILTER_VALIDATE_URL)) { 
    $trees_image_url = ''; 
}
$sun_beach_image_url = get_template_directory_uri() . '/assets/images/patterns/sun-beach.webp';
if (!filter_var($sun_beach_image_url, FILTER_VALIDATE_URL)) { 
    $sun_beach_image_url = ''; 
}

$landscape_image_url = get_template_directory_uri() . '/assets/images/large-slider/landscape-of-douro-valley.webp';
if (!filter_var($landscape_image_url, FILTER_VALIDATE_URL)) { 
    $landscape_image_url = ''; 
}
$hidden_beach_image_url = get_template_directory_uri() . '/assets/images/large-slider/hidden-beach.webp';
if (!filter_var($hidden_beach_image_url, FILTER_VALIDATE_URL)) { 
    $hidden_beach_image_url = ''; 
}
$ocean_view_image_url = get_template_directory_uri() . '/assets/images/large-slider/ocean-view.webp';
if (!filter_var($ocean_view_image_url, FILTER_VALIDATE_URL)) { 
    $ocean_view_image_url = ''; 
}

$snow_image_url = get_template_directory_uri() . '/assets/images/patterns/water-snow.webp';
if (!filter_var($snow_image_url, FILTER_VALIDATE_URL)) { 
    $snow_image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/links-slider {"identifier":"demo-large-slider","numberOfCards":3,"cardOneSlug":"slider-card-4","cardTwoSlug":"slider-card-5","cardThreeSlug":"slider-card-6","enableLoop":true,"autoplay":{"enableAutoplay":true,"delay":3000},"lightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","darkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","enableNavigationArrows":false,"minHeight":"600px","metadata":{"categories":["caledros-basic-theme/sliders"],"patternName":"caledros-basic-theme/full-width-slider","name":"Full Width Slider"}} /-->

<!-- wp:caledros-basic-blocks/flex-container {"containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"}} -->
<div class="cbb-flex-container has-global-padding" style="max-width:100%;width:100%;margin:0px auto 0px auto;min-height:auto;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"60px","bottom":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"50px","lineHeight":"1.2"}},"fontFamily":"inter"} -->
<h1 class="wp-block-heading has-text-align-center has-inter-font-family" style="margin-top:60px;margin-bottom:40px;font-size:50px;font-style:normal;font-weight:700;line-height:1.2">Introducing the Caledros Basic Theme</h1>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"0px","bottom":"60px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"row","tablet":"column-reverse","mobile":"column-reverse"},"containerAlignItems":"center","containerColumnGap":"20px","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px auto 0px auto;padding:0px 0px 60px 0px;align-items:center;min-height:auto;row-gap:20px;column-gap:20px;--cbb-fdir-lg:row;--cbb-fdir-md:column-reverse;--cbb-fdir-sm:column-reverse"><!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"360px","containerBackgroundImage":{"id":855,"alt":"Snow","url":"<?php echo esc_url($snow_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.46,"y":0.06},"containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"0px 50px 0px 50px"},"containerOverflow":"hidden"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:360px;background-image:url(<?php echo esc_url($snow_image_url); ?>);background-position:46% 6%;border-radius:0px 50px 0px 50px;overflow:hidden;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none none solid none","width":"1px","lightColor":"#d5d5d5","darkColor":"#ffffff61","radius":"0px"},"containerPadding":{"top":"0px","right":"0px","bottom":"20px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:100%;width:100%;margin:0px;padding:0px 0px 20px 0px;min-height:auto;row-gap:20px;border-style:none none solid none;border-width:1px;--cbb-light-border-color:#d5d5d5;--cbb-dark-border-color:#ffffff61;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:paragraph -->
<p>Caledros Basic Theme is a lightweight, full-site editing WordPress theme built for performance and flexibility. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Designed with clean code and powered by custom-built plugins, it offers a seamless experience for developers and content creators alike.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Whether you're launching a personal blog or a business site, Caledros ensures fast loading times and full customization without the bloat.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Optimized for speed, designed to impress—right out of the box.<br>No fluff, no bloat—just clean, effective tools that work.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerLightBackgroundColor":"#f0f3fc","containerDarkBackgroundColor":"#ffffff08","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true}} -->
<div class="cbb-flex-container has-global-padding cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px auto 0px auto;--cbb-light-bg-color:#f0f3fc;--cbb-dark-bg-color:#ffffff08;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/grid-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","numberOfColumns":4,"numberOfColumnsTablet":2,"containerRowGap":"15px","containerColumnGap":"15px","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"60px","right":"0px","bottom":"60px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false}} -->
<div class="cbb-grid-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px auto 0px auto;padding:60px 0px 60px 0px;min-height:auto;row-gap:15px;column-gap:15px;--cbb-col-lg:4;--cbb-col-md:2;--cbb-col-sm:1"><!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#3ab8d3","containerDarkBackgroundColor":"#3ab8d3","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#3ab8d3;--cbb-dark-bg-color:#3ab8d3;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"rocket-takeoff","iconsSize":124,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-icon cbb-icon--rocket-takeoff" style="--cbb-icon-size:124px;--cbb-icon-color:var(--wp--preset--color--base);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"25px"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:25px">Fast by Design</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Built for speed with clean code and optimized custom plugins—no unnecessary load, ever.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#3ab8d3","containerDarkBackgroundColor":"#3ab8d3","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#3ab8d3;--cbb-dark-bg-color:#3ab8d3;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"bricks","iconsSize":124,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-icon cbb-icon--bricks" style="--cbb-icon-size:124px;--cbb-icon-color:var(--wp--preset--color--base);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"25px"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:25px">Full-Site Editing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Unlock the power of WordPress block editing with intuitive, end-to-end customization.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#3ab8d3","containerDarkBackgroundColor":"#3ab8d3","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#3ab8d3;--cbb-dark-bg-color:#3ab8d3;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"cloud-sun","iconsSize":124,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-icon cbb-icon--cloud-sun" style="--cbb-icon-size:124px;--cbb-icon-color:var(--wp--preset--color--base);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"25px"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:25px">Dark &amp; Light Mode</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Seamlessly integrated dark &amp; light mode switcher for an elegant experience.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"200px","containerLightBackgroundColor":"#3ab8d3","containerDarkBackgroundColor":"#3ab8d3","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"20px","right":"10px","bottom":"20px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:20px 10px 20px 10px;--cbb-light-bg-color:#3ab8d3;--cbb-dark-bg-color:#3ab8d3;justify-content:center;align-items:center;min-height:200px;row-gap:15px;border-radius:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/icon {"icon":"robot","iconsSize":124,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-icon cbb-icon--robot" style="--cbb-icon-size:124px;--cbb-icon-color:var(--wp--preset--color--base);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"25px"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:25px">Smart Integrations</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">Carefully selected third-party libraries enhance functionality without slowing you down.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/grid-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"60px","right":"0px","bottom":"60px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"40px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px auto 0px auto;padding:60px 0px 60px 0px;justify-content:center;align-items:center;min-height:auto;row-gap:40px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container has-global-padding" style="max-width:100%;width:100%;margin:0px;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0px","top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"50px","lineHeight":"1.2"}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="margin-top:0px;margin-bottom:0px;font-size:50px;font-style:normal;font-weight:700;line-height:1.2">Hero Sections</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="margin-bottom:0px">Catch attention with bold, responsive hero blocks tailored for conversions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundColor":"#00000052","containerDarkBackgroundColor":"#00000052","containerBackgroundImage":{"id":1253,"alt":"","url":"<?php echo esc_url($sun_beach_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.06,"y":0.51},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"metadata":{"categories":["caledros-basic-theme/hero-sections"],"patternName":"caledros-basic-theme/hero-section-4","name":"Hero Section 4"}} -->
<div class="cbb-flex-container has-global-padding cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;--cbb-light-bg-color:#00000052;--cbb-dark-bg-color:#00000052;min-height:auto;background-image:url(<?php echo esc_url($sun_beach_image_url); ?>);background-position:6% 51%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerBackgroundImage":{"id":"","alt":"","url":""},"containerPadding":{"top":"80px","right":"0px","bottom":"80px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"30px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:80px 0px 80px 0px;justify-content:center;align-items:center;min-height:auto;row-gap:30px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"style":{"typography":{"fontSize":"60px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:60px;line-height:1.2">Your Digital Companion</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"800px","containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"containerAlignItems":"center","containerColumnGap":"40px","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:800px;width:100%;margin:0px;padding:0px;align-items:center;min-height:auto;row-gap:20px;column-gap:40px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"flex-start"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:flex-start;min-height:auto;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"18px"}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:18px">Experience Seamless Connection and Control</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color">Anytime, anywhere. Built for today, ready for tomorrow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"253px","containerMinHeight":"450px","containerBorder":{"style":"solid","width":"3px","lightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","darkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","radius":"20px"},"containerBoxShadow":{"enabled":true,"hOffset":"0px","vOffset":"10px","blur":"20px","spread":"0px","lightColor":"#080808","darkColor":"#080808","style":""},"containerPadding":{"top":"10px","right":"0px","bottom":"10px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerAlignItems":"center","containerRowGap":"20px"} -->
<div class="cbb-flex-container cbb-flex-container--has-box-shadow cbb-flex-container--has-border" style="max-width:253px;width:100%;margin:0px;padding:10px;align-items:center;min-height:450px;row-gap:20px;border-style:solid;border-width:3px;--cbb-light-border-color:var(--wp--preset--color--contrast);--cbb-dark-border-color:var(--wp--preset--color--contrast);border-radius:20px;--cbb-light-box-shadow: 0px 10px 20px 0px #080808;--cbb-dark-box-shadow: 0px 10px 20px 0px #080808;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"70px","containerMinHeight":"20px","containerLightBackgroundColor":"#000000","containerDarkBackgroundColor":"#000000","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"10px"}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:70px;width:100%;margin:0px;padding:0px;--cbb-light-bg-color:#000000;--cbb-dark-bg-color:#000000;min-height:20px;border-radius:10px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"space-evenly","containerAlignItems":"center","containerRowGap":"25px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:space-evenly;align-items:center;min-height:auto;row-gap:25px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"10px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:10px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">DASHBOARD</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"12px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:12px">Everything you need at your fingertips.</p>
<!-- /wp:paragraph -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none none solid none","width":"2px","lightColor":"#ffffff59","darkColor":"#ffffff59","radius":"0px"},"containerJustifyContent":"space-between"} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:space-between;min-height:auto;border-style:none none solid none;border-width:2px;--cbb-light-border-color:#ffffff59;--cbb-dark-border-color:#ffffff59;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:13px">POINTS</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:13px">4</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none none solid none","width":"2px","lightColor":"#ffffff59","darkColor":"#ffffff59","radius":"0px"},"containerJustifyContent":"space-between"} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:space-between;min-height:auto;border-style:none none solid none;border-width:2px;--cbb-light-border-color:#ffffff59;--cbb-dark-border-color:#ffffff59;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:13px">ALERTS</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:13px">3</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerBorder":{"style":"none none solid none","width":"2px","lightColor":"#ffffff59","darkColor":"#ffffff59","radius":"0px"},"containerJustifyContent":"space-between"} -->
<div class="cbb-flex-container cbb-flex-container--has-border" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:space-between;min-height:auto;border-style:none none solid none;border-width:2px;--cbb-light-border-color:#ffffff59;--cbb-dark-border-color:#ffffff59;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:13px">TASKS</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"13px"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:13px">8</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"10px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:10px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">QUICK ACTIONS</h3>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/grid-container {"numberOfColumns":2,"numberOfColumnsTablet":2,"numberOfColumnsMobile":2,"containerColumnGap":"10px"} -->
<div class="cbb-grid-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;column-gap:10px;--cbb-col-lg:2;--cbb-col-md:2;--cbb-col-sm:2"><!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"100px","containerLightBackgroundColor":"#212121","containerDarkBackgroundColor":"#212121","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"10px"},"containerPadding":{"top":"10px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"space-between"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:10px;--cbb-light-bg-color:#212121;--cbb-dark-bg-color:#212121;justify-content:space-between;min-height:100px;border-radius:10px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"25px","containerMinHeight":"25px","containerLightBackgroundColor":"#515154","containerDarkBackgroundColor":"#515154","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"50%"},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:25px;width:100%;margin:0px;padding:0px;--cbb-light-bg-color:#515154;--cbb-dark-bg-color:#515154;justify-content:center;align-items:center;min-height:25px;border-radius:50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/icon {"icon":"gear","iconsSize":15,"iconsColor":"#ffffff"} -->
<div class="cbb-icon cbb-icon--gear" style="--cbb-icon-size:15px;--cbb-icon-color:#ffffff;--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"}} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-small"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-x-small-font-size">Sync</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#7d7b7b"},"elements":{"link":{"color":{"text":"#7d7b7b"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#7d7b7b">Fast</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"100px","containerLightBackgroundColor":"#212121","containerDarkBackgroundColor":"#212121","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"10px"},"containerPadding":{"top":"10px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"space-between"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:10px;--cbb-light-bg-color:#212121;--cbb-dark-bg-color:#212121;justify-content:space-between;min-height:100px;border-radius:10px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"25px","containerMinHeight":"25px","containerLightBackgroundColor":"#515154","containerDarkBackgroundColor":"#515154","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"50%"},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:25px;width:100%;margin:0px;padding:0px;--cbb-light-bg-color:#515154;--cbb-dark-bg-color:#515154;justify-content:center;align-items:center;min-height:25px;border-radius:50%;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/icon {"icon":"hourglass-split","iconsSize":15,"iconsColor":"#ffffff"} -->
<div class="cbb-icon cbb-icon--hourglass-split" style="--cbb-icon-size:15px;--cbb-icon-color:#ffffff;--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"}} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-small"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-x-small-font-size">Track</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#7d7b7b"},"elements":{"link":{"color":{"text":"#7d7b7b"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#7d7b7b">Live</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/grid-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"flex-end"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:flex-end;min-height:auto;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"right","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"18px"}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-right has-base-color has-text-color has-link-color" style="font-size:18px">Simple and Secure</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-right has-base-color has-text-color has-link-color">Built to adapt to your workflow. Get real-time insights, and act with confidence.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMinHeight":"500px","containerLightBackgroundColor":"#ffffff2b","containerDarkBackgroundColor":"#00000061","containerBackgroundImage":{"id":202,"alt":"","url":"<?php echo esc_url($mountain_image_url); ?>"},"containerMargin":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"50px","bottom":"0px","left":"50px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px","metadata":{"categories":["caledros-basic-theme/demo-content"],"patternName":"caledros-basic-theme/hero-section-1","name":"Hero Section 1"}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px 0px 0px 0px;padding:0px 50px 0px 50px;--cbb-light-bg-color:#ffffff2b;--cbb-dark-bg-color:#00000061;justify-content:center;align-items:center;min-height:500px;row-gap:20px;background-image:url(<?php echo esc_url($mountain_image_url); ?>);background-position:50% 50%;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"600px","containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
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

<!-- wp:caledros-basic-blocks/button {"buttonText":"Find more hero sections","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonFontFamily":"inter","buttonFontWeight":500,"buttonLetterSpacing":"2px","buttonPadding":{"top":"5px","right":"15px","bottom":"5px","left":"15px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:var(--wp--preset--color--contrast);--cbb-button-dark-color:var(--wp--preset--color--base);--cbb-button-hover-light-color:var(--wp--preset--color--highlight-1);--cbb-button-hover-dark-color:var(--wp--preset--color--highlight-1);--cbb-button-text-light-color:#f4f4f4;--cbb-button-text-dark-color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--inter);font-weight:500;font-style:normal;font-size:var(--wp--preset--font-size--medium);border-radius:5px;letter-spacing:2px;margin:0px;padding:5px 15px 5px 15px" href="#">Find more hero sections</a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerLightBackgroundColor":"#f0f3fc","containerDarkBackgroundColor":"#ffffff08","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"60px","right":"0px","bottom":"60px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"40px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px auto 0px auto;padding:60px 0px 60px 0px;--cbb-light-bg-color:#f0f3fc;--cbb-dark-bg-color:#ffffff08;justify-content:center;align-items:center;min-height:auto;row-gap:40px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container has-global-padding" style="max-width:100%;width:100%;margin:0px;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0px","top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"50px","lineHeight":"1.2"}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="margin-top:0px;margin-bottom:0px;font-size:50px;font-style:normal;font-weight:700;line-height:1.2">Sliders</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="margin-bottom:0px">Clean, modern sliders perfect for portfolios, products, or custom layouts.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","containerDarkBackgroundColor":"#1f1f1f","containerPadding":{"top":"20px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:20px;--cbb-light-bg-color:var(--wp--preset--color--base);--cbb-dark-bg-color:#1f1f1f;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerFlexDirection":{"desktop":"row","tablet":"column","mobile":"column"},"containerColumnGap":"30px","containerRowGap":"39px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:0px;min-height:auto;row-gap:39px;column-gap:30px;--cbb-fdir-lg:row;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"33%","containerMinHeight":"0px","containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"flex-start","containerRowGap":"10px","fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--full-width-tablet " style="max-width:33%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:flex-start;min-height:0px;row-gap:10px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="line-height:1.2">Autoplay</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This slider offers a clean, <strong>effect-free transition</strong>, perfect for straightforward content presentation. It features <strong>autoplay every 2500ms</strong> and runs in an <strong>endless loop</strong>, ensuring a smooth, hands-free browsing experience without interruption. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Arrow navigation</strong> is also available for users who prefer manual control, making it ideal for showcasing testimonials, announcements, or image galleries with a subtle, professional flow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"66%","containerMinHeight":"370px","fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--full-width-tablet " style="max-width:66%;width:100%;margin:0px;padding:0px;min-height:370px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/links-slider {"identifier":"demo-slider-autoplay","numberOfCards":3,"cardOneSlug":"slider-card-1","cardTwoSlug":"slider-card-2","cardThreeSlug":"slider-card-3","enableLoop":true,"enablePagination":false,"autoplay":{"enableAutoplay":true,"delay":2500},"lightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","darkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)"} /--></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","containerDarkBackgroundColor":"#1f1f1f","containerPadding":{"top":"20px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:20px;--cbb-light-bg-color:var(--wp--preset--color--base);--cbb-dark-bg-color:#1f1f1f;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerFlexDirection":{"desktop":"row","tablet":"column","mobile":"column"},"containerColumnGap":"30px","containerRowGap":"39px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:0px;min-height:auto;row-gap:39px;column-gap:30px;--cbb-fdir-lg:row;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"33%","containerMinHeight":"0px","containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"flex-start","containerRowGap":"10px","fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--full-width-tablet " style="max-width:33%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:flex-start;min-height:0px;row-gap:10px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="line-height:1.2">Image Gallery</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The <strong>Image Gallery</strong> <strong>block </strong>features the same settings available for the <strong>Slider</strong> <strong>block</strong>. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This block is ideal for showcasing a group of selected images, thus enhancing the content of your website.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"66%","containerMinHeight":"370px","fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--full-width-tablet " style="max-width:66%;width:100%;margin:0px;padding:0px;min-height:370px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/image-gallery {"identifier":"demo-gallery-1","enableLoop":true,"autoplay":{"enableAutoplay":true,"delay":2500},"width":"800px","minHeight":"500px","showDemoData":true} /--></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/button {"buttonText":"Check all sliders","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonFontFamily":"inter","buttonFontWeight":500,"buttonLetterSpacing":"2px","buttonMargin":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentMarginsEnabled":true},"buttonPadding":{"top":"5px","right":"15px","bottom":"5px","left":"15px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:var(--wp--preset--color--contrast);--cbb-button-dark-color:var(--wp--preset--color--base);--cbb-button-hover-light-color:var(--wp--preset--color--highlight-1);--cbb-button-hover-dark-color:var(--wp--preset--color--highlight-1);--cbb-button-text-light-color:#f4f4f4;--cbb-button-text-dark-color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--inter);font-weight:500;font-style:normal;font-size:var(--wp--preset--font-size--medium);border-radius:5px;letter-spacing:2px;margin:0px 0px 0px 0px;padding:5px 15px 5px 15px" href="#">Check all sliders</a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerLightBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"60px","right":"0px","bottom":"60px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"40px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px auto 0px auto;padding:60px 0px 60px 0px;--cbb-light-bg-color:var(--wp--preset--color--base);justify-content:center;align-items:center;min-height:auto;row-gap:40px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px"} -->
<div class="cbb-flex-container has-global-padding" style="max-width:100%;width:100%;margin:0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0px","top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"50px","lineHeight":"1.2"}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="margin-top:0px;margin-bottom:0px;font-size:50px;font-style:normal;font-weight:700;line-height:1.2">Misc UI</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"800px","containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"}} -->
<div class="cbb-flex-container" style="max-width:800px;width:100%;margin:0px;padding:0px;min-height:auto;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="margin-bottom:0px">Discover a collection of versatile user interface components, including grid layouts, call-to-action sections, and other reusable design elements for flexible page building.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundColor":"#0d0d0d","containerDarkBackgroundColor":"#0d0d0d","containerMargin":{"top":"0px","right":"auto","bottom":"0px","left":"auto","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px","metadata":{"categories":["caledros-basic-theme/layout"],"patternName":"caledros-basic-theme/grid-layout-1","name":"Grid Layout 1"}} -->
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
<!-- /wp:caledros-basic-blocks/flex-container -->

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
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/button {"buttonText":"Check all components","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonFontFamily":"inter","buttonFontWeight":500,"buttonLetterSpacing":"2px","buttonMargin":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentMarginsEnabled":true},"buttonPadding":{"top":"5px","right":"15px","bottom":"5px","left":"15px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:var(--wp--preset--color--contrast);--cbb-button-dark-color:var(--wp--preset--color--base);--cbb-button-hover-light-color:var(--wp--preset--color--highlight-1);--cbb-button-hover-dark-color:var(--wp--preset--color--highlight-1);--cbb-button-text-light-color:#f4f4f4;--cbb-button-text-dark-color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--inter);font-weight:500;font-style:normal;font-size:var(--wp--preset--font-size--medium);border-radius:5px;letter-spacing:2px;margin:0px 0px 0px 0px;padding:5px 15px 5px 15px" href="#">Check all components</a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->