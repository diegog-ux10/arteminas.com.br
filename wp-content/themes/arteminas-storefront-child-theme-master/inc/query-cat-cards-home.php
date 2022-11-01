<?php 

$categories = new WP_Term_Query([
    'taxonomy' => 'product_cat', 'doces', 'queijos', 'charcutaria',
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => false,
]);

?>