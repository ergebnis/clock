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

use Rector\Config;
use Rector\PHPUnit;
use Rector\ValueObject;

return static function (Config\RectorConfig $rectorConfig) {
    $rectorConfig->cacheDirectory(__DIR__ . '/.build/rector/');

    $rectorConfig->paths([
        __DIR__ . '/src/',
        __DIR__ . '/test/',
        __DIR__ . '/.php-cs-fixer.php',
        __DIR__ . '/rector.php',
    ]);

    $rectorConfig->phpVersion(ValueObject\PhpVersion::PHP_70);

    $rectorConfig->sets([
        PHPUnit\Set\PHPUnitSetList::PHPUNIT_70,
    ]);
};
