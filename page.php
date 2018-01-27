<?php get_header(); ?>
<article itemprop="blogPosts" itemtype="http://schema.org/BlogPosting">
	<h1 itemprop="headline"><?php the_title(); ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>