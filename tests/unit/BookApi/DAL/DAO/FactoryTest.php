<?php

namespace BookApi\DAL\DAO;

class FactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Sum
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Factory();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        unset($this->object);
    }

    public function testCreateConnection()
    {
        $this->assertInstanceOf("\PDO", $this->object->createConnection());
    }

}
