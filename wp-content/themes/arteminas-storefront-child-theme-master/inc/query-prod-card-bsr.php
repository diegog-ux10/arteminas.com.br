<?php

$prod_1_set = array(
    'posts_per_page' => 4,
    'post_type' => 'product',
    'orderby' => 'date',
    'order' => 'ASC'
);

$prod_1 = new WP_Query($prod_1_set);

$prod_2_set = array(
    'posts_per_page' => 4,
    'post_type' => 'product',
    'offset' => 4,
    'orderby' => 'date',
    'order' => 'ASC'
);

$prod_2 = new WP_Query($prod_2_set);

$prod_3_set = array(
    'posts_per_page' => 4,
    'post_type' => 'product',
    'offset' => 8,
    'orderby' => 'date',
    'order' => 'ASC'
);

$prod_3 = new WP_Query($prod_3_set);