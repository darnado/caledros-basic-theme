<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Demo Header
 * Slug: caledros-basic-theme/demo-header
 * Categories: caledros-basic-theme/layout
 */
?>

<?php
$theme_logo = get_template_directory_uri() . '/assets/images/header/theme-logo.webp';
if (!filter_var($theme_logo , FILTER_VALIDATE_URL)) { 
    $theme_logo  = ''; 
}
$theme_logo_300 = get_template_directory_uri() . '/assets/images/header/theme-logo-300x300.webp';
if (!filter_var($theme_logo_300, FILTER_VALIDATE_URL)) { 
    $theme_logo_300 = ''; 
}
?>

<!-- wp:caledros-basic-blocks/desktop-menu-container {"containerHeight":"80px","containerLightBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","containerDarkBackgroundColor":"#272730","containerBorder":{"style":"solid","width":"0px 0px 1px 0px","lightColor":"#e0eadf","darkColor":"#ffffff45","radius":"0px"},"containerPadding":{"top":"0px","right":"0px","bottom":"0px","left":"0px","differentPaddingsEnabled":false,"useGlobalPadding":true},"containerJustifyContent":"center","stickyNavigationEnabled":true,"stickyNavHeight":"60px","stickyNavLightBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","stickyNavDarkBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase-dark)"} -->
<div class="cbb-desktop-menu-container__watcher"></div><div class="cbb-desktop-menu-container has-global-padding cbb-desktop-menu-container--sticky cbb-desktop-menu-container--has-bg-color cbb-desktop-menu-container--has-border" style="max-width:100%;width:100%;margin:0px;--cbb-dm-light-bg-color:var(--wp--preset--color--base);--cbb-dm-dark-bg-color:#272730;justify-content:center;align-items:center;--cbb-dm-height:80px;border-style:solid;border-width:0px 0px 1px 0px;--cbb-dm-light-border-color:#e0eadf;--cbb-dm-dark-border-color:#ffffff45;--cbb-dm-sticky-height:60px;--cbb-dm-sticky-light-bg-color:var(--wp--preset--color--base);--cbb-dm-sticky-dark-bg-color:var(--wp--preset--color--base-dark);left:0;right:0;--cbb-dm-position:relative"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dwide-size)"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--wide-size);width:100%;margin:0px;padding:0px;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"4px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;column-gap:4px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/responsive-image {"sourceImage":{"id":85,"alt":"Caledros Basic Theme logo","url":"<?php echo esc_url($theme_logo);?>","height":512,"width":512,"srcSet":"<?php echo esc_url($theme_logo_300);?> 300w, <?php echo esc_url($theme_logo);?> 512w","sizes":"(max-width:512px) 100vw, 512px"},"imgWidth":{"content":"65px","defaultWidthEnabled":true},"imgHeight":{"content":"100%","defaultHeightEnabled":false},"imgObjectFit":"contain","imgPadding":{"top":"5px","right":"0px","bottom":"5px","left":"0px","differentPaddingsEnabled":true},"imgLink":"#"} -->
<figure class="cbb-resp-img" style="padding:5px 0px 5px 0px;max-width:512px;height:100%"><a class="cbb-resp-img__link" href="#"><img src="<?php echo esc_url($theme_logo);?>" alt="Caledros Basic Theme logo" width="512" height="512" style="object-fit:contain;width:100%;height:100%;aspect-ratio:512/512" srcset="<?php echo esc_url($theme_logo_300);?> 300w, <?php echo esc_url($theme_logo);?> 512w" sizes="(max-width:512px) 100vw, 512px"/></a></figure>
<!-- /wp:caledros-basic-blocks/responsive-image -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerColumnGap":"0","containerRowGap":"4px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:4px;column-gap:0;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"className":"cf-header-link","style":{"typography":{"lineHeight":"0.8","fontSize":"25px"}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading cf-header-link has-inter-font-family" style="font-size:25px;line-height:0.8">CALEDROS</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"21px","letterSpacing":"0.5px","lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"ephesis"} -->
<p class="has-ephesis-font-family" style="font-size:21px;font-style:normal;font-weight:400;letter-spacing:0.5px;line-height:1.1">Basic Theme</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerJustifyContent":"center","containerAlignItems":"center","containerColumnGap":"18px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:center;align-items:center;min-height:auto;column-gap:18px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerJustifyContent":"flex-end","containerAlignItems":"center"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;justify-content:flex-end;align-items:center;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/dark-light-mode-switcher {"className":"cf-dark-light-switcher"} -->
<div class="cbb-dark-light-switcher cf-dark-light-switcher"><label class="cbb-dark-light-switcher__toggle"><input type="checkbox" class="cbb-dark-light-switcher__checkbox" name="cbb-dark-mode-switcher"/><span class="cbb-dark-light-switcher__slider"></span></label></div>
<!-- /wp:caledros-basic-blocks/dark-light-mode-switcher --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div><div class="cbb-desktop-menu-container__spacer-bottom" style="--cbb-spacer-bottom:80px"></div>
<!-- /wp:caledros-basic-blocks/desktop-menu-container -->

