<?php

/**
 * Copyright (c) 2018 Andreas Möller.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/clock
 */

namespace Localheinz\Clock\Test\Unit;

use PHPUnit\Framework;
use Refinery29\Test\Util\TestHelper;

/**
 * @internal
 */
final class ProjectCodeTest extends Framework\TestCase
{
    use TestHelper;

    public function testProductionClassesAreAbstractOrFinal()
    {
        $this->assertClassesAreAbstractOrFinal(__DIR__ . '/../../src');
    }

    public function testTestClassesAreAbstractOrFinal()
    {
        $this->assertClassesAreAbstractOrFinal(__DIR__ . '/..');
    }
}
