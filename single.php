<?php get_header(); ?>
<?php get_sidebar(); ?>


            <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<section>

                <?php 
                if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
                }?>
				<div class="content">
                <h1><?php the_title(); ?></h1>
                <h2><?php the_meta(); ?></h2>
                <p><?php the_content(); ?><p>
                </div>
        
			</section>
			<?php endwhile; ?>
        <?php endif; ?>


<?php get_footer(); ?>