<?php
$args = array(
    'date_query' => array(
        array(
            'after'     => 'January 1st, 2020',
            'before'    => array(
                'year'  => 2021,
                'month' => 12,
                'day'   => 31,
            ),
            'inclusive' => true,
        ),
    ),
);
$query = new WP_Query( $args );

$args = array(
    'post_type' => 'voitures', // type de publication
    'meta_key' => 'cylindres', // C'est ici qu'on indique quel est ce champ
    'meta_value_num' => 500, // ou meta_value pour tester un texte
    'meta_compare' => '>' // < > != >= <=
);
$query = new WP_Query( $args );
?>