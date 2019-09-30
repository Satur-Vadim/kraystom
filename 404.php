<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package KRAYSTOM
 */

get_header();
?>
<section class="error-404 not-found">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 image-404"><img class="not-found__img" src="<?php echo get_template_directory_uri()?>/img/images/404-img.png" alt=""></div>
			<div class="col-lg-7 form-404">
				<div class="form-404__title">Очень странно, но ничего не найдено!</div>
				<div class="form-404__desc">Напишите, какой вопрос вас интересует, наши менеджеры подготовят ответ в ближайшее время</div>
				<?php echo do_shortcode('[contact-form-7 id="101" title="404 form"]'); ?>	
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 section-title">Возможно вам будут интересны новинки</div>
			<div class="col-12">
			<?php echo do_shortcode('[recent_products per_page="3" columns="3"]'); ?>	
			</div>
		</div>
	</div>
	<div id="seo-text">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>Вы находитесь на сервисе KRAYSTOM. Все лучшие компании Томска в одном месте. </p>
					<p>Здесь Вам помогут подобрать нужный проект и надежного проверенного исполнителя полностью бесплатно. Без скрытых платежей и звездочек. По цене застройщика, без наценок. Больше ненужно перелопачивать горы информации в поисках надежного исполнителя  и лучшей цены. 
					Позвоните в Крайстом сейчас.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
<script>
	( function( $ ) {
		$( document ).ready(function() {
			$('.inputs-404 .wpcf7-form-control').blur(function() {
        	$(this).parent().parent().removeClass("focus");
      		})
      		.focus(function() {
        	$(this).parent().parent().addClass("focus")
      		});
		});
	})( jQuery );
</script>

