<?php namespace Annict;
use Annict\Service;

/**
 * Episodes service
 */
class Episodes extends Service
{
  public function get($opts=array())
  {
    return $this->http->request('GET', '/v1/episodes', ['query' => $opts]);
  }
}
