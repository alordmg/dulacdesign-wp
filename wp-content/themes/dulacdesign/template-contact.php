<?php
/*
Template Name: Contact
*/

$context = Timber::get_context();
//$args = 'post_type=post';
//$context['posts'] = Timber::get_posts($args);
$context['post'] = new TimberPost();
Timber::render(array('page-contact.twig'), $context);
