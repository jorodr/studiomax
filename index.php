<?php get_header() ?>

                <section class="row top index-page" id="top-section" style="background-image:url('<?php
                    if (get_theme_mod('studiomax_frontpage_header_image') > 0) {
                        echo wp_get_attachment_url(get_theme_mod('studiomax_frontpage_header_image'));
                    }
                    else {
                        echo esc_url(get_template_directory_uri() . '/images/Onepixel_1089312_1400.jpg');
                    }
                    ?>')" >  
                    <div class="intro">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/studiomax_logo_path.svg') ?>" />
                    </div>	
                
                </section>

		<section class="row about" id="about-section">                    
			<div class="col-md-6 thumbnail">
                            <img class="img-fluid" src="<?php
                                if (get_theme_mod('studiomax_about_us_image') > 0) {
                                    echo wp_get_attachment_url(get_theme_mod('studiomax_about_us_image'));
                                }
                                else {
                                    echo esc_url(get_template_directory_uri() . '/images/Onepixel_1089312_1400.jpg');
                                }
                            ?>"/>
			</div>
			<div class="col-md-6 paragraph">
				<h2>За нас</h2>
				<p>
					STUDIO MAX е плод на дългогодишен и почти денонощен труд.Имаме множество както частни , така и корпоративни клиенти, но твърдим , че добрата работа личи не само от бройката изпълнени проекти , а и от тяхната качествена реализация. За нас на първо място стои доверието и удовлетворението от добре свършената работа.
					Започнахме през далечната 2005 година .Началото бе трудно , но ние упорито отстоявахме принципите си и успяхме да спечелим много нови приятели сред клиентите си .Почеркът ни се усъвършенстваше всеки ден.Днес с гордост погледаме назад и виждаме в очите на клиентите си благодарност и уважение!
				</p>
			</div>
		</section>

		<section class="row services" id="services-section">
                    
                    <h2>Услуги</h2>
                    <div class="service col-md-4" >					
                            <div class="service-image"  style="background-image:url('<?php
                                if (get_theme_mod('studiomax_services_image') > 0) {
                                    echo wp_get_attachment_url(get_theme_mod('studiomax_services_image'));
                                }
                                else {
                                    echo esc_url(get_template_directory_uri() . '/images/Onepixel_3313854.jpg');
                                }
                                ?>')" 
                            >
                                    <div class='servicee-icon'><img src="<?php echo esc_url(get_template_directory_uri() . '/images/bormashina.svg'); ?>" width='100px'/></div>
                                    <a href="dovarshitelni.php" class="service-title"><h3>ДОВЪРШИТЕЛНИ РАБОТИ.</h3></a>
                            </div>				
                    </div>
                    
                    <div class="service col-md-4">				
                            <div class="service-image"  style="background-image:url('<?php
                                if (get_theme_mod('studiomax_services_image') > 0) {
                                    echo wp_get_attachment_url(get_theme_mod('studiomax_services_image'));
                                }
                                else {
                                    echo esc_url(get_template_directory_uri() . '/images/Onepixel_3313854.jpg');
                                }
                                ?>')" 
                            >
                                    <div class='servicee-icon'><img src="<?php echo esc_url(get_template_directory_uri() . '/images/design.svg'); ?>" width='100px'/></div>
                                    <a href="interioren-dizain.php" class="service-title"><h3> ИНТЕРИОРЕН ДИЗАЙН.</h3></a>
                            </div>	
                    </div>
                    
                    <div class="service col-md-4">				
                            <div class="service-image"  style="background-image:url('<?php
                                if (get_theme_mod('studiomax_services_image') > 0) {
                                    echo wp_get_attachment_url(get_theme_mod('studiomax_services_image'));
                                }
                                else {
                                    echo esc_url(get_template_directory_uri() . '/images/Onepixel_3313854.jpg');
                                }
                                ?>')" 
                            >
                                    <div class='servicee-icon'><img src="<?php echo esc_url(get_template_directory_uri() . '/images/interior.svg'); ?>" width='100px'/></div>
                                    <a href="obzavejdane.php" class="service-title"><h3>ОБЗАВЕЖДАНЕ ПО ИНДИВИДУАЛЕН ПРОЕКТ.</h3></a>
                            </div>	
                    </div>
		</section>
		<section class="row experience" id="experience-section">
					
		</section>
	</div><!-- Container fluid -->	
	
	<div class="container portfolio" id="portfolio-section">
		<h2>Галерия</h2>
		<?php dynamic_sidebar( 'frontpage-gallery-widget-area' ); ?>
	</div><!-- Container -->
	
	<div class="container-fluid recommendations"
             style="background-image:url('<?php
                    if (get_theme_mod('studiomax_quote_image') > 0) {
                        echo wp_get_attachment_url(get_theme_mod('studiomax_quote_image'));
                    }
                    else {
                        echo esc_url(get_template_directory_uri() . '/images/Onepixel_2670458.jpg');
                    }
                    ?>')                
             "
             >	
		<div class="row">
			<p class="col-md-8 col-xs-11">“СЪЩНОСТТА НА ЕДНА СГРАДА Е НЕЙНОТО ВЪТРЕШНО ПРОСТРАНСТВО” </p>			
			<p class="col-md-8 col-xs-11 recomendator">ФРАНК ЛОЙД РАЙТ</p>
		</div>
	</div><!-- Container fluid -->
	
	<div class="container-fluid">
		<section class="row message-form">
			<div class="col-md-6 offset-md-3">
				<form action="get_message.php" method="get" id="contact-form">
					<input type="text" name="name" id="name" placeholder="Your Name" />
					<input type="text" name="email" id="email" placeholder="e-mail"/>
					<input type="text" name="subject" id="subject" placeholder="Subject"/>
					<textarea class="message-content" placeholder="Yourself message here..." name='message' id ='message'></textarea>		
					<input type="submit" id="submit" value="SEND MESSAGE" />
				</form>	
			</div>
			
		</section>
					
<?php get_footer() ?>


