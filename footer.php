<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KRAYSTOM
 */

?>
	<div style="display:none;" class="fancybox-hidden">
	    <div id="invite_form_pop">
	    	<div class="form-title">Заполните форму и мы свяжемся с вами</div>
	        <?php echo do_shortcode('[contact-form-7 id="43" title="Обратный звонок"]'); ?>
	    </div>
	</div>

	</div><!-- #content -->
	<div class="footer-line"></div>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<nav class="foot-navigation">
						<?php 	wp_nav_menu( array(
							'menu_id'        => 'primary-menu'
						) );?>
					</nav>
				</div>
				<div class="col-lg-6 last-product">
					<?php
					$args = array(
					    'post_type' => 'product',
					    'tax_query' => array(
					        array(
					            'taxonomy' => 'product_visibility',
					            'field'    => 'name',
					            'terms'    => 'featured',
					        ),
					    ),
					);
					$product = new WP_Query( $args ); 
					while ( $product->have_posts() ): $product->the_post(); ?>
					<div class="footer-prod-info">
						<img src="<?php echo get_template_directory_uri()?>/img/images/footer-text-backg.png" alt="">
						<div class="footer-prod-info__content">
							<div class="footer-prod-title">
								<div class="footer-prod-title__zag">
									Выбор Kraystom
								</div> 
								<?php the_title(); ?>
						</div>
							<div class="footer-prod-price">
								<strong><?php echo 'Цена от '.$product->get_price().' тис. руб'; ?></strong>
							</div>
						</div>
					</div>
					<div class="footer-prod-img">
						<div class="footer-prod-flag">
							<img src="<?php echo get_template_directory_uri()?>/img/images/novelty.png" alt="">
						</div>
						<a href="<?php the_permalink(); ?> ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<div class="col-lg-4">
					<div class="interesting">
						<div class="interesting__title">Интересное:</div>
						<?php $posts = get_posts ("orderby=date&numberposts=4"); ?> 
						<?php if ($posts) : ?>
						<div class="interesting__list">
							<ul class="interesting__list-ul">
								<?php foreach ($posts as $post) : setup_postdata ($post); ?>
								<li class="interesting__list-li"><a class="interesting__list-a" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
								<?php endforeach; ?> <?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
