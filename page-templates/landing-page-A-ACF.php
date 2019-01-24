<?php
/**
 * Template Name: Landing Page Template A with ACF
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>

    <!-- Hero -->
    <div class="wrapper py-5 color-radial-gradient-semi-dark text-shadow-black text-inverse shadow">
        <div class="container py-5">
            <div class="row justify-content-between align-items-center py-5">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 align-items-center py-3">
                            <?php the_field('hero-headline'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 align-items-center pb-3">
                            <a href="<?php the_field('cta-url'); ?>" class="btn cta-button-dark text-large"><h3
                                        class="py-0 my-0"><?php the_field('hero-cta'); ?></h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php the_field('hero-image'); ?>" class="img-fluid rounded" alt="Logo"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Lead w/ Left Image -->
    <div class="wrapper py-0">
        <div class="container  py-5 ">
            <div class="row justify-content-between align-items-center py-5">
                <div class="col-md-5">
                    <img class="img-fluid rounded shadow" src="<?php the_field('lead-image'); ?>"/>
                </div>
                <div class="col-md-6">
                    <?php the_field('lead-text'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- 6 Card -->
    <div class="wrapper py-0 color-grey-light">
        <div class="container  pt-2 pb-5 ">
            <div class="row justify-content-between text-center align-items-stretch pt-5 pb-4">
                <div class="col-md-12">
                    <?php the_field('six-cards-text'); ?>
                </div>
            </div>
            <div class="row justify-content-between align-items-stretch pb-3">
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('six-cards-1'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('six-cards-2'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('six-cards-3'); ?></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-stretch pb-5">
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('six-cards-4'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('six-cards-5'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('six-cards-6'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Body A -->
    <div class="wrapper py-0 color-radial-gradient-med-dark text-inverse">
        <div class="container ">
            <div class="row d-flex align-items-center justify-content-center py-3">
                <div class="col-md-3 align-items-center text-center">
                </div>
                <div class="col-md-3 align-items-center text-center py-3">
                    <h3 class="mr-3 mb-0 cta_header"><?php the_field('cta-lead-A'); ?></h3>
                </div>
                <div class="col-md-3 align-items-center text-center py-3">
                    <a href="<?php the_field('cta-url'); ?>" class="btn cta-button text-large"><h3
                                class="py-0 my-0"><?php the_field('cta-text-A'); ?></h3></a>
                </div>
                <div class="col-md-3 align-items-center text-center">
                </div>
            </div>
        </div>
    </div>

    <!-- Squeeze start -->
    <div class="wrapper py-0">
        <div class="container px-0 py-0">
            <div class="row justify-content-center px-5">
                <div class="col-md-12 bordered-container shadow">

                    <!-- Squeeze Body A -->
                    <div class="wrapper py-0">
                        <div class="container py-5 ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-12">
                                    <?php the_field('squeeze-text-A'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Squeeze Body C w/ Right Image -->
                    <div class="wrapper py-0">
                        <div class="container  py-5 ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-6">
                                    <?php the_field('squeeze-text-B'); ?>
                                </div>
                                <div class="col-md-5">
                                    <img class="img-fluid rounded shadow" src="<?php the_field('squeeze-image-B'); ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Squeeze Body C w/ Left Image -->
                    <div class="wrapper py-0">
                        <div class="container  py-5">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-5">
                                    <img class="img-fluid rounded shadow" src="<?php the_field('squeeze-image-C'); ?>"/>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('squeeze-text-C'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Squeeze End -->
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Body B -->
    <div class="wrapper py-0 color-radial-gradient-med-dark text-inverse">
        <div class="container ">
            <div class="row d-flex align-items-center justify-content-center py-3">
                <div class="col-md-3 align-items-center text-center">
                </div>
                <div class="col-md-3 align-items-center text-center py-3">
                    <h3 class="mr-3 mb-0 cta_header"><?php the_field('cta-lead-B'); ?></h3>
                </div>
                <div class="col-md-3 align-items-center text-center py-3">
                    <a href="<?php the_field('cta-url'); ?>" class="btn cta-button text-large"><h3
                                class="py-0 my-0"><?php the_field('cta-text-B'); ?></h3></a>
                </div>
                <div class="col-md-3 align-items-center text-center">
                </div>
            </div>
        </div>
    </div>

    <!-- Five Card -->
    <div class="wrapper color-grey-light py-0">
        <div class="container align-items-stretch  pt-2 pb-5 ">
            <div class="row justify-content-between text-center align-items-stretch pt-5 pb-4">
                <div class="col-md-12">
                    <?php the_field('five-cards-text'); ?>
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('five-cards-1'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('five-cards-2'); ?></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between pb-3">
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('five-cards-3'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('five-cards-4'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4 px-2">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('five-cards-5'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Guarantee w/ Right Image -->
    <div class="wrapper py-0">
        <div class="container pt-2 pb-5 ">
            <div class="row justify-content-between align-items-center py-5">
                <div class="col-md-6">
                    <?php the_field('guarantee-text'); ?>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid rounded shadow" src="<?php the_field('guarantee-image'); ?>"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div class="wrapper color-grey-light py-0">
        <div class="container  pt-2 pb-5 ">
            <div class="row justify-content-between text-center align-items-stretch pt-5 pb-4">
                <div class="col-md-12">
                    <?php the_field('pricing-cards-text'); ?>
                </div>
            </div>
            <div class="row justify-content-between align-items-stretch pb-5">
                <div class="d-flex col-md-4">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('pricing-cards-1'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('pricing-cards-2'); ?></div>
                    </div>
                </div>
                <div class="d-flex col-md-4">
                    <div class="card card-default zoom">
                        <div class="card-body"><?php the_field('pricing-cards-3'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Body C -->
    <div class="wrapper py-0 color-radial-gradient-med-dark text-inverse">
        <div class="container ">
            <div class="row d-flex align-items-center justify-content-center py-3">
                <div class="col-md-3 align-items-center text-center">
                </div>
                <div class="col-md-3 align-items-center text-center py-3">
                    <h3 class="mr-3 mb-0 cta_header"><?php the_field('cta-lead-C'); ?></h3>
                </div>
                <div class="col-md-3 align-items-center text-center py-3">
                    <a href="<?php the_field('cta-url'); ?>" class="btn cta-button text-large"><h3
                                class="py-0 my-0"><?php the_field('cta-text-C'); ?></h3></a>
                </div>
                <div class="col-md-3 align-items-center text-center">
                </div>
            </div>
        </div>
    </div>

    <!-- About w/ Left Image -->
    <div class="wrapper py-0">
        <div class="container  pt-2 pb-5 ">
            <div class="row justify-content-between align-items-center py-5">
                <div class="col-md-5">
                    <img class="img-fluid rounded shadow" src="<?php the_field('about-image'); ?>"/>
                </div>
                <div class="col-md-6">
                    <?php the_field('about-text'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Form  -->
    <div class="wrapper py-0">
        <div class="container  pt-2 pb-5">
            <div class="row justify-content-between py-5">
                <div class="col-md-5">
                    <?php the_field('split-copy-column'); ?>
                </div>
                <div class="col-md-5">
                    <?php the_field('split-form-column'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQs -->
    <div class="wrapper pt-3 pb-5">
        <div class="container  pt-2 pb-5 ">
            <div class="row justify-content-between align-items-center text-center pt-3 pb-0 my-3 ">
                <div class="col-md-12">
                    <?php the_field('faqs-title'); ?>
                </div>
            </div>
            <div id="faq_sequence" class="accordion_sequence">

                <div class="card">
                    <div class="card-header" id="faq1_heading">
                        <a class="collapsed" data-toggle="collapse" data-target="#faq1" href="#faq1"
                           aria-expanded="false" aria-controls="faq1">
                            <h4 class="mb-0">
                                <?php the_field('faq-question-1'); ?>
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </h4>
                        </a>
                    </div>
                    <div id="faq1" class="collapse" aria-labelledby="faq1_heading" data-parent="#faq_sequence">
                        <div class="card-body">
                            <?php the_field('faq-answer-1'); ?>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faq2_heading">
                        <a class="collapsed" data-toggle="collapse" data-target="#faq2" href="#faq2"
                           aria-expanded="false" aria-controls="faq2">
                            <h4 class="mb-0">
                                <?php the_field('faq-question-2'); ?>
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </h4>
                        </a>
                    </div>
                    <div id="faq2" class="collapse" aria-labelledby="faq2_heading" data-parent="#faq_sequence">
                        <div class="card-body">
                            <?php the_field('faq-answer-2'); ?>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faq3_heading">
                        <a class="collapsed" data-toggle="collapse" data-target="#faq3" href="#faq3"
                           aria-expanded="false" aria-controls="faq3">
                            <h4 class="mb-0">
                                <?php the_field('faq-question-3'); ?>
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </h4>
                        </a>
                    </div>
                    <div id="faq3" class="collapse" aria-labelledby="faq3_heading" data-parent="#faq_sequence">
                        <div class="card-body">
                            <?php the_field('faq-answer-3'); ?>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faq4_heading">
                        <a class="collapsed" data-toggle="collapse" data-target="#faq4" href="#faq4"
                           aria-expanded="false" aria-controls="faq4">
                            <h4 class="mb-0">
                                <?php the_field('faq-question-4'); ?>
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </h4>
                        </a>
                    </div>
                    <div id="faq4" class="collapse" aria-labelledby="faq4_heading" data-parent="#faq_sequence">
                        <div class="card-body">
                            <?php the_field('faq-answer-4'); ?>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faq5_heading">
                        <a class="collapsed" data-toggle="collapse" data-target="#faq5" href="#faq5"
                           aria-expanded="false" aria-controls="faq5">
                            <h4 class="mb-0">
                                <?php the_field('faq-question-5'); ?>
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </h4>
                        </a>
                    </div>
                    <div id="faq5" class="collapse" aria-labelledby="faq5_heading" data-parent="#faq_sequence">
                        <div class="card-body">
                            <?php the_field('faq-answer-5'); ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

<?php
get_footer();
?>