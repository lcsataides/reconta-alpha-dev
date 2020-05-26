<form role="search" method="get" class="search-box" action="<?php echo home_url( '/' ); ?>">
<input type="search" class="search-field"
  placeholder="<?php echo esc_attr_x( 'Pesquise aqui', 'placeholder' ) ?>"
  value="<?php echo get_search_query() ?>" name="s"
  title="<?php echo esc_attr_x( 'Campo de Pesquisa', 'label' ) ?>" />
<a type="submit" class="search-submit">
  <span class="mdi mdi-chevron-right mdi-24px"></span>
</a>
</form>