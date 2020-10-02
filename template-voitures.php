<?php
/* Template Name: coco */

 get_header(); ?>
<?php
$query = new WP_Query( $args );

$args = array(
    'post_type' => 'voitures', // type de publication
    'meta_query' => array(
        'key'     => 'cylindre',
        'value'   => 500,
        'type' 	  => 'numeric',
        'compare' => '>',),
);
$query = new WP_Query( $args ); ?>

<div class="projets">
<?php if ($query->have_posts()) :  ?> 
<?php while ($query->have_posts()) : $query->the_post(); ?>
<article class="projet">
<h1 class="title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h1>
<?php the_post_thumbnail( 'thumbnail' ); ?>
</article>
<?php endwhile; ?>
<?php else : ?>
<p class="nothing">
Il n'y a pas de Post à afficher !
</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
