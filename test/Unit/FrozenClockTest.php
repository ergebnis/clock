<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/clock
 */

namespace Localheinz\Clock\Test\Unit;

use Ergebnis\Test\Util\Helper;
use Localheinz\Clock\ClockInterface;
use Localheinz\Clock\FrozenClock;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Localheinz\Clock\FrozenClock
 */
final class FrozenClockTest extends Framework\TestCase
{
    use Helper;

    public function testImplementsClockInterface(): void
    {
        self::assertClassImplementsInterface(ClockInterface::class, FrozenClock::class);
    }

    public function testNowReturnsInitializeDateTime(): void
    {
        $now = new \DateTimeImmutable();

        $clock = new FrozenClock($now);

        self::assertSame($now, $clock->now());
    }
}
