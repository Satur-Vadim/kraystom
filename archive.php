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
          <div class="posts-beforecontent__title-icon"><i class="fal fa-paper-plane"></i></div>
          <div class="posts-beforecontent__title-text">
            Сервис быстро растет. Постоянно появляются новые обзоры и проекты.<br>
            Подпишитесь, чтобы не пропустить самое интересное.
          </div>
        </div>
        <div class="posts-beforecontent__form"></div>
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
        the_posts_pagination();
        wp_reset_query(); ?>  
        </div>
    </div>
	</div>
</div>
		

<?php

get_footer();?>
<script>
  ( function( $ ) {
    $(document).ready(function(){
    $('.select__item').eq(0).children().text('Все темы');
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
    selected = $("#cat :selected").text();
    dur = 500;

  $this.hide();
  $this.wrap('<div class="select"></div>');
  $('<div>', {
    class: 'select__gap',
    text: selected
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
