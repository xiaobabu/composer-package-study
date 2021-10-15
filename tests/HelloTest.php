<?php
namespace Echoou\ComposerPackageStudy\Tests;

use Echoou\ComposerPackageStudy\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testShowHelloWorld()
    {
        $m = new HelloWorld();
        $this->assertTrue($m->showHelloWorld());
    }
}