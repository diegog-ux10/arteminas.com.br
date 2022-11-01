<?php
/**
 * Converter argumentos do template-part em variáveis
 */
$cat_01 = $args['cat_01'];
$cat_02 = $args['cat_02'];
$cat_03 = $args['cat_03'];
/**
 * Incluindo a consulta[query] necessária
 */
include get_stylesheet_directory() . "/inc/query-cat-cards-home.php";

?>

<section class="category-cards">
    <?php foreach($categories->terms as $category): ?>
            <?php if($category->slug === $cat_01 || $category->slug === $cat_02 || $category->slug === $cat_03 ): ?>
                <div class="category-card" style='background-image: url("<?php echo get_taxonomy_image($category->term_id); ?>")'>
                    <a href="<?php echo get_term_link($category); ?>">
                        <h3 class="text-l-white"><?php echo $category->name; ?></h3>
                    </a>
                </div>
            <?php endif; ?>            
    <?php endforeach; ?>
</section>