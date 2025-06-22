<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Hero Page
 * Slug: caledros-basic-theme/hero-page
 * Categories: caledros-basic-theme/demo-content
 */
?>

<?php
$sun_beach_image_url = get_template_directory_uri() . '/assets/images/patterns/sun-beach.webp';
if (!filter_var($sun_beach_image_url, FILTER_VALIDATE_URL)) { 
    $sun_beach_image_url = ''; 
}
$mountain_image_url = get_template_directory_uri() . '/assets/images/patterns/hero1.webp';
if (!filter_var($mountain_image_url, FILTER_VALIDATE_URL)) { 
    $mountain_image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerMargin":{"top":"40px","right":"0px","bottom":"0px","left":"0px","differentMarginsEnabled":true},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container has-global-padding" style="max-width:100%;width:100%;margin:40px 0px 0px 0px;justify-content:center;align-items:center;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMargin":{"top":"0px","right":"0px","bottom":"40px","left":"0px","differentMarginsEnabled":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px 0px 40px 0px;padding:0px;min-height:auto;row-gap:20px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px","lineHeight":"1.2"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:60px;line-height:1.2">Hero Sections</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Whether you're showcasing a product, telling a story, or driving conversions, these hero sections provide a solid foundation for creating standout landing pages. Perfect for developers, designers, or anyone looking to prototype quickly and effectively.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The Hero Sections page is a curated collection of reusable, pre-designed hero layouts crafted to kickstart any web project with impactful first impressions. Each section includes a combination of headings, subtext, and supporting elements like cards, images, or columns—designed to be both flexible and visually engaging. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMargin":{"top":"0px","right":"0px","bottom":"40px","left":"0px","differentMarginsEnabled":true},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"40px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px 0px 40px 0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:40px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundColor":"#00000052","containerDarkBackgroundColor":"#00000052","containerBackgroundImage":{"id":1253,"alt":"","url":"<?php echo esc_url($sun_beach_image_url); ?>"},"containerBgImageFocalPoint":{"x":0.06,"y":0.51},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"metadata":{"categories":["caledros-basic-theme/hero-sections"],"patternName":"caledros-basic-theme/hero-section-4","name":"Hero Section 4"}} -->
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

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerLightBackgroundGradient":"radial-gradient(rgb(10,83,25) 34%,rgb(0,0,0) 93%)","containerDarkBackgroundGradient":"radial-gradient(rgb(10,83,25) 40%,rgb(0,0,0) 96%)","containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"metadata":{"categories":["caledros-basic-theme/hero-sections"],"patternName":"caledros-basic-theme/hero-section-3","name":"Hero Section 3"}} -->
<div class="cbb-flex-container has-global-padding cbb-flex-container--has-bg-gradient" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;min-height:auto;--cbb-dark-bg-gradient:radial-gradient(rgb(10,83,25) 40%,rgb(0,0,0) 96%);--cbb-light-bg-gradient:radial-gradient(rgb(10,83,25) 34%,rgb(0,0,0) 93%);--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMinHeight":"500px","containerPadding":{"top":"80px","right":"0px","bottom":"80px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"25px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:80px 0px 80px 0px;justify-content:center;align-items:center;min-height:500px;row-gap:25px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"60px","lineHeight":"1.2"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:60px;line-height:1.2">Unlock Your Potential</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"500px"} -->
<div class="cbb-flex-container" style="max-width:500px;width:100%;margin:0px;padding:0px;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color">Discover tools, insights, and inspiration tailored to help you take the next step. Whether you're just starting out or scaling up, we're here to support your journey.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"200px","containerLightBackgroundColor":"#ffffff3d","containerDarkBackgroundColor":"#ffffff3d","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"3px","right":"0px","bottom":"3px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerJustifyContent":"center","containerColumnGap":"6px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:200px;width:100%;margin:0px;padding:3px 0px 3px 0px;--cbb-light-bg-color:#ffffff3d;--cbb-dark-bg-color:#ffffff3d;justify-content:center;min-height:auto;column-gap:6px;border-radius:20px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"60px","containerLightBackgroundColor":"#000000","containerDarkBackgroundColor":"#000000","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"8px","right":"30px","bottom":"8px","left":"30px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:60px;width:100%;margin:0px;padding:8px 30px 8px 30px;--cbb-light-bg-color:#000000;--cbb-dark-bg-color:#000000;justify-content:center;align-items:center;min-height:auto;border-radius:20px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/social-icons-group {"iconsGap":15,"socialIconsSize":15,"socialIconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-social-icons-group" style="margin:0px;gap:15px;--cbb-social-icon-size:15px;--cbb-social-icon-color:var(--wp--preset--color--base);--cbb-social-icon-dark-color:#ffffff"><!-- wp:caledros-basic-blocks/social-icon {"socialMediaIcon":"twitter-x"} -->
<div class="cbb-social-icon cbb-social-icon--twitter-x"><span class="cbb-social-icon__icon-container"></span><a href="#" class="cbb-social-icon__main-link" aria-label="twitter-x"></a></div>
<!-- /wp:caledros-basic-blocks/social-icon --></div>
<!-- /wp:caledros-basic-blocks/social-icons-group --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"60px","containerLightBackgroundColor":"#000000","containerDarkBackgroundColor":"#000000","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"8px","right":"30px","bottom":"8px","left":"30px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:60px;width:100%;margin:0px;padding:8px 30px 8px 30px;--cbb-light-bg-color:#000000;--cbb-dark-bg-color:#000000;justify-content:center;align-items:center;min-height:auto;border-radius:20px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/social-icons-group {"iconsGap":15,"socialIconsSize":15,"socialIconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-social-icons-group" style="margin:0px;gap:15px;--cbb-social-icon-size:15px;--cbb-social-icon-color:var(--wp--preset--color--base);--cbb-social-icon-dark-color:#ffffff"><!-- wp:caledros-basic-blocks/social-icon {"socialMediaIcon":"instagram"} -->
<div class="cbb-social-icon cbb-social-icon--instagram"><span class="cbb-social-icon__icon-container"></span><a href="#" class="cbb-social-icon__main-link" aria-label="instagram"></a></div>
<!-- /wp:caledros-basic-blocks/social-icon --></div>
<!-- /wp:caledros-basic-blocks/social-icons-group --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"60px","containerLightBackgroundColor":"#000000","containerDarkBackgroundColor":"#000000","containerBorder":{"style":"none","width":"0px","lightColor":"#00000000","darkColor":"#00000000","radius":"20px"},"containerPadding":{"top":"8px","right":"30px","bottom":"8px","left":"30px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:60px;width:100%;margin:0px;padding:8px 30px 8px 30px;--cbb-light-bg-color:#000000;--cbb-dark-bg-color:#000000;justify-content:center;align-items:center;min-height:auto;border-radius:20px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/social-icons-group {"iconsGap":15,"socialIconsSize":15,"socialIconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"} -->
<div class="cbb-social-icons-group" style="margin:0px;gap:15px;--cbb-social-icon-size:15px;--cbb-social-icon-color:var(--wp--preset--color--base);--cbb-social-icon-dark-color:#ffffff"><!-- wp:caledros-basic-blocks/social-icon {"socialMediaIcon":"tiktok"} -->
<div class="cbb-social-icon cbb-social-icon--tiktok"><span class="cbb-social-icon__icon-container"></span><a href="#" class="cbb-social-icon__main-link" aria-label="tiktok"></a></div>
<!-- /wp:caledros-basic-blocks/social-icon --></div>
<!-- /wp:caledros-basic-blocks/social-icons-group --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/grid-container {"containerWidth":"800px","numberOfColumns":3,"numberOfColumnsTablet":3,"containerRowGap":"20px","containerColumnGap":"20px"} -->
<div class="cbb-grid-container" style="max-width:800px;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:20px;column-gap:20px;--cbb-col-lg:3;--cbb-col-md:3;--cbb-col-sm:1"><!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"150px","containerLightBackgroundColor":"#000000a8","containerDarkBackgroundColor":"#000000a8","containerBorder":{"style":"none","width":"2px","lightColor":"#ffffff1a","darkColor":"#ffffff69","radius":"20px"},"containerBoxShadow":{"enabled":true,"hOffset":"5px","vOffset":"5px","blur":"0px","spread":"0px","lightColor":"#000000","darkColor":"#000000","style":""},"containerPadding":{"top":"10px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-box-shadow cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:10px;--cbb-light-bg-color:#000000a8;--cbb-dark-bg-color:#000000a8;justify-content:center;align-items:center;min-height:150px;border-radius:20px;--cbb-light-box-shadow: 5px 5px 0px 0px #000000;--cbb-dark-box-shadow: 5px 5px 0px 0px #000000;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"10px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;column-gap:10px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color">Grow Smarter</h3>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/icon {"icon":"building","iconsSize":20,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)"} -->
<div class="cbb-icon cbb-icon--building" style="--cbb-icon-size:20px;--cbb-icon-color:var(--wp--preset--color--contrast-dark);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#7d7b7b"}}},"color":{"text":"#7d7b7b"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#7d7b7b">Strategies tailored for real results.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"150px","containerLightBackgroundColor":"#000000a8","containerDarkBackgroundColor":"#000000a8","containerBorder":{"style":"none","width":"2px","lightColor":"#ffffff1a","darkColor":"#ffffff69","radius":"20px"},"containerBoxShadow":{"enabled":true,"hOffset":"5px","vOffset":"5px","blur":"0px","spread":"0px","lightColor":"#000000","darkColor":"#000000","style":""},"containerPadding":{"top":"10px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-box-shadow cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:10px;--cbb-light-bg-color:#000000a8;--cbb-dark-bg-color:#000000a8;justify-content:center;align-items:center;min-height:150px;border-radius:20px;--cbb-light-box-shadow: 5px 5px 0px 0px #000000;--cbb-dark-box-shadow: 5px 5px 0px 0px #000000;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"10px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;column-gap:10px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color">Move Faster</h3>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/icon {"iconsSize":20,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)"} -->
<div class="cbb-icon cbb-icon--alarm-fill" style="--cbb-icon-size:20px;--cbb-icon-color:var(--wp--preset--color--contrast-dark);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#7d7b7b"}}},"color":{"text":"#7d7b7b"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#7d7b7b">Tools that speed up your workflow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"150px","containerLightBackgroundColor":"#000000a8","containerDarkBackgroundColor":"#000000a8","containerBorder":{"style":"none","width":"2px","lightColor":"#ffffff1a","darkColor":"#ffffff69","radius":"20px"},"containerBoxShadow":{"enabled":true,"hOffset":"5px","vOffset":"5px","blur":"0px","spread":"0px","lightColor":"#000000","darkColor":"#000000","style":""},"containerPadding":{"top":"10px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center"} -->
<div class="cbb-flex-container cbb-flex-container--has-box-shadow cbb-flex-container--has-bg-color" style="max-width:100%;width:100%;margin:0px;padding:10px;--cbb-light-bg-color:#000000a8;--cbb-dark-bg-color:#000000a8;justify-content:center;align-items:center;min-height:150px;border-radius:20px;--cbb-light-box-shadow: 5px 5px 0px 0px #000000;--cbb-dark-box-shadow: 5px 5px 0px 0px #000000;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"10px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;column-gap:10px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color">Go Further</h3>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/icon {"icon":"rocket-takeoff","iconsSize":20,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)"} -->
<div class="cbb-icon cbb-icon--rocket-takeoff" style="--cbb-icon-size:20px;--cbb-icon-color:var(--wp--preset--color--contrast-dark);--cbb-icon-dark-color:#ffffff"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#7d7b7b"}}},"color":{"text":"#7d7b7b"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#7d7b7b">Support that scales with your ambition.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/grid-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMinHeight":"500px","containerLightBackgroundColor":"#ffffff2b","containerDarkBackgroundColor":"#00000061","containerBackgroundImage":{"id":202,"alt":"","url":"<?php echo esc_url($mountain_image_url); ?>"},"containerPadding":{"top":"0px","right":"50px","bottom":"0px","left":"50px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"20px","metadata":{"categories":["caledros-basic-theme/hero-sections"],"patternName":"caledros-basic-theme/hero-section-1","name":"Hero Section 1"}} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-color" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:0px 50px 0px 50px;--cbb-light-bg-color:#ffffff2b;--cbb-dark-bg-color:#00000061;justify-content:center;align-items:center;min-height:500px;row-gap:20px;background-image:url(<?php echo esc_url($mountain_image_url); ?>);background-position:50% 50%;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"600px","containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"15px"} -->
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

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMinHeight":"500px","containerLightBackgroundGradient":"linear-gradient(149deg,rgb(0,0,0) 0%,rgb(13,34,125) 65%)","containerDarkBackgroundGradient":"linear-gradient(149deg,rgb(0,0,0) 0%,rgb(13,34,125) 70%)","containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerJustifyContent":"center","containerAlignItems":"center","metadata":{"categories":["caledros-basic-theme/hero-sections"],"patternName":"caledros-basic-theme/hero-section-2","name":"Hero Section 2"}} -->
<div class="cbb-flex-container has-global-padding cbb-flex-container--has-bg-gradient" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;justify-content:center;align-items:center;min-height:500px;--cbb-dark-bg-gradient:linear-gradient(149deg,rgb(0,0,0) 0%,rgb(13,34,125) 70%);--cbb-light-bg-gradient:linear-gradient(149deg,rgb(0,0,0) 0%,rgb(13,34,125) 65%);--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerPadding":{"top":"60px","right":"0px","bottom":"60px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column"},"containerJustifyContent":"space-between","containerAlignItems":"center","containerRowGap":"30px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:60px 0px 60px 0px;justify-content:space-between;align-items:center;min-height:auto;row-gap:30px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"50%","containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"30px","fullWidthMobileEnabled":true,"fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--full-width-tablet  cbb-flex-container--full-width-mobile" style="max-width:50%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:30px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"60px","lineHeight":"1.2"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:60px;line-height:1.2">Unlock Your Next Big Idea</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color">Discover tools, insights, and inspiration tailored to help you take the next step. Whether you're just starting out or scaling up, we're here to support your journey.</p>
<!-- /wp:paragraph -->

