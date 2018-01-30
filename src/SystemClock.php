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

namespace Localheinz\Clock;

final class SystemClock implements ClockInterface
{
    /**
     * @var \DateTimeZone
     */
    private $timezone;

    public function __construct(\DateTimeZone $timezone = null)
    {
        $this->timezone = $timezone ?: new \DateTimeZone(\date_default_timezone_get());
    }

    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable(
            'now',
            $this->timezone
        );
    }
}
