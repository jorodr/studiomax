<?php get_header() ?>

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        
        <section class="row top internal-page" id="top-section">
            
                <?php if(get_the_post_thumbnail_url()) : ?>
                    <div class="col-md-4 internal-page-left finishing"                         
                         style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"
                    >
                    
                    </div>
                    
                <?php endif ?>
            
            <div class="col-md-8 internal-page-right">		
                <div class="internal-page-logo">
                    <img class='img-fluid' src='<?php echo esc_url(get_template_directory_uri() . '/images/studiomax_logo_path.svg') ?>' />
                </div>				
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>        
            </div>									
        </section> 

    <?php endwhile; ?>
<?php endif; ?>
					
<?php get_footer() ?>