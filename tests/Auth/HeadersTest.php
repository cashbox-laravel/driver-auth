<?php

declare(strict_types=1);

namespace Tests\Auth;

use Tests\TestCase;
use LaravelCashierProvider\Driver\BankName\Auth\Auth;

class HeadersTest extends TestCase
{
    public function testBasic()
    {
        $auth = Auth::make($this->model(), $this->request(), false);

        $this->assertIsArray($auth->headers());

        $this->assertSame(['Accept' => 'application/json'], $auth->headers());
    }

    public function testHash()
    {
        $auth = Auth::make($this->model(), $this->request());

        $this->assertIsArray($auth->headers());

        $this->assertSame(['Accept' => 'application/json'], $auth->headers());
    }
}
