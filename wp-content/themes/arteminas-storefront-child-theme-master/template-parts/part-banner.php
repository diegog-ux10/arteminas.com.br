<?php 
/**
 * Converter argumentos do template-part em variáveis
 */

$banner_link = $args["link"];
$imagen = $args['imagen'];

?>

<div id="hero" class="banner">
    <a href="<?= $banner_link ?>">
        <img src="<?php echo $imagen ?>" alt="banner">
    </a>
</div> 