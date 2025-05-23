<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018-2025 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/clock
 */

namespace Ergebnis\Clock\Test\Unit;

use Ergebnis\Clock\FrozenClock;
use PHPUnit\Framework;

/**
 * @covers \Ergebnis\Clock\FrozenClock
 */
final class FrozenClockTest extends Framework\TestCase
{
    public function testNowReturnsInitializeDateTime()
    {
        $now = new \DateTimeImmutable();

        $clock = new FrozenClock($now);

        self::assertSame($now, $clock->now());
    }
}
