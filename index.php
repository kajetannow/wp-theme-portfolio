<?php get_header(); ?>
<?php get_sidebar(); ?>

			<button id="leftSlider"><</button>
            <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<section>

                <?php 
                if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
                }?>
				<div class="descript">
                <h1><?php the_title(); ?></h1>
                <h2><?php the_meta(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="more" href="<?php the_permalink(); ?>"> Czytaj więcej... </a>
                </div>
        
			</section>
			<?php endwhile; ?>
        <?php endif; ?>
        <button id="rightSlider">></button>


<?php get_footer(); ?>