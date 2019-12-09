<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/clock
 */

namespace Ergebnis\Clock\Test\Unit;

use Ergebnis\Clock\Clock;
use Ergebnis\Clock\SystemClock;
use Ergebnis\Test\Util\Helper;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Ergebnis\Clock\SystemClock
 */
final class SystemClockTest extends Framework\TestCase
{
    use Helper;

    public function testImplementsClockInterface(): void
    {
        self::assertClassImplementsInterface(Clock::class, SystemClock::class);
    }

    public function testNowReturnsCurrentDateTime(): void
    {
        $timeZone = new \DateTimeZone('Europe/Berlin');

        $clock = new SystemClock($timeZone);

        $before = new \DateTimeImmutable(
            'now',
            $timeZone
        );

        $now = $clock->now();

        $after = new \DateTimeImmutable(
            'now',
            $timeZone
        );

        self::assertGreaterThanOrEqual($before, $now);
        self::assertLessThanOrEqual($after, $now);
    }
}
