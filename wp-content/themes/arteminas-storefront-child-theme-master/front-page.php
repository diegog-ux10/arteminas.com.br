<?php get_header(); ?>

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

<?php get_footer(); ?>