<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<label class="screen-reader-text" for="s">Поиск: </label>
	<div class="input-head-s">
		<input type="text" placeholder="Введите текст, чтобы что-нибудь найти ..." value="<?php echo get_search_query() ?>" name="s" id="s"/>
		<i class="fal fa-search"></i>
	</div>
	<input type="submit" id="searchsubmit" value="Поиск" />
</form>