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

  <a target="blank" href="https://api.whatsapp.com/send?text=<?php the_title(); ?> - <?php echo get_permalink();?>" data-action="share/whatsapp/share"><span class="mdi mdi-whatsapp mdi-24px"></span></a>

  <a target="blank" class="link-copy" onclick="copiarLinkIn('#copy-<?php echo the_ID(); ?>')">
    <span class="mdi mdi-link-variant mdi-18px"></span>
  </a>
  <div clas="copy-toggle">
    <input id="copy-<?php echo the_ID(); ?>" type="textarea" class="input is-small link-input" value="<?php echo get_permalink();?>">
    <span class="notification is-success is-light link-notification">Link Copiado!</span>
  </div>
</div>
<?php  endif; ?>