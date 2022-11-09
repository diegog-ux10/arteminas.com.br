<?php 
/**
 * Converter argumentos do template-part em variáveis
 */

$is_carousel = $args["is_carousel"];
$query = $args["query"];
$title = $args["title"];

/**
 * Incluindo a consulta[query] necessária
 */

$query ? include get_stylesheet_directory() . "/inc/query-prod-card-$query.php" : null; 

/**
 * Definindo classes e atributos dependendo se é carrossel ou não
 */

if($is_carousel):
    $full_container_atrib = 'class="carousel-full-container"';
    $main_container_atrib = 'id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel"';
    $second_container_atrib = 'class="carousel-inner"';
    $carousel_item_atrib = 'class="carousel-item active"';
else:
    $full_container_atrib = 'class="products-full-container"';
    $main_container_atrib = 'class="products"';
    $second_container_atrib = 'class="products-inner"';
    $carousel_item_atrib = 'class="products-item"';
endif;

?>

<div <?= $full_container_atrib; ?>>
   <div class="products-title">
        <div>
            <h3 class="text-l-black"><?= $title ?></h3>
        </div>  
        <?php if($is_carousel): // mostrar controle de carrossel?>              
            <!-- Recipiente do controlador carrossel -->
            <div>
                <!-- controles de carrossel -->
                <a href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <!-- seção de cartão de produto -->
    <div <?= $main_container_atrib; ?>>
        <div <?= $second_container_atrib; ?>>
            <?php if(have_posts($prod_1)): ?>
                <div class="carousel-item active">
                    <?php while ($prod_1->have_posts()) : $prod_1->the_post(); ?>
                        <div class="product-card">
                            <a href="<?php the_permalink(); ?>">
                                <img class="img-fluid" alt="<?php the_title(); ?>" src="<?= get_the_post_thumbnail_url(); ?>">
                                <div class="overlay">
                                    <span class="text-m-white">Ver Produto</span>
                                </div>
                            </a>
                            <div>
                                <a href="<?php the_permalink(); ?>"><h4 class="text-m-purple"><?php the_title(); ?></h4></a>
                                <?php $product = new WC_Product($post); ?>
                                <span class="text-m-green">R$<?= $product->get_price(); ?></span>
                            </div>                            
                        </div>
                    <?php endwhile; ?>
                </div>       
            <?php endif; ?>

            <?php 
                if($is_carousel): ?>
                    <?php if(have_posts($prod_2)): ?>
                        <div class="carousel-item">
                            <?php while ($prod_2->have_posts()) : $prod_2->the_post(); ?>
                                <div class="product-card">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="img-fluid" alt="<?php the_title(); ?>" src="<?= get_the_post_thumbnail_url(); ?>">
                                        <div class="overlay">
                                            <span class="text-m-white">Ver Produto</span>
                                        </div>
                                    </a>
                                    <div>
                                        <a href="<?php the_permalink(); ?>"><h4 class="text-m-purple"><?php the_title(); ?></h4></a>
                                        <?php $product = new WC_Product($post); ?>
                                        <span class="text-m-green">R$<?= $product->get_price(); ?></span>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>       
                    <?php endif; ?>
                    <?php if(false): ?>
                        <div class="carousel-item">
                            <?php while ($prod_3->have_posts()) : $prod_3->the_post(); ?>
                                <div class="product-card">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="img-fluid" alt="<?php the_title(); ?>" src="<?= get_the_post_thumbnail_url(); ?>">
                                        <div class="overlay">
                                            <span class="text-m-white">Ver Produto</span>
                                        </div>
                                    </a>
                                    <div>
                                        <a href="<?php the_permalink(); ?>"><h4 class="text-m-purple"><?php the_title(); ?></h4></a>
                                        <?php $product = new WC_Product($post); ?>
                                        <span class="text-m-green">R$<?= $product->get_price(); ?></span>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>       
                    <?php endif; ?>
               <?php endif; ?>
        </div>
    </div>
</div>