<?php
// Check rows existexists.
if( have_rows('slider_home') ): ?>
    <div id="hero" class="full-container">
        <div class="content-container-m">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <?php
                // Loop through rows.
                while( have_rows('slider_home') ) : the_row(); ?>
                <div class="swiper-slide">
                    <a href="<?= get_sub_field('link'); ?>">
                        <img src="<?= get_sub_field('imagen'); ?>" alt="">
                    </a>
                </div>
                <?php 
                // End loop.
                endwhile; 
                ?>
                </div>
            </div>
        </div>
    </div>
<?php 
// No value.
else :
    echo 'Adicionar imagens do slider';
endif; ?>