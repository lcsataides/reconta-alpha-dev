<?php
global $post;
if ($post->ID): ?>
  <?php
  $title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
  $encode = utf8_encode($title);
  ?>
<div class="share-box">
  <a target="blank" href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink()?>"><span class="mdi mdi-facebook mdi-24px"></span></a>

  <a target="blank" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink()?>&text=<?php the_title() ?>"><span class="mdi mdi-twitter mdi-24px"></span></a>

  <a target="blank" href="whatsapp://send?text=<?php the_title(); ?> - <?php echo get_permalink();?>" data-action="share/whatsapp/share"><span class="mdi mdi-whatsapp mdi-24px"></span></a>

  <a target="blank" href=""><span class="mdi mdi-link-variant mdi-24px"></span></a>
  <input type="textarea" class="input is-hidden" value="<?php echo get_permalink();?>">
</div>
<?php  endif; ?>