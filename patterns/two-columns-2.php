<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Two Columns 2
 * Slug: caledros-basic-theme/two-columns-2
 * Categories: caledros-basic-theme/layout
 */
?>
<?php
$buildings_image_url = get_template_directory_uri() . '/assets/images/patterns/buildings.webp';
if (!filter_var($buildings_image_url, FILTER_VALIDATE_URL)) { 
    $buildings_image_url = ''; 
}

$buildings_image_768_url = get_template_directory_uri() . '/assets/images/patterns/buildings-768x768.webp';
if (!filter_var($buildings_image_768_url, FILTER_VALIDATE_URL)) { 
    $buildings_image_768_url = ''; 
}

$buildings_image_300_url = get_template_directory_uri() . '/assets/images/patterns/buildings-300x300.webp';
if (!filter_var($buildings_image_300_url, FILTER_VALIDATE_URL)) { 
    $buildings_image_300_url = ''; 
}
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerMargin":{"top":"20px","right":"0px","bottom":"20px","left":"0px","differentMarginsEnabled":true},"containerFlexDirection":{"desktop":"row","tablet":"row","mobile":"column-reverse"},"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"20px","containerRowGap":"20px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:20px 0px 20px 0px;padding:0px;justify-content:center;align-items:center;min-height:auto;row-gap:20px;column-gap:20px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:column-reverse"><!-- wp:caledros-basic-blocks/flex-container -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/responsive-image {"sourceImage":{"id":265,"alt":"About section","url":"<?php echo esc_url($buildings_image_url); ?>","height":800,"width":800,"srcSet":"<?php echo esc_url($buildings_image_300_url); ?> 300w, <?php echo esc_url($buildings_image_768_url); ?> 768w, <?php echo esc_url($buildings_image_url); ?> 800w","sizes":"(max-width:800px) 100vw, 800px"},"imgFilter":{"type":"none","content":"0","hOffset":"0px","vOffset":"0px","blur":"0px","color":"#000"}} -->
<figure class="cbb-resp-img" style="max-width:800px;height:auto"><img src="<?php echo esc_url($buildings_image_url); ?>" alt="About section" width="800" height="800" style="object-fit:cover;width:100%;height:100%;aspect-ratio:800/800" srcset="<?php echo esc_url($buildings_image_300_url); ?> 300w, <?php echo esc_url($buildings_image_768_url); ?> 768w, <?php echo esc_url($buildings_image_url); ?> 800w" sizes="(max-width:800px) 100vw, 800px"/></figure>
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
<!-- /wp:caledros-basic-blocks/flex-container -->

