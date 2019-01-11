		<footer class="row">
                    <div class="col-md-6 left-footer">
                        <?php dynamic_sidebar( 'left-footer-widget-area' ); ?>
                    </div>
                    <div class="col-md-6 right-footer">
                        <div class="footer-logo">
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri() . '/images/studiomax_logo_path.svg') ?>"/>
                        </div>
                        
                        <?php dynamic_sidebar( 'right-footer-widget-area' ); ?>
                        <div class="footer-social-icons">
                            <ul class='icons-row'>
                                <li><a href="http://linkedin.com/in/ivanovaboryana"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://twitter.com/i_boryana"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.instagram.com/boryana.ivanova.i/"><i class="fab fa-instagram"></i></a></li>
                            </ul>				
                        </div>
                    </div>
		</footer>
		<div class="row bottom-footer">
                    <div class="col-md-12">
                        &copy; StudioMax<br>
                        Created By <a href="http://sofiasite.com">SofiaSite</a>
                    </div>
			
		</div>
	</div><!-- Container fluid -->
        
        <?php wp_footer(); ?>
</body>
</html>