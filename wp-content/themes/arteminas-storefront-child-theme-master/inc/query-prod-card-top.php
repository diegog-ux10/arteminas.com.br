<?php

$prod_1_set = array(
    'posts_per_page' => 4,
    'post_type' => 'product',
    'orderby' => 'date',
    'order' => 'ASC'
);

$prod_1 = new WP_Query($prod_1_set);