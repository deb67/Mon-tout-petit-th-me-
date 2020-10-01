<?php get_header(); ?>
<div class="projets">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="projet">
<?php the_post_thumbnail( 'thumbnail' ); ?>
<h1 class="title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h1>
<div class="content">
<?php the_content(); ?>
</div>

<!-- Ajout taxonomy -->
<div>
<?php the_terms( $post->ID, 'dimensions', 'Dimensions : ' ); ?><br>
<?php the_terms( $post->ID, 'couleur', 'Couleur : ' ); ?><br>
<?php the_terms( $post->ID, 'cylindre', 'Cylindré : ' ); ?><br>
<?php the_terms( $post->ID, 'annee', 'Année : ' ); ?><br>
<?php the_terms( $post->ID, 'modele', 'Modèle : ' ); ?><br>
<?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
</div> 

</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>