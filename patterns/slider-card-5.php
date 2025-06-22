<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Demo Slider Card 5
 * Slug: caledros-basic-theme/demo-slider-card-5
 * Categories: caledros-basic-theme/slider-cards
 */
?>
<?php
$image_url = get_template_directory_uri() . '/assets/images/large-slider/ocean-view.webp';
if (!filter_var($image_url, FILTER_VALIDATE_URL)) { 
    $image_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerMinHeight":"600px","containerBackgroundImage":{"id":846,"alt":"Ocean View","url":"<?php echo esc_url($image_url); ?>"},"containerBgImageFocalPoint":{"x":0.54,"y":0.49},"containerLightBackgroundGradient":"linear-gradient(180deg,rgba(0,0,0,0.33) 1%,rgba(0,0,0,0.33) 100%)","containerDarkBackgroundGradient":"linear-gradient(180deg,rgba(0,0,0,0.33) 0%,rgba(0,0,0,0.33) 100%)","containerPadding":{"top":"0px","right":"30px","bottom":"30px","left":"30px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerJustifyContent":"center","containerAlignItems":"center","containerRowGap":"11px"} -->
<div class="cbb-flex-container cbb-flex-container--has-bg-gradient" style="max-width:100%;width:100%;margin:0px;padding:0px 30px 30px 30px;justify-content:center;align-items:center;min-height:600px;row-gap:11px;--cbb-dark-bg-gradient:linear-gradient(180deg,rgba(0,0,0,0.33) 0%,rgba(0,0,0,0.33) 100%), url(<?php echo esc_url($image_url); ?>);--cbb-light-bg-gradient:linear-gradient(180deg,rgba(0,0,0,0.33) 1%,rgba(0,0,0,0.33) 100%), url(<?php echo esc_url($image_url); ?>);background-position:54% 49%;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","className":"demo-large-slider-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|paragraph-dark"}}},"typography":{"lineHeight":"1.2","fontSize":"100px"}},"textColor":"paragraph-dark","fontFamily":"ephesis"} -->
<h2 class="wp-block-heading has-text-align-center demo-large-slider-title has-paragraph-dark-color has-text-color has-link-color has-ephesis-font-family" style="font-size:100px;line-height:1.2"><em>Seamless Performance</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"demo-large-slider-subtitle","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1.5","fontSize":"22px"}},"textColor":"base"} -->
<p class="has-text-align-center demo-large-slider-subtitle has-base-color has-text-color has-link-color" style="font-size:22px;line-height:1.5">Speed, stability, and style—redefined</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->