<div class="container gray ">
	<div class="content">
		<?php
	if( have_posts() ) {
		the_post();
?>
		<article>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		</article>
<?php
	}
?>
	</div>	    
</div>

	
