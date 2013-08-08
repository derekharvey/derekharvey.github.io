<?php

/*
 * Controllers/Routing
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// index
$app->match('/', function () use ($app) {
  return $app['twig']->render('index.html.twig');
})->bind('homepage');

// about
$app->match('/about.html', function () use ($app) {
  return $app['twig']->render('about.html.twig');
})->bind('about');

// testimonials
$app->match('/testimonials.html', function () use ($app) {
  return $app['twig']->render('testimonials.html.twig', array(
    'testimonials' => $app['testimonials']->getTestimonials()
  ));
})->bind('testimonials');

// booking-prices
$app->match('/prices.html', function () use ($app) {
  return $app['twig']->render('prices.html.twig');
})->bind('prices');

// contact
$app->match('/contact.html', function () use ($app) {
  return $app['twig']->render('contact.html.twig');
})->bind('contact');

// sitemap
$app->match('/sitemap.html', function () use ($app) {
  return $app['twig']->render('sitemap.html.twig');
})->bind('sitemap');

// guitar-lessons-northampton
$app->match('/guitar_lessons_northampton.html', function () use ($app) {
  return $app['twig']->render('guitar_lessons_northampton.html.twig');
})->bind('guitar_lessons_northampton');

// mobile-guitar-lessons
$app->match('/mobile_guitar_lessons.html', function () use ($app) {
  return $app['twig']->render('mobile_guitar_lessons.html.twig');
})->bind('mobile_guitar_lessons');

// free-guitar-lesson
$app->match('/free_guitar_lessons.html', function () use ($app) {
  return $app['twig']->render('free_guitar_lessons.html.twig');
})->bind('free_guitar_lessons');

// error
$app->error(function(\Exception $e, $code) use ($app) {

  if ($app['debug']) {
    return;
  }

  $template = 'error.html.twig';
  switch ($code) {
    case 404:
      $template = '404.html.twig';
    break;
    default:
      $app['monolog']->addCritical("Application error");
  }

  $message = $app['twig']->render($template);

  return new Response($message, $code);
});
