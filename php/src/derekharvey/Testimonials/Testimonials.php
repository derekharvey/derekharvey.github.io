<?php

namespace Testimonials;

class Testimonials
{
  protected $_testimonials = array(
    array(
      'author' => 'Antony E',
      'date' => '2013-01-22',
      'testimonial' => 'I recently started learning how to play the Guitar, with Derek\'s helpful advice and patience with me I\'m really starting to progress.'
    ),
    array(
      'author' => 'James F',
      'date' => '2012-02-19',
      'testimonial' => 'Excellent teacher. I have progressed so much in only a few weeks! Thank you Derek.'
    ),
    array(
      'author' => 'Del H',
      'date'   => '2010-01-17',
      'testimonial' => 'I never thought i’d be able to play the guitar but after the initial lessons i found that i could play. Now i can pick up a guitar and know how to use it, i really do enjoy playing. Thank you so much.'
    ),
    array(
      'author' => 'Jonathan G',
      'date' => '2009-12-12',
      'testimonial' => 'I have always wanted to learn how to play the acoustic guitar, but i never managed to find the time to arrange guitar lessons. That’s the great thing about Derek, he comes to me! It is so convenient for my life style, i have only had a few lessons now but i feel i’m making real progress. Thanks Derek!'
    ),
    array(
      'author'  =>  'Bill H',
      'date' => '2008-04-17',
      'testimonial' => 'Derek has been teaching me for the better part of a year. With over thirty years experience he teaches how to play without the pitfalls and bad habits of going it alone. I heartily recommend him.'
    )
  );

  /*
   * Constructs configuration
   */
	public function __construct($config)
	{
		$this->_config = $config;
	}

  public function getTestimonials()
  {
    return $this->_testimonials;
  }
}
