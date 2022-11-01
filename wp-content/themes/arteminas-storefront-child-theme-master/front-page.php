<?php get_header(); ?>

<div class="full-container">
    <div class="content-container-m">
        <?php get_template_part('template-parts/part', 'banner', [
            'link' => get_field('banner_principal_link'),
            'imagen' => get_field('banner_principal_imagen')
            ]); ?> 
    </div>    
</div>

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
        <?php get_template_part('template-parts/part', 'banner', [
            'link' => get_field('banner_principal_link'),
            'imagen' => get_field('banner_principal_imagen')
            ]); ?> 
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

<?php get_footer(); ?>