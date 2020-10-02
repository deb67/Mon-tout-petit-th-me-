<?php 
$args = array(
    'post_type' => 'voitures', // type de publication
    'meta_key' => 'cylindres', // C'est ici qu'on indique quel est ce champ
    'meta_value_num' => 20, // ou meta_value pour tester un texte
    'meta_compare' => '>' // < > != >= <=
);
$query = new WP_Query( $args );