<!-- wp:caledros-basic-blocks/mobile-menu-container {"containerHeight":"60px","containerLightBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","containerDarkBackgroundColor":"#272730","containerBorder":{"style":"solid","width":"0px 0px 1px 0px","lightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dneutral-1)","darkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","radius":"0px"},"containerPadding":{"top":"0px","right":"10px","bottom":"0px","left":"10px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerJustifyContent":"center"} -->
<div class="cbb-mobile-menu-container cbb-mobile-menu-container--has-bg-color cbb-mobile-menu-container--has-border" style="max-width:100%;width:100%;margin:0px;padding:0px 10px 0px 10px;--cbb-mm-light-bg-color:var(--wp--preset--color--base);--cbb-mm-dark-bg-color:#272730;justify-content:center;align-items:center;--cbb-mm-height:60px;border-style:solid;border-width:0px 0px 1px 0px;--cbb-mm-light-border-color:var(--wp--preset--color--neutral-1);--cbb-mm-dark-border-color:var(--wp--preset--color--contrast-dark);left:0;right:0;--cbb-dm-position:relative"><!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dwide-size)"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--wide-size);width:100%;margin:0px;padding:0px;min-height:auto;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/flex-container {"containerAlignItems":"center","containerColumnGap":"8px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;align-items:center;min-height:auto;column-gap:8px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/responsive-image {"sourceImage":{"id":85,"alt":"Caledros Basic Theme logo","url":"<?php echo esc_url($theme_logo);?>","height":512,"width":512,"srcSet":"<?php echo esc_url($theme_logo_300);?> 300w, <?php echo esc_url($theme_logo);?> 512w","sizes":"(max-width:512px) 100vw, 512px"},"imgWidth":{"content":"44px","defaultWidthEnabled":false},"imgHeight":{"content":"75%","defaultHeightEnabled":false},"imgObjectFit":"contain","imgLink":"#"} -->
<figure class="cbb-resp-img" style="max-width:44px;height:75%"><a class="cbb-resp-img__link" href="#"><img src="<?php echo esc_url($theme_logo);?>" alt="Caledros Basic Theme logo" width="512" height="512" style="object-fit:contain;width:100%;height:100%;aspect-ratio:512/512" srcset="<?php echo esc_url($theme_logo_300);?> 300w, <?php echo esc_url($theme_logo);?> 512w" sizes="(max-width:512px) 100vw, 512px"/></a></figure>
<!-- /wp:caledros-basic-blocks/responsive-image -->

<!-- wp:caledros-basic-blocks/flex-container {"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerColumnGap":"0","containerRowGap":"2px"} -->
<div class="cbb-flex-container" style="max-width:100%;width:100%;margin:0px;padding:0px;min-height:auto;row-gap:2px;column-gap:0;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"className":"cf-header-link","style":{"typography":{"lineHeight":"0.8","fontSize":"16px"}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading cf-header-link has-inter-font-family" style="font-size:16px;line-height:0.8">CALEDROS</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","letterSpacing":"0.5px","lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"ephesis"} -->
<p class="has-ephesis-font-family" style="font-size:15px;font-style:normal;font-weight:400;letter-spacing:0.5px;line-height:1.1">Basic Theme</p>
<!-- /wp:paragraph --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container -->

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"20%","containerJustifyContent":"flex-end","containerAlignItems":"center","containerColumnGap":"9px"} -->
<div class="cbb-flex-container" style="max-width:20%;width:100%;margin:0px;padding:0px;justify-content:flex-end;align-items:center;min-height:auto;column-gap:9px;--cbb-fdir-lg:row;--cbb-fdir-md:row;--cbb-fdir-sm:row"><!-- wp:caledros-basic-blocks/dark-light-mode-switcher -->
<div class="cbb-dark-light-switcher"><label class="cbb-dark-light-switcher__toggle"><input type="checkbox" class="cbb-dark-light-switcher__checkbox" name="cbb-dark-mode-switcher"/><span class="cbb-dark-light-switcher__slider"></span></label></div>
<!-- /wp:caledros-basic-blocks/dark-light-mode-switcher -->

<!-- wp:caledros-basic-blocks/sidebar-menu {"sidebarSlug":"sidebar-menu","lightBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","darkBackgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase-dark)","buttonLightColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast)","buttonDarkColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-dark)","closeButtonStyles":{"buttonHeight":"40px","buttonWidth":"40px","buttonBorderWidth":"0px","buttonBorderRadius":"5px","barsHeight":"4px","barsWidth":"35px","barsBorderRadius":"50px"}} /--></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/flex-container --></div>
<!-- /wp:caledros-basic-blocks/mobile-menu-container -->