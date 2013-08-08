<?php

namespace LastFM;

class User
{
  const ENRTY_POINT = 'http://ws.audioscrobbler.com/2.0/';

  protected $_config = null;

  /*
   * List of methods available
   */
  protected $_methods = array(
    'getRecentTracks' => 'user.getrecenttracks'
  );

  /*
   * Constructs configuration
   */
	public function __construct($config)
	{
		$this->_config = $config;
	}

  /*
   * Simple caller to catch all requests
   *
   * @param string $name      The method invoked
   * @param array  $arguments Any arguments passed
   *
   * @return
   */
  public function __call($name, $arguments)
  {
    if (array_key_exists($name, $this->_methods)) {
      $url = $this->_buildRequestUrl($this->_methods[$name]);
      return file_get_contents($url);
    }
  }

  /*
   * Simple caller to catch all requests
   *
   *   Example: ?method=foo.bar&user=foo&api_key=foo&format=bar
   *
   * @param string $method The name of the method to be called
   *
   * @return string The url for the request
   */
  protected function _buildRequestUrl($method)
  {
    $params = $this->_config;
    $params['method'] = $method;

    return self::ENRTY_POINT.'?'.http_build_query($params);
  }
}
