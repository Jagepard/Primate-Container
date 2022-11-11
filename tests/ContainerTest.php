<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 *
 *  phpunit src/tests/ContainerTest --coverage-html src/tests/coverage-html
 */

namespace Primate\Container\Tests;

use Primate\Container\Container;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Primate\Container\ContainerInterface;

class ContainerTest extends PHPUnit_Framework_TestCase
{
    private ContainerInterface $primate;

    protected function setUp(): void
    {
        require "./vendor/autoload.php";

        $this->primate = new Container([ContainerTest::class => $this]);
    }

    public function testInstances()
    {
        $this->assertInstanceOf(Container::class, $this->primate);
    }

    public function testGetInvalidArgumentException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->primate->get("wrongKey");
    }

    public function testSet(): void
    {
        $this->assertInstanceOf(ContainerTest::class, $this->primate->get(ContainerTest::class));
    }

    public function testGetArrayHasKey(): void
    {
        $this->assertArrayHasKey(ContainerTest::class, $this->primate->get());
    }


    public function testHas(): void
    {
        $this->assertTrue($this->primate->has(ContainerTest::class));
    }
}
