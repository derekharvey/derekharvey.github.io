<?php

use Silex\WebTestCase;

class HomepageTest extends WebTestCase
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

  public function test404()
  {
    $client = $this->createClient();

    $client->request('GET', '/404-not-found');
    $this->assertEquals(404, $client->getResponse()->getStatusCode());
  }

  public function testReturnsStatusOk()
  {
    $client = $this->createClient();
    $client->request('GET', '/');

    $this->assertTrue($client->getResponse()->isOk());
  }

  public function testTitle()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/');

    $this->assertEquals('Mobile Guitar Tutor, Derek Harvey, Guitar Lessons in Northampton', $crawler->filter('title')->first()->text());
  }

  public function testHeading()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/');

    $this->assertEquals("Mobile Guitar Tutor in Northampton", $crawler->filter('h1')->first()->text());
  }
}
