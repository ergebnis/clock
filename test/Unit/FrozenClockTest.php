<?php

/**
 * Copyright (c) 2018 Andreas Möller.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/clock
 */

namespace Localheinz\Clock\Test\Unit;

use Localheinz\Clock\ClockInterface;
use Localheinz\Clock\FrozenClock;
use PHPUnit\Framework;
use Refinery29\Test\Util\TestHelper;

/**
 * @internal
 */
final class FrozenClockTest extends Framework\TestCase
{
    use TestHelper;

    public function testImplementsClockInterface()
    {
        $this->assertImplements(ClockInterface::class, FrozenClock::class);
    }

    public function testNowReturnsInitializeDateTime()
    {
        $now = new \DateTimeImmutable();

        $clock = new FrozenClock($now);

        $this->assertSame($now, $clock->now());
    }
}
