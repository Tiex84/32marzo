<?php
/**
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<?php get_header(); ?>

<div class="hero">
    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <span class="subtitle">La 32 marzo al tuo fianco per il mercato estero</span>
                    <h1>Un team di professionisti <br>specializzati in export</h1>
                    <p>Realizziamo progetti di vendita su misura.<br>Partendo dal patrimonio esistente migliorando o creando servizi/percorsi rapidi ed efficaci per vendere all'estero.
                    </p>
                    <div class="primary-cta">
						<a class="btn btn-lg btn-primary" href="#">Contattaci</a>
					</div>
                </div>
                <div class="col-6"><img class="img-fluid" src="https://via.placeholder.com/600x380/cae8d5?Text=VIDEO" alt=""></div>
            </div>
        </div>
    </section>
</div>

<div class="content py-5">
    <section class="container">
        <div class="row">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/grafici.svg" alt="">
                <br>
                <img class="w-75 m-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/emailmarketing.svg" alt="">
                <br>
                <img class="w-75 m-auto img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/social.svg" alt="">

            </div>
            <div class="col-7">
                <h2>Il nostro compito è construire un piano ideale per la vendita all'estero</h2>

                <ul class="punti">
                    <li>
                        <a href="#">
                            <h4>Vendiamo i tuoi prodotti all'estero</h4>
                            <p>Due righe target geografico</p>
                        </a>  
                    </li>
                    <li>
                        <a href="#">
                            <h4>test</h4>
                            <p>lorem ipsum</p>
                        </a>         
                    </li>
                    <li>
                        <a href="#">
                            <h4>test</h4>
                            <p>lorem ipsum</p>
                        </a>  
                    </li>
                    <li>
                        <a href="#">
                            <h4>test</h4>
                            <p>lorem ipsum</p>
                        </a>  
                    </li>
                </ul>

                <h2>Per coronare l'impresa ci avvaliamo di strumenti classici e digitali</h2>

            </div>
        </div>

    </section>
</div>

<?php get_footer(); ?>
