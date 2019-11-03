<?php get_header();?>
<div class="container">
    <div class="card-deck">
	    <?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
				<div class="card text-center mx-3 my-3">
					<?php if (has_post_thumbnail()):?>
				    	<img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid card-img">
					<?php endif;?>
					<div class="card-img-overlay">
				        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink() ?>" class="btn btn-primary">Read more</a>
					</div>
				</div>
			<?php endwhile;
		else :
			echo '<p>There are no posts!</p>';
		endif;?>
     	
    </div>
</div>

<?php get_footer();?>