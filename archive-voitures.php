<?php get_header(); ?>
<div class="projets">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="projet">
<h1 class="title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h1>
<?php the_post_thumbnail( 'thumbnail' ); ?>
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>