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

use Localheinz\Clock\ClockInterface;
use Localheinz\Clock\SystemClock;
use Localheinz\Test\Util\Helper;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Localheinz\Clock\SystemClock
 */
final class SystemClockTest extends Framework\TestCase
{
    use Helper;

    public function testImplementsClockInterface(): void
    {
        self::assertClassImplementsInterface(ClockInterface::class, SystemClock::class);
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
