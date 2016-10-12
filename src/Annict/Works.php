<?php namespace Annict;
use Annict\Service;

/**
 * Works service
 */
class Works extends Service
{
  public function get($opts=array())
  {
    return $this->http->request('GET', '/v1/works', ['query' => $opts]);
  }
}
