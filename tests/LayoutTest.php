<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */
use App\Source\Layout;
use PHPUnit\Framework\TestCase;

class LayoutTest extends TestCase
{
    /**
     * Layout Instance
     * @var Layout
     */
    private Layout $layout;
    /**
     * @test
     */
    public function setUp() : void
    {
        $this->layout = new Layout;

        $this->assertInstanceOf(Layout::class, $this->layout);
    }
    /**
     * [None Description]
     * @test
     */
    public function testLoadThePageViewUrl()
    {
        $this->layout->add('list_file');

        $expected = 'app/views/list_file.php';

        $this->assertEquals($expected, $this->layout->load());
    }//THIS SHOWING ERROR
    /**
     * [Test Throw Exception If Layout Master Has Not Been Defined]
     * @test
     * @expectedException InvalidaArgumentMessage
     * @expectedExceptionMessage Master layout has not been defined.
     */
    public function testThrowExcepetionMasterLayoutHasNotBeenDefined()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Master layout has not been defined.');

        Layout::master();
    }
    /**
     * [None Description]
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Error 404: Page not found "/test"
     */
    public function testThrowExcepetionNotFoundViewPage()
    {
        $this->layout->add('test');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('Error 404: Page not found "/%s"', $this->layout->getView()));

        $this->layout->load();
    }
}
