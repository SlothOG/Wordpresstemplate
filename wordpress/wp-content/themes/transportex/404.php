<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package transportex
 */
get_header(); ?>
<div class="transportex-breadcrumb-section" style='background: url("<?php echo( has_header_image() ? get_header_image() : get_theme_support( 'custom-header', 'default-image' ) ); ?>") #50b9ce;'>
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="transportex-page-breadcrumb">
              <li><a href="<?php echo esc_url(home_url());?>"><i class="fa fa-home"></i></a></li>
              <li class="active"><a href="<?php echo esc_url(home_url());?>"><?php esc_html_e('404','transportex'); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
<main id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center transportex-section">
        <div class="transportex-error-404">
          <h1><?php esc_html_e('4','transportex'); ?><i class="fa fa-times-circle-o"></i><?php esc_html_e('4','transportex'); ?></h1>
          <h4><?php esc_html_e('Oops! Page not found','transportex'); ?></h4>
          <p><?php esc_html_e("We are sorry, but the page you are looking for does not exist.","transportex"); ?></p>
<a class="btn btn-theme" href="<?php echo esc_url(home_url());?>" onClick="history.back();"><?php esc_html_e('Go Back','transportex'); ?></a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();