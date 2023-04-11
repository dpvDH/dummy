<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Initial;

class InitialTest extends TestCase
{
    public function testSum(): void
    {
        $summer = new Initial();
        $this->assertSame(4, $summer->sum(1, 3));
    }
}
