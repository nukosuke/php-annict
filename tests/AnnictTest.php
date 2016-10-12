<?php

class AnnictTest extends PHPUnit_Framework_TestCase {

  public function testAnnictIncetanceOf()
  {
    $annict = new Annict('');
    $this->assertInstanceOf(Annict::class, $annict);
  }

}
