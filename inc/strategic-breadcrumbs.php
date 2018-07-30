<?php
/**
 * Custom Breadcrumbs
 *
 * @package munderstrap
 */

/**
 * Creates the breadcrumbs
 */
function get_breadcrumb() {

    $ID = get_the_ID();

    echo '<nav aria-label="breadcrumb">';
    echo '<ol id="breadcrumb" class="breadcrumb p-0 mb-0">';
    echo '<li class="breadcrumb-item"><a href="/">Home</a></li>';

    if(is_single()){
        echo '<li class="breadcrumb-item"><a href=' . get_page_link( get_page_by_title( "Blog" )->ID ) . '>Blog</a></li>';
        echo '<li class="breadcrumb-item">';

        $taxonomy = 'category';

        $separator = '</li><li class="breadcrumb-item">';

        $post_terms = wp_get_object_terms( $ID, $taxonomy, array( 'fields' => 'ids' ) );
        $term_ids = implode( ', ' , $post_terms );
        $terms = wp_list_categories( array(
            'title_li' => '',
            'style'    => 'none',
            'echo'     => false,
            'taxonomy' => $taxonomy,
            'include'  => $term_ids
        ) );

        $termsFormatted = str_replace( '<br />',  $separator, $terms );
        $termsFormatted = substr($termsFormatted, 0, strlen($termsFormatted) - 29);
        $terms = rtrim( $termsFormatted);
        echo $terms;

    } elseif (is_page()) {

    }

    echo '</ol>';
    echo '</nav>';

    return;
}