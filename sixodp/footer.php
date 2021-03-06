<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer bgcolor-primary" role="contentinfo">
			<div class="container">
				<div class="row footer-row">
					<div class="col-md-4 pull-right text-right footer-column">
						<div class="popper">
							<ul class="popper__list">
								<li class="popper__item">
									<a href="/data/user/login" class="popper__link"><?php _e('Data portal', 'sixodp');?> <i class="material-icons">arrow_forward</i></a>
								</li>
								<li class="popper__item">
									<a href="/admin" class="popper__link"><?php _e('Content manangement system', 'sixodp');?> <i class="material-icons">arrow_forward</i></a>
								</li>
							</ul>
						</div>
						<button type="button" class="btn btn-transparent" data-trigger="popper"><?php _e('Management', 'sixodp');?></button>
					</div>
				</div>
				<div class="row footer-row footer-logo-row">
					<div class="col-md-3 col-sm-4 col-xs-12 footer-column">
							<img class="footer-logo" src="<?php echo assets_url(); ?>/images/footer_logo.png" alt="6Aika logo">
					</div>

                    <div class="col-md-3 col-sm-4 col-xs-12 footer-column">
                        <!-- Placeholder for additional city logos -->
                        <img class="footer-logo" src="/assets/images/turku.png" alt="Logo of Turku">
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 footer-column">
                        <!-- Placeholder for additional city logos -->
                        <img class="footer-logo" src="/assets/images/vsl.png" alt="Logo of Varsinaissuomen liitto">
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 footer-column footer-column-empty">
                        <!-- Placeholder for additional city logos -->
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12 footer-column footer-column-empty">
                        <!-- Placeholder for additional city logos -->
                    </div>
				</div>

                <div class="row footer-row footer-logo-row">
                    <div class="col-md-3 col-sm-4 col-xs-12 footer-column">

                        <img class="footer-logo" src="/assets/images/turun-yliopisto.png" alt="Logo of turku university">

                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12 footer-column">
                        <!-- Placeholder for additional city logos -->
                        <img class="footer-logo" src="/assets/images/novia.png" alt="Logo of Novia">
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 footer-column">
                        <!-- Placeholder for additional city logos -->
                        <img class="footer-logo" src="/assets/images/satakuntaliitto.png" alt="Logo of satakuntaliitto">
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12 footer-column">
                        <!-- Placeholder for additional city logos -->
                        <img class="footer-logo small" src="/assets/images/abo-akademi.png" alt="Logo of Åbo Akademi">
                    </div>

                    <div class="col-md-2 pull-right footer-column">
                        <?php
                        get_template_part( 'partials/social_links' );
                        ?>
                    </div>
                </div>

        <hr class="footer-line">

				<div class="row footer-row">
			    <div class="col-md-12 footer-section footer-section--links">
						<ul class="footer-links">
							<?php
			          foreach ( get_nav_menu_items("footer") as $navItem ) {
			            $class = '';
			            if ( $navItem["title"] === get_current_locale() ) {
			              $class = 'active';
			            }
			            echo '<li class="'.$class.'"><a href="'.$navItem["url"].'" title="'.$navItem["title"].'" class="nav-link">'.$navItem["title"].'</a></li>';
			          }
			        ?>
						</ul>
			    </div>
			  </div>
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
