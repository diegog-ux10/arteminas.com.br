<?php get_header(); ?>

<!-- Slider Home -->
<?php get_template_part('template-parts/part', 'slider'); ?>
<!-- carrousel do produtos -->
<section class="full-container carousel">
    <div class="content-container-m">
        <?php get_template_part('template-parts/part', 'products-card', [
            'is_carousel' => true,
            'query' => 'bsr',
            'title' => 'Produtos mais vendidos'
            ]); ?>
    </div>
</section>

<section class="full-container carousel">
    <div class="content-container-m">
        <?php get_template_part('template-parts/part', 'products-card', [
            'is_carousel' => false,
            'query' => 'top',
            'title' => 'Produtos em destaque'
            ]); ?>
    </div>
</section>

<div class="full-container">
    <div class="content-container-m">
        <?php echo get_field('banner'); ?> 
    </div>    
</div>

<div class="full-container">
    <div class="content-container-m">
        <?php get_template_part('template-parts/part', 'cat-cards', [
            'cat_01' => 'doces',
            'cat_02' => 'queijos',
            'cat_03' => 'charcutaria'
        ]); ?>
    </div>
</div>

<?php echo do_shortcode('[featured_products]'); ?>

<?php get_footer(); ?>