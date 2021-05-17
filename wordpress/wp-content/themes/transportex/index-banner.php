<div class="transportex-breadcrumb-section" style='background: url("<?php echo( has_header_image() ? get_header_image() : get_theme_support( 'custom-header', 'default-image' ) ); ?>") #50b9ce;'>
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <?php
            if( class_exists( 'WooCommerce' ) && is_shop() ) { ?>
            <div class="transportex-breadcrumb-title">
            <h1>
            <?php woocommerce_page_title(); ?>
            </h1>
            </div>
            <?php    
            } else { ?>
            <div class="transportex-breadcrumb-title">
              <h1><?php the_title(); ?></h1>
            </div>
            <ul class="transportex-page-breadcrumb">
              <?php if (function_exists('transportex_custom_breadcrumbs')) transportex_custom_breadcrumbs();?>
            </ul>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="clearfix"></div>