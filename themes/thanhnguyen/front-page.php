<?php get_header();?>

<section id="home">
	<div>
		<h5>Hi, I am</h5>
		<br>
		<h1>Thành Nguyễn</h1>
		<br>
		<h5>I
		<span class="typewriter" data-period="2000" data-rotate='[ "code", "create", "design", "take photos", "made this website"]'></span>
		<span class="blink">_</span>
		</h5>
		<br>
		<button class="cta" onclick="scrollToAnchor('#portfolio')">See my Projects ⇣</button>
	</div>
</section>
<section id="portfolio">
	<div>
		<h1>Recent Projects</h1>
		<br>
		<div class="card-deck">
			<?php $the_query = new WP_Query( 'posts_per_page=8' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				
				<div class="card mx-2 my-2" onclick="window.location.href ='<?php the_permalink() ?>'" style="cursor: pointer;">
					<div class="card-body">
						<?php if (has_post_thumbnail()):?>
							<img src="<?php the_post_thumbnail_url('smallest');?>" class="card-img-top">
						<?php endif;?>
						<div>
							<h6 class="card-title"><?php the_title() ?></h6>
							<p class="card-text"><?php the_excerpt(); ?></p>
						</div>
					</div>
				</div>
			
			<?php
			endwhile;
			wp_reset_postdata();
			?>			
		</div>
		<br>
		<button class="cta" onclick="window.location.href = '/portfolio'">See more ⇢</button>
	</div>	
</section>
<section id="aboutme">
	<div>
		<h1>Thành Nguyễn</h1>
		<h5>/tʰan˨˩ - ŋʷĩəŋ/</h5>
		<br>
		<ol type="1">
			<li>(n) <i>[in the listed order]</i> a native Saigonese based in Bremen (Germany) as a visual <b>designer</b>, software <b>developer</b>, and (hobbyist) <b>photographer</b></li>
			<li>(n) <i>[in the listed order]</i> a <b>Digital Media student</b> at the University of Bremen and an <b>Interface Designer</b> at MERENTIS GmbH</li>
			<li>(n) a sweet spot between eastern empathy and western professionalism</li>
			<li>(n) a nerd who devotes his muggle abilities to actualize the magical beverages and desserts of Harry Potter’s Magical World.</li>
		</ol>
		<br>
		<button class="cta">Download Résumé ⇣</button>
	</div>
</section>
<?php get_footer();?>