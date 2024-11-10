<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018-2024 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/clock
 */

namespace Ergebnis\Clock;

final class UtcClock implements Clock
{
    /**
     * @var \DateTimeZone
     */
    private $timezone;

    public function __construct()
    {
        $this->timezone = new \DateTimeZone('UTC');
    }

    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable(
            'now',
            $this->timezone
        );
    }

    public function freeze(): FrozenClock
    {
        return new FrozenClock($this->now());
    }
}
