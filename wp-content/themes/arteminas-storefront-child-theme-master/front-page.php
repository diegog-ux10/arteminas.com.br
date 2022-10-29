<?php get_header(); ?>

<section class="full-container carousel">
    <div class="content-container-m">
        <div class="products-title">
            <div>
                <h3>Carousel cards title </h3>
            </div>
                    <!-- Recipiente do controlador carrossel -->
            <div>
                <a href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                    <i class="fa fa-arrow-right"></i>
                 </a>
            </div>
        </div>
    </div>
    <div class="content-container-m">
        <?php get_template_part('template-parts/part', 'products-card', [
            'is_carousel' => true,
            ]) ?>
    </div>
</section>



<?php get_footer(); ?>