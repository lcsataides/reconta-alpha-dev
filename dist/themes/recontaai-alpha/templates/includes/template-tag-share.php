<?php
global $post;
if ($post->ID): ?>
  <?php
  $title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
  $encode = utf8_encode($title);
  ?>
<div class="share-box">
    <a class="share-title is-size-7" href="#">
      <span class="mdi mdi-share-variant"></span>Compartilhe
    </a>
	<div class="share-icons is-hidden">
		<a target="blank" href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink()?>"><span class="mdi mdi-facebook"></span></a>
		<a target="blank" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink()?>&text=<?php the_title() ?>"><span class="mdi mdi-twitter"></span></a>
		<a target="blank" href="whatsapp://send?text=<?php the_title(); ?> - <?php echo get_permalink();?>" data-action="share/whatsapp/share"><span class="mdi mdi-whatsapp"></span></a>
	</div>
</div>
<?php  endif; ?>