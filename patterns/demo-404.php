<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Demo 404
 * Slug: caledros-basic-theme/demo-404
 * Categories: caledros-basic-theme/demo-images
 */
?>
<?php
$image_url = get_template_directory_uri() . '/assets/images/404/404.webp';
if (!filter_var($image_url, FILTER_VALIDATE_URL)) { 
    $image_url = ''; 
}
$image_300_url = get_template_directory_uri() . '/assets/images/404/404-300x225.webp';
if (!filter_var($image_300_url, FILTER_VALIDATE_URL)) { 
    $image_300_url = ''; 
}
$image_srcset = $image_300_url . ' 300w, ' . $image_url . ' 800w';
?>

<!-- wp:caledros-basic-blocks/responsive-image {"sourceImage":{"id":0,"alt":"Page not found","url":"<?php echo esc_url($image_url); ?>","height":600,"width":800,"srcSet":"<?php echo esc_attr($image_srcset); ?>","sizes":"(max-width:800px) 100vw, 800px"},"imgBorder":{"style":"none","width":"0px","color":"#00000000","radius":"30px"}} -->
<figure class="cbb-resp-img" style="max-width:800px;height:auto">
  <img 
    src="<?php echo esc_url($image_url); ?>" 
    alt="<?php echo esc_attr_x( 'Page not found', 'Alt text', 'caledros-basic-theme' ); ?>" 
    width="800" 
    height="600" 
    style="object-fit:cover;width:100%;height:100%;aspect-ratio:800/600;border-radius:30px" 
    srcset="<?php echo esc_attr($image_srcset); ?>" 
    sizes="(max-width:800px) 100vw, 800px" />
</figure>
<!-- /wp:caledros-basic-blocks/responsive-image -->

