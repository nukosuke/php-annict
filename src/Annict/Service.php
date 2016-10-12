<?php namespace Annict;

/**
 * service interface
 */
class Service
{
  protected $http;

  function __construct($http)
  {
    $this->http = $http;
  }
}
