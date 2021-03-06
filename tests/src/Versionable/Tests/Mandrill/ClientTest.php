<?php

namespace Versionable\Test\Mandrill;

use Versionable\Mandrill\Client;

/**
 * Test class for Client.
 * Generated by PHPUnit on 2012-06-21 at 01:12:59.
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Client
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Client(API_KEY);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Versionable\Mandrill\Client::setKey
     * @todo Implement testSetKey().
     */
    public function testSetKey()
    {
        $key = 'test';
        
        $this->object->setApiKey($key);
        
        $this->assertEquals($key, $this->readAttribute($this->object, 'apiKey'));
    }

    /**
     * @covers Versionable\Mandrill\Client::send
     * @todo Implement testSend().
     */
    public function testSend()
    {
        $response = $this->object->send('/users/ping');
        
        $this->assertEquals('"PONG!"', $response);
    }

    public function testSendFail()
    {
        $this->setExpectedException('RuntimeException');
        
        $response = $this->object->send('/foo/bar');
    }
}
