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

use Ergebnis\Clock\FrozenClock;
use Ergebnis\Clock\UtcClock;
use PHPUnit\Framework;

/**
 * @covers \Ergebnis\Clock\UtcClock
 *
 * @uses \Ergebnis\Clock\FrozenClock
 */
final class UtcClockTest extends Framework\TestCase
{
    public function testNowReturnsCurrentDateTime(): void
    {
        $timeZone = new \DateTimeZone('UTC');

        $clock = new UtcClock();

        $before = new \DateTimeImmutable(
            'now',
            $timeZone,
        );

        $now = $clock->now();

        $after = new \DateTimeImmutable(
            'now',
            $timeZone,
        );

        self::assertGreaterThanOrEqual($before, $now);
        self::assertLessThanOrEqual($after, $now);
    }

    public function testFreezeReturnsFrozenClock(): void
    {
        $timeZone = new \DateTimeZone('UTC');

        $clock = new UtcClock();

        $before = new \DateTimeImmutable(
            'now',
            $timeZone,
        );

        $frozenClock = $clock->freeze();

        $after = new \DateTimeImmutable(
            'now',
            $timeZone,
        );

        self::assertInstanceOf(FrozenClock::class, $frozenClock);

        $now = $frozenClock->now();

        self::assertGreaterThanOrEqual($before, $now);
        self::assertLessThanOrEqual($after, $now);

        self::assertSame($now, $frozenClock->now());
    }
}
