<?php

use Silex\WebTestCase;

class AboutTest extends WebTestCase
{
  public function createApplication()
  {
    // Silex
    $app = new Silex\Application();
    require __DIR__.'/../../resources/config/test.php';
    require __DIR__.'/../../src/app.php';

    // Controllers
    require __DIR__ . '/../../src/controllers.php';

    return $this->app = $app;
  }

  public function testReturnsStatusOk()
  {
    $client = $this->createClient();
    $client->request('GET', '/about.html');

    $this->assertTrue($client->getResponse()->isOk());
  }

  public function testTitle()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/about.html');

    $this->assertEquals('About, Derek Harvey, Guitar Lessons in Northampton', $crawler->filter('title')->first()->text());
  }

  public function testHeading()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/about.html');

    $this->assertEquals("About me", $crawler->filter('h1')->first()->text());
  }

  public function testActiveTab()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/about.html');

    $classes = explode(' ', $crawler->filter('#menu-top .menu-item')->first()->attr("class"));

    $this->assertTrue(in_array("current_page_item", $classes));
  }
}
