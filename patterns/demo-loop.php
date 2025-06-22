<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

/**
 * Title: Posts Loop and Category Loop 
 * Slug: caledros-basic-theme/demo-loop
 * Categories: caledros-basic-theme/layout
 */
?>

<!-- wp:caledros-basic-blocks/flex-container {"containerWidth":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dcontent-size)","containerPadding":{"top":"20px","right":"0px","bottom":"20px","left":"0px","differentPaddingsEnabled":true,"useGlobalPadding":false},"containerFlexDirection":{"desktop":"column","tablet":"column","mobile":"column"},"containerRowGap":"15px"} -->
<div class="cbb-flex-container" style="max-width:var(--wp--style--global--content-size);width:100%;margin:0px;padding:20px 0px 20px 0px;min-height:auto;row-gap:15px;--cbb-fdir-lg:column;--cbb-fdir-md:column;--cbb-fdir-sm:column"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Posts and Category Loops</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Caledros Basic Blocks offers custom post and category loop blocks, each with the option to display demo data when no posts or categories are available.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Category Loop Showing Demo Data</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/category-loop {"showDemoData":true} /-->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Posts Loop Showing Demo Data</h2>
<!-- /wp:heading -->

<!-- wp:caledros-basic-blocks/posts-loop {"showDemoData":true} /--></div>
<!-- /wp:caledros-basic-blocks/flex-container -->