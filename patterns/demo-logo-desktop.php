<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Demo Logo Desktop
 * Slug: caledros-basic-theme/demo-logo-desktop
 * Categories: caledros-basic-theme/demo-images
 */
?>

<?php
$theme_logo_desktop = get_template_directory_uri() . '/assets/images/header/theme-logo.webp';
if (!filter_var($theme_logo_desktop , FILTER_VALIDATE_URL)) { 
    $theme_logo_desktop  = ''; 
}
$theme_logo_desktop_300 = get_template_directory_uri() . '/assets/images/header/theme-logo-300x300.webp';
if (!filter_var($theme_logo_desktop_300  , FILTER_VALIDATE_URL)) { 
    $theme_logo_desktop_300   = ''; 
}
?>
<!-- wp:caledros-basic-blocks/responsive-image {"sourceImage":{"id":85,"alt":"Caledros Basic Theme logo","url":"<?php echo esc_url($theme_logo_desktop); ?>","height":512,"width":512,"srcSet":"<?php echo esc_url($theme_logo_desktop_300); ?> 300w, <?php echo esc_url($theme_logo_desktop); ?> 512w","sizes":"(max-width:512px) 100vw, 512px"},"imgWidth":{"content":"65px","defaultWidthEnabled":true},"imgHeight":{"content":"100%","defaultHeightEnabled":false},"imgObjectFit":"contain","imgPadding":{"top":"5px","right":"0px","bottom":"5px","left":"0px","differentPaddingsEnabled":true},"imgLink":"<?php echo esc_url(home_url()); ?>","className":"cf-resp-img"} -->
<figure class="cbb-resp-img cf-resp-img" style="padding:5px 0px 5px 0px;max-width:512px;height:100%"><a class="cbb-resp-img__link" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($theme_logo_desktop); ?>" alt="<?php echo esc_attr_x( 'Caledros Basic Theme logo', 'Alt text', 'caledros-basic-theme' ); ?>" width="512" height="512" style="object-fit:contain;width:100%;height:100%;aspect-ratio:512/512" srcset="<?php echo esc_url($theme_logo_desktop_300); ?> 300w, <?php echo esc_url($theme_logo_desktop); ?> 512w" sizes="(max-width:512px) 100vw, 512px"/></a></figure>
<!-- /wp:caledros-basic-blocks/responsive-image -->