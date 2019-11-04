<?php get_header();?>
<h1><?php the_title();?></h1>
<div class="card-deck">
    <h1><?php single_cat_title();?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    	<div class="card mx-2 my-2" onclick="window.location.href ='<?php the_permalink() ?>'" style="cursor: pointer;">
    		<div class="card-body">
    			<?php if (has_post_thumbnail()):?>
    				<img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
				<?php endif;?>
		    	<h6 class="card-title"><?php the_title() ?></h6>
                <p class="card-text"><?php the_excerpt(); ?></p>
		    </div>
		</div>
    <?php endwhile; endif;?>
</div>
<?php get_footer();?>
