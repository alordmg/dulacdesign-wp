<?php
/*
Template Name: Créations
*/

$context = Timber::get_context();
$args = 'post_type=post';
$context['posts'] = Timber::get_posts($args);
$context['post'] = new TimberPost();
$context['categories'] = Timber::get_terms(array('taxonomy' => 'category', 'number' => '6', 'exclude' => '1'));
Timber::render(array('page-creations.twig'), $context);
