<?php
/**
* Template Name: Contacts page
*
* @package WordPress
* @subpackage kraystom
* @since kraystom 1.0
*/
 get_header() ?>
 <div class="contact-infos">
 	<div class="container">
 		<div class="row">
 		<div class="col-lg-7 contact-block">
 			<div class="contact-block__title">Конаткты</div>
 			<div class="contact-block__number">
 				<div class="name-number">Единый номер —</div>
 				<div class="contact-block__content">
 					<i class="fas fa-phone color-b69a68"></i>
 					<div class="contact-block__content-nubmber">
 						<span class="color-b69a68 font-weight-bold">8 (800) </span> <span> 979622</span>
 					</div>
 				</div>
 			</div>
 			<div class="contact-block__tell">
 				<div class="name-tell">Адрес в г.Томске —</div>
 				<div class="contact-block__content">
 					<img class="contact-block__map-img" src="<?php echo get_template_directory_uri()?>/img/icons/marker-2.svg" alt="">
 					<div class="adres-text">Пер. Карвовский 13<br>Офис 408 (4 этаж)</div>
 				</div>
 			</div>
 		</div>
 		<div class="col-lg-5 contact-block">
 			<div class="contact-block__title">Заказать звонок</div>
 			<?php echo do_shortcode('[contact-form-7 id="47" title="Контакты"]'); ?>
 		</div>
 	</div>
 </div>
 <div class="container map">
 	<div class="row">
 		<div class="col-12">
 			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d171861.0204322563!2d27.8728842!3d47.6974606!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sua!4v1569488161209!5m2!1sen!2sua" width="100%" height="580px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
 		</div>
 	</div>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-12 section-title">Возможно вам будут интересны новинки</div>
 	</div>
 </div>
<?php echo do_shortcode('[recent_products per_page="3" columns="3"]'); ?>	
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
</div>
<script>
	( function( $ ) {
		$( document ).ready(function() {
			$('.wpcf7-form .wpcf7-form-control').blur(function() {
        	$(this).parent().parent().removeClass("focus");
      		})
      		.focus(function() {
        	$(this).parent().parent().addClass("focus")
      		});
		});
	})( jQuery );
</script>
 <?php get_footer() ?>
