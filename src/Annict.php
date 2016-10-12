<?php
use GuzzleHttp\Client;
use Annict\Works;
use Annict\Episodes;
use Annict\Records;

/**
 * Annict API interface
 */
class Annict
{
  protected $http;
  protected $works;
  protected $episodes;
  protected $records;

  function __construct($access_token)
  {
    $this->http = new Client([
      'base_uri' => 'https://api.annict.com',
      'headers'  => [
        'User-Agent'    => 'php-annict',
        'Content-Type'  => 'application/json',
        'Accept'        => 'application/json',
        'Authorization' => $access_token,
      ],
    ]);

    // Authentication
    $this->works    = new Works    ($this->http);
    $this->episodes = new Episodes ($this->http);
    $this->records  = new Records  ($this->http);
    // MeStatuses
    // MeRecords
    // MeWorks
    // MePrograms
  }
}