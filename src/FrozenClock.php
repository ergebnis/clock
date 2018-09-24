<?php

/**
 * Copyright (c) 2018 Andreas Möller.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/clock
 */

namespace Localheinz\Clock;

final class FrozenClock implements ClockInterface
{
    /**
     * @var \DateTimeImmutable
     */
    private $now;

    public function __construct(\DateTimeImmutable $now)
    {
        $this->now = $now;
    }

    public function now()
    {
        return $this->now;
    }
}
