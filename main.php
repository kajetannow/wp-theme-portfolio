<?php 
/*
Template Name: Strona Główna
*/
?>

<?php get_header(); ?>


<div id="background">
<?php 
                if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
                }?>

</div>

<ul id="sidemainmenu">				
				<?php wp_list_categories('title_li='); ?>
</ul>
<ul id=bottommainmenu>
				<li><a href="<?php bloginfo('url'); ?>/o-mnie/">o&nbsp;mnie</a></li>
				<li><a href="<?php bloginfo('url'); ?>/contact/">kontakt</a></li>
</ul>

<div id="credits"><p>Autor zdjęcia: Szymon Kawecki</p></div>

            <?php get_footer(); ?>