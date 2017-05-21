<?php

namespace Da2e\SimpleFactory;

/**
 * Class SimpleFactoryTest
 */
class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        new SimpleFactory();
    }

    public function test_ImplementsInterface()
    {
        $factory = new SimpleFactory();
        $this->assertInstanceOf(SimpleFactoryInterface::class, $factory);
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Class da2e_foo_bar_123_xyz is not found
     */
    public function testCreate_WithInvalidClass()
    {
        $factory = new SimpleFactory();
        $factory->create('da2e_foo_bar_123_xyz');
    }

    public function testCreate_ObjectWithoutConstructorArgs()
    {
        $factory = new SimpleFactory();
        $object = $factory->create(DummyObjectWithoutConstructorArgs::class);

        $this->assertInstanceOf(DummyObjectWithoutConstructorArgs::class, $object);
    }

    public function testCreate_ObjectWithConstructorArgs()
    {
        $factory = new SimpleFactory();
        $object = $factory->create(DummyObjectWithConstructorArgs::class, ['bar']);

        $this->assertInstanceOf(DummyObjectWithConstructorArgs::class, $object);
        $this->assertSame('bar', $object->getFoo());
    }
}

class DummyObjectWithoutConstructorArgs
{
}

class DummyObjectWithConstructorArgs
{
    /**
     * @var string
     */
    private $foo;

    public function __construct(string $foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }
}