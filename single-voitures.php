<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="projet">
<?php the_post_thumbnail( 'large' ); ?>
<h1 class="title">
<?php the_title(); ?>
</h1>
<div class="content">
<?php the_content(); ?>
<!-- Ajout taxonomy -->
<div>
<?php the_terms( $post->ID, 'dimensions', 'Dimensions : ' ); ?><br>
<?php the_terms( $post->ID, 'couleur', 'Couleur : ' ); ?><br>
<p>Cylindré : <?php the_field('cylindre'); ?><p>
<?php the_terms( $post->ID, 'annee', 'Année : ' ); ?><br>
<?php the_terms( $post->ID, 'modele', 'Modèle : ' ); ?><br>
<?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
</div> 
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>