<?php

declare(strict_types=1);

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
use Localheinz\Clock\SystemClock;
use Localheinz\Test\Util\Helper;
use PHPUnit\Framework;

/**
 * @internal
 */
final class SystemClockTest extends Framework\TestCase
{
    use Helper;

    /**
     * @var string
     */
    private $dateTimeDefault;

    protected function setUp()
    {
        $this->dateTimeDefault = \date_default_timezone_get();
    }

    protected function tearDown()
    {
        \date_default_timezone_set($this->dateTimeDefault);
    }

    public function testImplementsClockInterface()
    {
        $this->assertClassImplementsInterface(ClockInterface::class, SystemClock::class);
    }

    public function testNowReturnsCurrentDateTime()
    {
        $clock = new SystemClock();

        $before = new \DateTimeImmutable();

        $now = $clock->now();

        $after = new \DateTimeImmutable();

        $this->assertGreaterThanOrEqual($before, $now);
        $this->assertLessThanOrEqual($after, $now);
    }

    public function testNowReturnsCurrentDateTimeWithCurrentTimezone()
    {
        $clock = new SystemClock();

        $now = $clock->now();

        $this->assertSame(\date_default_timezone_get(), $now->getTimezone()->getName());
    }

    public function testNowReturnsCurrentDateTimeWithInitializedTimezone()
    {
        $timezone = new \DateTimeZone('Europe/Berlin');

        $clock = new SystemClock($timezone);

        $now = $clock->now();

        $this->assertSame($timezone->getName(), $now->getTimezone()->getName());
    }
}
