<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\SpecialFolderProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\SpecialFolder;

class SpecialFolderProxyTest extends \PHPUnit_Framework_TestCase
{
    public function testNameShouldReturnExpectedValue()
    {
        $graph         = $this->createMock(Graph::class);
        $systemFacet   = $this->createMock(SpecialFolder::class);
        $specialFolder = $this->createMock(SpecialFolder::class);
        $specialFolder->method('getName')->willReturn('Name');
        $sut = new SpecialFolderProxy($graph, $specialFolder);
        $this->assertInternalType('string', $sut->name);
        $this->assertSame('Name', $sut->name);
    }
}