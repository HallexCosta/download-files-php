<?php
/*
 * @author Hállex da Silva Costa <hallex.costa@hotmail.com>
 * @copyright (c) 2020 All rights reserved.
 */

use App\Source\Route;
use PHPUnit\Framework\TestCase;

/**
 * [Description]
 * class UriTest
 */
class RouteTest extends TestCase
{
    /**
     * Instance Route
     * @var Route
     */
    private Route $route;
    /**
     * @test
     */
    public function setUp() : void
    {
        $this->route = new Route;

        $this->assertInstanceOf(Route::class, $this->route);
    }
    /**
     * @test
     */
    public function testCheckIfIsValidRoute()
    {
        $routes = [
            '/' => 'controllers/list_file'
        ];
        $actual = '/';
        $expected = '../app/controllers/list_file.php';

        $uri = $actual;

        $this->assertEquals($expected, $this->route->load($uri, $routes));
    }
    /**
     * [Throw Exception If The Route Is Invalid]
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Thr route "/testando" is invalid.
     */
    public function testThrowExceptionTheRouteIsInvalid()
    {
        $routes = [
            '/' => 'controllers/list_file'
        ];

        $uri = '/testando';

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            sprintf('The route "%s" is invalid.', $uri)
        );

        Route::load($uri, $routes);
    }
}
