<?php get_header();?>
<section id="portfolio-list">
	<h1><?php single_cat_title();?></h1>
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<div class="col-lg-4 col-md-6 col-sm-6 py-3">
			<div class="card mx-2 my-3 h-100" onclick="window.location.href ='<?php the_permalink() ?>'" style="cursor: pointer;">
				<div class="card-body">
					<?php if (has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url();?>" class="img-fluid">
					<?php endif;?>
					<h6 class="card-title"><?php the_title() ?></h6>
					<div class="card-text"><?php the_excerpt(); ?></div>
				</div>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>
</section>
<?php get_footer();?>