<?php
/**
 * The template for displaying archive pages.
 *
 * @package transportex
 */
get_header(); ?>
<!-- Breadcrumb -->
<div class="transportex-breadcrumb-section" style='background: url("<?php echo( has_header_image() ? get_header_image() : get_theme_support( 'custom-header', 'default-image' ) ); ?>") #50b9ce;'>
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="transportex-breadcrumb-title">
            <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
          </div>
			    <div>
            <ul class="transportex-page-breadcrumb">
              <?php if (function_exists('transportex_custom_breadcrumbs')) transportex_custom_breadcrumbs();?>
            </ul>
			    </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /End Breadcrumb -->
<main id="content">
  <div class="container">
    <div class="row">
      <div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-md-12"; } else { echo "col-md-9 col-sm-8"; } ?>">
      <?php 
      if( have_posts() ) :
      while( have_posts() ): the_post();
      get_template_part('content',''); 
      endwhile; endif;
      ?>
          <div class="col-md-12 text-center">
          <?php
			//Previous / next page navigation
			the_posts_pagination( array(
			'prev_text'          => '<i class="fa fa-arrow-left"></i>',
			'next_text'          => '<i class="fa fa-arrow-right"></i>',
			'screen_reader_text' => ' ',
			) );
			?>
          </div>
      </div>
	    <aside class="col-md-3">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</main>
<?php get_footer(); ?>