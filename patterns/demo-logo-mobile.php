<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Demo Logo Mobile
 * Slug: caledros-basic-theme/demo-logo-mobile
 * Categories: caledros-basic-theme/demo-images
 */
?>

<?php
$theme_logo_mobile = get_template_directory_uri() . '/assets/images/header/theme-logo.webp';
if (!filter_var($theme_logo_mobile , FILTER_VALIDATE_URL)) { 
    $theme_logo_mobile  = ''; 
}
$theme_logo_mobile_300 = get_template_directory_uri() . '/assets/images/header/theme-logo-300x300.webp';
if (!filter_var($theme_logo_mobile_300  , FILTER_VALIDATE_URL)) { 
    $theme_logo_mobile_300   = ''; 
}
?>

<!-- wp:caledros-basic-blocks/responsive-image {"sourceImage":{"id":85,"alt":"Caledros Basic Theme logo","url":"<?php echo esc_url($theme_logo_mobile); ?>","height":512,"width":512,"srcSet":"<?php echo esc_url($theme_logo_mobile_300); ?> 300w, <?php echo esc_url($theme_logo_mobile); ?> 512w","sizes":"(max-width:512px) 100vw, 512px"},"imgWidth":{"content":"44px","defaultWidthEnabled":false},"imgHeight":{"content":"75%","defaultHeightEnabled":false},"imgObjectFit":"contain","imgLink":"<?php echo esc_url(home_url()); ?>","className":"cf-resp-img"} -->
<figure class="cbb-resp-img cf-resp-img" style="max-width:44px;height:75%"><a class="cbb-resp-img__link" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($theme_logo_mobile); ?>" alt="<?php echo esc_attr_x( 'Caledros Basic Theme logo', 'Alt text', 'caledros-basic-theme' ); ?>" width="512" height="512" style="object-fit:contain;width:100%;height:100%;aspect-ratio:512/512" srcset="<?php echo esc_url($theme_logo_mobile_300); ?> 300w, <?php echo esc_url($theme_logo_mobile); ?> 512w" sizes="(max-width:512px) 100vw, 512px"/></a></figure>
<!-- /wp:caledros-basic-blocks/responsive-image -->