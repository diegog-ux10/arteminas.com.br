<?php
$is_carousel = $args["is_carousel"];

?>

<?php 
if($is_carousel):
    $main_container_atrib = 'id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel"';
    $second_container_atrib = 'class="carousel-inner"';
else:
    $main_container_atrib = '';
    $second_container_atrib = '';
endif;
?>

<?php
$prod_bsr_1st_set = array(
    'posts_per_page' => 4,
    'post_type' => 'product',
    'orderby' => 'date',
    'order' => 'ASC'
);

$prod_bsr_1st = new WP_Query($prod_bsr_1st_set);

if($is_carousel):
    $prod_bsr_2nd_set = array(
        'posts_per_page' => 4,
        'post_type' => 'product',
        'offset' => 4,
        'orderby' => 'date',
        'order' => 'ASC'
    );

    $prod_bsr_2nd = new WP_Query($prod_bsr_2nd_set);

    $prod_bsr_3rd_set = array(
        'posts_per_page' => 4,
        'post_type' => 'product',
        'offset' => 8,
        'orderby' => 'date',
        'order' => 'ASC'
    );

    $prod_bsr_3rd = new WP_Query($prod_bsr_3rd_set);
endif;
?>

<div>
   <div class="products-title">
        <div>
            <h3>Cards title</h3>
        </div>  
        <?php if($is_carousel): ?>              <!-- Recipiente do controlador carrossel -->
            <div>
                <a href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <div <?= $main_container_atrib; ?>>
        <div <?= $second_container_atrib; ?>>
            <?php if(have_posts($prod_bsr_1st)): ?>
                <div class="carousel-item active">
                    <div>
                        <?php while ($prod_bsr_1st->have_posts()) : $prod_bsr_1st->the_post(); ?>
                            <div>
                            <div>
                                <img class="img-fluid" alt="100%x280" src="<?= get_the_post_thumbnail_url(); ?>">
                                <div>
                                    <h4><?php the_title(); ?></h4>
                                    <?php $product = new WC_Product($post); ?>
                                    <span>R$<?= $product->get_price(); ?></span>
                                </div>
                            </div>
                        </div> 
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>  

</div>



