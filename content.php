<div id="preloader-container">
<div id="container">
  <?php 
  $args = array (
      'post_type'=>'portfolio',
      'nopaging'=>'false',
      'order'=>'ASC'
    );
  $query = new WP_Query($args);

 if($query->have_posts()){
    while($query->have_posts()){
      $class_name ='portfolio';
      $query->the_post(); 
      $types = get_the_terms($post->ID,'type');
      if($types){
        foreach($types as $type) {
          $class_name .= " TX_".$type->slug;
        }
      }
?>
<div class="widget portfolio web homepage <?php echo $class_name; ?>">
<div class="entry-container span4">
<!-- Portfolio Image -->
<?php if (has_post_thumbnail()) { ?>
<div class="entry-image">
<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>" class="fancybox">
<span class="entry-image-overlay"></span>
<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>" alt="" />
</a>
</div>
<?php } else {?>
<div class='entry-image'>
<a href='images/_hick.jpg' class='fancybox'>
<span class='entry-image-overlay'></span>
<img src='images/_hick.jpg' alt='' />
</a>
</div>
<?php } ?>


<div class="entry drop-shadow curved ">

<!-- Portfolio Heading -->
<a href="portfolio-single.html">
<?php the_title() ?>
</a>
</h5>
<!-- Portfolio Description -->
<p><b> <?php the_content() ?><br>
<?php the_category()?><br>
<?php the_author() ?><br>
<?php the_tags()?><br>

</b>
</p>
<div class="entry-footer">
<ul>
<li class="left">Ú¯Ø±Ø§ÙÛŒÚ©</li>
<li class="right no-margin"><div class="icon like"></div> 3</li>
</ul>
</div>

<p></p>
<div class="stripes"></div>
</div>
</div>
</div>

<?php }
}

wp_reset_postdata();?>

</div>
</div>


