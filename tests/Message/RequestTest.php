<?php

use Clue\React\Buzz\Message\Request;

class RequestTest extends TestCase
{
    public function testCtor()
    {
        $request = new Request('GET', '/');

        $this->assertEquals('GET', $request->getMethod());
        $this->assertEquals('/', $request->getUrl());
        $this->assertEquals('HTTP/1.1', $request->getHttpVersion());

        $this->assertEquals(array(), $request->getHeaders()->getAll());
        $this->assertTrue($request->getBody()->isEmpty());
    }
}
