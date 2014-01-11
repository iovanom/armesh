<?php 
/*
	*Theme Name	: BusiProf
	
 * @file           footer.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/footer.php
*/


?>
       	<div class="widget_section">
            <div class="container">
				<div class="row-fluid">
                   <?php if(is_active_sidebar('first-footer-widget-area','second-footer-widget-area','third-footer-widget-area','fourth-footer-widget-area')):?>
						<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
							  <div class="span3">
								<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
							  </div>
							<?php endif; ?>                                
                            <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?> 
                              <div class="span3">
                              <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                              </div>
                          	<?php endif; ?>      
							<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
                               <div class="span3">
                             <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                               </div>
							<?php endif; ?>
							<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
                               <div class="span3">
                             <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
                               </div>
							<?php endif; ?>
						<?php else : ?>
						<div class="span3"> 
						<?php the_widget('WP_Widget_Archives'); ?>
                        </div>
						<div class="span3">                       
					     <?php the_widget('WP_Widget_Categories'); ?>
                        </div>	 
						<div class="span3">
                         <?php the_widget('WP_Widget_Meta'); ?>
						</div>               	 
						<div class="span3">
                         <?php  the_widget('WP_Widget_Pages'); ?>
						</div>
                    <?php endif; ?>
                </div>	
			</div>
        </div><!--closing of the footer widgets area-->
		<?php $current_options = get_option('busiprof_theme_options' );?>
		<?php if($current_options['busiprof_custom_css']!='')
			{ echo "<style type='text/css'>".$current_options['busiprof_custom_css']."</style>"; }
			?>
		<div class="footer-section">      
			<div class="container">
				<div class="row">
					<div class="span8">
                                            &COPY; <?php echo date("Y") ?> <a href="<?=bloginfo("url")?>">ARMESH SRL</a> Toate drepturile sunt rezervate </br>
                                            Pagină creată de <a href="mailto:ivanmajeru@gmail.com">Ivan Majeru</a> 
                                            
                                            
                                            
					</div>
				</div>
		   </div>
		</div>
<!--closing of the footer-->
</div>
<?php wp_footer(); ?> 
</body>
</html>