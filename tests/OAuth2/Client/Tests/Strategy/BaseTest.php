<?php

namespace OAuth2\Client\Tests\Strategy;

class BaseTest extends \OAuth2\Client\Tests\TestCase
{
  /**
   * @covers OAuth2\Client\Strategy\Base::construct()
   */
   public function testConstructorBuildsBase()
   {
     // should initialize with a Client
     $this->setExpectedException('\InvalidArgumentException');
     new \OAuth2\Client\Strategy\Base;
   }
}
