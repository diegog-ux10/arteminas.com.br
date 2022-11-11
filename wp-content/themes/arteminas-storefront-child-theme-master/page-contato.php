<?php get_header() ?>

<!-- Banner -->

<div class="full-container banner-title">
    <div class="content-container-m">
        <?php the_title( '<h1 class="text-l-gold">', '</h1>' ); ?>
    </div>
</div>

<section class="contacto primary-container">
    <div class="content-container-m flex fale-conosco-container">
        <div class="info-direction">
            <h2 class="h2-bold bold text-gray">Endereço</h2>
            <p class="text-sm text-gray">Rua Emílio Favreto, 7<br>
             Bairro Gilberto Luiz Simonetto<br>
            Ampére - PR</p>
            <h2 class="h2-bold bold text-gray">Telefone</h2>
            <a href="tel:4635471494" target="_blank" class="text-sm text-gray"><p>(46)  3547 - 1494</a>
            <h2 class="h2-bold bold text-gray">Email</h2>
            <a href="mailto:vendas@moveisparana.com.br" target="_blank" class="text-sm text-gray"><p>vendas@moveisparana.com.br</p></a>
            <a href="mailto:Financeiro@moveisparana.com.br" target="_blank" class="text-sm text-gray"><p>Financeiro@moveisparana.com.br</p></a>
        </div>

        <div class="form-container">
            <h2 class="h2-bold bold text-gray">Formulário de Contato</h2>
            <?php echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]');?>
        </div>
    </div>   

</section>

<section class="full-container google-maps">

    <div class="content-container-m">
        <h2 class="h2-bold bold text-gray">Nossa Localização</h2>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14352.784620744527!2d-53.499995492187495!3d-25.928783299999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f0f3fe204120ab%3A0xfbbc78cf741d4dfc!2zTcOzdmVpcyBQYXJhbsOh!5e0!3m2!1ses!2sve!4v1658715153417!5m2!1ses!2sve" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

<?php get_footer() ?>