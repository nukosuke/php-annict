<?php namespace Annict;
use Annict\Service;

/**
 * Records service
 */
class Records extends Service
{
  public function get($opts=array())
  {
    return $this->http->request('GET', '/v1/records', ['query' => $opts]);
  }
}
