<?php
/* Template Name: coco */

 get_header(); ?>
<?php
$query = new WP_Query( $args );

$args = array(
    'post_type' => 'voitures', // type de publication
    'meta_key' => 'cylindres', // C'est ici qu'on indique quel est ce champ
    'meta_value_num' => 500, // ou meta_value pour tester un texte
    'meta_compare' => '>' // < > != >= <=
);
$query = new WP_Query( $args ); ?>


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
<?php else : ?>
<p class="nothing">
Il n'y a pas de Post à afficher !
</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
