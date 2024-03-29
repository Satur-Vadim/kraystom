<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KRAYSTOM
 */

get_header();
?>
<div class="container">
	<div class="row posts-page">
		<div class="col-lg-3 post-sidebar"><?php echo get_sidebar(); ?></div>
		<div class="col-lg-8 post-content">
      <div class="posts-beforecontent">
        <div class="posts-beforecontent__title">
          <div class="posts-beforecontent__title-icon"><img src="<?php echo get_template_directory_uri()?>/img/icons/plane.png" alt=""></div>
          <div class="posts-beforecontent__title-text">
            Сервис быстро растет. Постоянно появляются новые обзоры и проекты.<br>
            Подпишитесь, чтобы не пропустить самое интересное.
          </div>
        </div>
        <div class="posts-beforecontent__form">
          <?php echo do_shortcode('[contact-form-7 id="98" title="Контакты_copy"]') ?>
        </div>
      </div>
      <div class="posts-container">
      <?php
      while( have_posts() ){
        the_post();?>
        <div class="post-item">
          <div class="post-item__content">
            <div class="post-item__top-block">
              <div class="post-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="post-item__date"><i class="fal fa-calendar"></i><span class="post-date"><?php the_time('j F Y'); ?></span></div>
            </div>
            <div class="post-item__text">
              <?php the_excerpt(); ?>
            </div>
          </div>
          <div class="post-item__img">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
          </div>
      </div>
        <?php };
        $pag = array(
          'end_size'     => 3,
          'prev_text'    => '<i class="far fa-chevron-left"></i>',
          'next_text'    => '<i class="far fa-chevron-right"></i>',
        );
        the_posts_pagination($pag);
        wp_reset_query(); ?>  
        </div>
        <div class="advertising">
        <div class="advertising__title">Сервис подбора строительных услуг KRAYSTOM</div>
        <div class="advertising__text">Бесплатно, без комиссии и скрытых платежей</div>
      </div>
    </div>
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
<?php

get_footer();?>
<script>
  ( function( $ ) {
    $(document).ready(function(){
    $('.select__item').eq(0).remove();
    });
  })( jQuery );
</script>
<script>
  ( function( $ ) {
$('.postform').each(function() {
  var $this = $(this),
    selectOption = $this.find('option'),
    selectOptionLength = selectOption.length,
    selectedOption = selectOption.filter(':selected'),
    dur = 500;

  $this.hide();
  $this.wrap('<div class="select"></div>');
  $('<div>', {
    class: 'select__gap',
    text: selectOption.eq(0).text()
  }).insertAfter($this);

  var selectGap = $this.next('.select__gap'),
    caret = selectGap.find('.caret');
  $('<ul>', {
    class: 'select__list'
  }).insertAfter(selectGap);

  var selectList = selectGap.next('.select__list');
  // Add li - option items
  for (var i = 0; i < selectOptionLength; i++) {
    $('<li>', {
        class: 'select__item',
        html: $('<span>', {
          text: selectOption.eq(i).text()
        })
      })
      .attr('data-value', selectOption.eq(i).val())
      .appendTo(selectList);
  }
  var selectItem = selectList.find('li');

  selectList.slideUp(0);
  selectGap.on('click', function() {
    if (!$(this).hasClass('on')) {
      $(this).addClass('on');
      selectList.slideDown(dur);

      selectItem.on('click', function() {
        var chooseItem = $(this).data('value');

        $('select').val(chooseItem).attr('selected', 'selected');
        selectGap.text($(this).find('span').text());

        selectList.slideUp(dur);
        selectGap.removeClass('on');
      });

    } else {
      $(this).removeClass('on');
      selectList.slideUp(dur);
    }
  });
});
  $(".select").after("<div class='widget-btn'><button class='btn' type='submit'>Показать статьи</button></div>");
})( jQuery );
</script>

<script>
( function( $ ) {
  $(document).ready(function() { 
  $('.posts-container .post-item').eq(3).after($('.advertising'));
  });
})( jQuery );
</script>

<script>
( function( $ ) {
  $(document).ready(function() { 
    $('.product_list_widget li').each(function(){
      var price = $(this).children('.woocommerce-Price-amount').text();
      price = price.slice(0, -1);
      $(this).children('.woocommerce-Price-amount').text('Цена от ' + price + ' тис. руб');
    });
  });
})( jQuery );
</script>

<script>
( function( $ ) {
  $(document).ready(function() {
    $( ".product_list_widget li a img" ).wrap( "<div class='bestseller'></div>" );
    $( ".bestseller" ).append('<img class="bestseller-img" src="<?php echo get_template_directory_uri()?>/img/images/bestseller.png">')
  });
})( jQuery );
</script>

<script>
( function( $ ) {
  $(document).ready(function(){  
    $('.post-content').on('click', '.nav-links .page-numbers', function(event){      
      console.log('sss');
      event.preventDefault();
      var url = $(this).attr('data-url')    
      $.ajax({
        url: url,
        type: "GET",
        success: function(res){
        var posts = $(res);
        posts = $(posts).find('.posts-container')
        $('.posts-container').html(posts);
        $('body,html').animate({scrollTop: 0}, 400);
        data()
        links();
        }
      });
    });
    data() 
    links();
  }); 
})( jQuery );
</script>

<script defer>
  function data(){
    ( function( $ ) {
      $('.nav-links .page-numbers').each(function(){
        var link = $(this).attr('href');
        $(this).attr('data-url', link);
      });
  })( jQuery );
}

</script>
<script defer>
function links(){
  (function( $ ) {
    $('.nav-links .page-numbers').attr('href','javascript:void(0)');
  })( jQuery );
}
</script>