<!-- wp:caledros-basic-blocks/flex-container {"containerColumnGap":"10px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;column-gap:10px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/button {"buttonText":"Get Started","buttonLightColor":"#3ab8d3","buttonDarkColor":"#3ab8d3","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","buttonFontFamily":"inter","buttonFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)","buttonLetterSpacing":"2px","buttonPadding":{"top":"5px","right":"15px","bottom":"5px","left":"15px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:#3ab8d3;--cbb-button-dark-color:#3ab8d3;--cbb-button-hover-light-color:var(--wp--preset--color--highlight-1);--cbb-button-hover-dark-color:var(--wp--preset--color--highlight-1);--cbb-button-text-light-color:#f4f4f4;--cbb-button-text-dark-color:var(--wp--preset--color--base);font-family:var(--wp--preset--font-family--inter);font-weight:400;font-style:normal;font-size:var(--wp--preset--font-size--small);border-radius:5px;letter-spacing:2px;margin:0px;padding:5px 15px 5px 15px" href="#">Get Started</a>
<!-- /wp:caledros-basic-blocks/button -->

<!-- wp:caledros-basic-blocks/button {"buttonText":"Learn more \u003e","buttonLightColor":"#00000000","buttonDarkColor":"#00000000","buttonHoverLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonHoverDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dhighlight-1)","buttonTextLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonTextDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","buttonFontFamily":"inter","buttonFontSize":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dsmall)","buttonLetterSpacing":"2px","buttonBorder":{"style":"solid","width":"1px","lightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","darkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","radius":"5px"},"buttonPadding":{"top":"5px","right":"15px","bottom":"5px","left":"15px","differentPaddingsEnabled":true}} -->
<a class="cbb-button" style="--cbb-button-light-color:#00000000;--cbb-button-dark-color:#00000000;--cbb-button-hover-light-color:var(--wp--preset--color--highlight-1);--cbb-button-hover-dark-color:var(--wp--preset--color--highlight-1);--cbb-button-text-light-color:var(--wp--preset--color--contrast-dark);--cbb-button-text-dark-color:var(--wp--preset--color--contrast-dark);font-family:var(--wp--preset--font-family--inter);font-weight:400;font-style:normal;font-size:var(--wp--preset--font-size--small);border-style:solid;border-width:1px;--cbb-button-light-border-color:var(--wp--preset--color--contrast-dark);--cbb-button-dark-border-color:var(--wp--preset--color--contrast-dark);border-radius:5px;letter-spacing:2px;margin:0px;padding:5px 15px 5px 15px" href="#">Learn more ></a>
<!-- /wp:caledros-basic-blocks/button --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"50%","containerJustifyContent":"flex-end","containerAlignItems":"center","fullWidthMobileEnabled":true,"fullWidthTabletEnabled":true} -->
<div class="cbb-flex-container cbb-flex-container--full-width-tablet  cbb-flex-container--full-width-mobile" style="max-width:50%;width:100%;margin:0px;padding:0px;justify-content:flex-end;align-items:center;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/icon {"icon":"buildings","iconsSize":300,"iconsColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","iconsDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)"} -->
<div class="cbb-icon cbb-icon--buildings" style="--cbb-icon-size:300px;--cbb-icon-color:var(--wp--preset--color--contrast-dark);--cbb-icon-dark-color:var(--wp--preset--color--contrast-dark)"><span class="cbb-icon__icon-container"></span><span class="cbb-icon__simple-icon"></span></div>
<!-- /wp:caledros-basic-blocks/icon --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->