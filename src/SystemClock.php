<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018-2022 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/clock
 */

namespace Ergebnis\Clock;

final class SystemClock implements Clock
{
    public function __construct(private \DateTimeZone $timezone)
    {
    }

    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable(
            'now',
            $this->timezone,
        );
    }

    public function freeze(): FrozenClock
    {
        return new FrozenClock($this->now());
    }
}
