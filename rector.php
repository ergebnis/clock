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

use Rector\Config;
use Rector\PHPUnit;
use Rector\ValueObject;

return static function (Config\RectorConfig $rectorConfig): void {
    $rectorConfig->cacheDirectory(__DIR__ . '/.build/rector/');

    $rectorConfig->paths([
        __DIR__ . '/src/',
        __DIR__ . '/test/',
    ]);

    $rectorConfig->phpVersion(ValueObject\PhpVersion::PHP_72);

    $rectorConfig->sets([
        PHPUnit\Set\PHPUnitSetList::PHPUNIT_80,
    ]);
};
