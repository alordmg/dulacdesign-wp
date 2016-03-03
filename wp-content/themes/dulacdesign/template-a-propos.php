<?php
/*
Template Name: À propos
*/

$context = Timber::get_context();
//$args = 'post_type=post';
//$context['posts'] = Timber::get_posts($args);
$context['post'] = new TimberPost();
Timber::render(array('page-accueil.twig'), $context);
