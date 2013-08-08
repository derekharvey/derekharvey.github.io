<?php

namespace LastFM;

class Scrobbles
{
	protected $_expiry = 3600; // 1hr

	protected $_user = null;

	protected $_last_response = null;

  protected $_max_store = 10;

	public function __construct($app)
	{
		$this->_db = $app['db'];
		$this->_user = new User($app['lastfm.config']);

		$this->_last_response = $this->getLastResponse();
	}

	public function retreive()
	{
		if ($this->lastResponseExpired()) {

			$response = $this->_user->getRecentTracks();

			$this->storeResponse($response);
			$this->storeScrobbles($response);
		}

		return $this->_db->fetchAll('SELECT * FROM lastfm_scrobbles');
	}

	public function storeScrobbles($response)
	{
		$tracks = json_decode($response, true);

		$tracks = $tracks['recenttracks']['track'];
		if (!is_array($tracks)) {
			return false;
		}

		$this->_db->query('TRUNCATE TABLE lastfm_scrobbles');

    $i = 0;
		foreach ($tracks as $track) {
			$this->_db->insert('lastfm_scrobbles', array(
				'name' => $track['name'],
				'artist' => $track['artist']['#text'],
        'url' => $track['url'],
        'image' => $track['image'][1]['#text']
			));
      if ($i > $this->_max_store) {
        break;
      }
		}
	}

	public function storeResponse($response)
	{
		$this->_db->insert('lastfm_responses', array(
			'data' => serialize($response),
			'datetime' => date('Y-m-d H:i:s') // @todo move to trigger
		));
	}

	public function getLastResponse()
	{
		return $this->_db->fetchAssoc('SELECT * FROM lastfm_responses ORDER BY datetime DESC');
	}

	public function lastResponseExpired()
	{
		if ((time() - $this->_expiry) > strtotime($this->_last_response['datetime'])) {
			return true;
		}
		return false;
	}
}
