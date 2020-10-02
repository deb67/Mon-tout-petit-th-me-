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

<?php 
$args = array(
    'post_type' => 'voitures', // type de publication
    'meta_key' => 'cylindres', // C'est ici qu'on indique quel est ce champ
    'meta_value_num' => 20, // ou meta_value pour tester un texte
    'meta_compare' => '>' // < > != >= <=
);
$query = new WP_Query( $args );
?>

<?php get_footer(); ?>