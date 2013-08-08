<?php

class Config
{
  function images()
  {
    return array(
      'telBlack'      => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFgAAAASAQMAAADlmIt9AAAABlBMVEUAAAAAAAClZ7nPAAAAAXRSTlMAQObYZgAAAGVJREFUCJljYKAAyNVV/nzAzC/HVvGBwZjtjLQBu+RmvrMzGIx5zhgYcEtulgOyzXkqDB8wS84zu/OBwVriTIIBM//mtLdANWA24+Y6kHqDM4cNmCU3swHZcgYVBx/wnwebSQEAAC1NIj1m9ygtAAAAAElFTkSuQmCC',
      'telWhite'      => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFgAAAASAQMAAADlmIt9AAAABlBMVEUAAAD///+l2Z/dAAAAAXRSTlMAQObYZgAAAGVJREFUCJljYKAAyNVV/nzAzC/HVvGBwZjtjLQBu+RmvrMzGIx5zhgYcEtulgOyzXkqDB8wS84zu/OBwVriTIIBM//mtLdANWA24+Y6kHqDM4cNmCU3swHZcgYVBx/wnwebSQEAAC1NIj1m9ygtAAAAAElFTkSuQmCC',
      'telWhiteLarge' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAAASAQMAAACAdXkCAAAABlBMVEUAAAD///+l2Z/dAAAAAXRSTlMAQObYZgAAAJhJREFUGJVjYKAeYJN/fPznBwYJOX6Gg40PGPgZ0hKkJRgsjCUbDx82YJBsyDGQ4GGoSNxw+FiaBIPBgWMJBhIMEokz284YGzAYHGw+kFDAIGHcz3PG8AGDwWG2hANAWdmZM8Cyx3gMG3gYJBg33H9jJsEg2cNjzADkKm44ADKKX4ItjRmo2FiyAWQRmwTzMcYPDHVQZ5ACAI8nLumGXn1ZAAAAAElFTkSuQmCC'
    );
  }

  public function navigation()
  {
    return array(
      'about' => array(
        'url'=>'about.html',
        'label'=>'About',
        'footer_link' => false
      ),
      'testimonials' => array(
        'url'=>'testimonials.html',
        'label'=>'Testimonials',
        'footer_link' => false
      ),
      'bookings`' => array(
        'url'=>'booking-prices.html',
        'label'=>'Prices',
        'footer_link' => false
      ),
      'contact' => array(
        'url'=>'contact.html',
        'label'=>'Contact',
        'footer_link' => false
      ),
      'sitemap' => array(
        'url'=>'sitemap.html',
        'label'=>'Sitemap',
        'footer_link' => true,
        'sitemap_hidden' => true
      ),
      'guitar-lessons-northampton' => array(
        'url'=>'guitar-lessons-northampton.html',
        'label'=>'Guitar Lessons Northampton',
        'footer_link' => true
      ),
      'mobile-guitar-lessons' => array(
        'url'=>'mobile-guitar-lessons.html',
        'label'=>'Mobile Guitar Lessons',
        'footer_link' => true
      ),
      'free-guitar-lessons' => array(
        'url'=>'free-guitar-lessons.html',
        'label'=>'Free Guitar Lessons',
        'footer_link' => true
      ),
    );
  }
}