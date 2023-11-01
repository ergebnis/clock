# clock

[![Integrate](https://github.com/ergebnis/clock/workflows/Integrate/badge.svg)](https://github.com/ergebnis/clock/actions)
[![Merge](https://github.com/ergebnis/clock/workflows/Merge/badge.svg)](https://github.com/ergebnis/clock/actions)
[![Release](https://github.com/ergebnis/clock/workflows/Release/badge.svg)](https://github.com/ergebnis/clock/actions)
[![Renew](https://github.com/ergebnis/clock/workflows/Renew/badge.svg)](https://github.com/ergebnis/clock/actions)

[![Code Coverage](https://codecov.io/gh/ergebnis/clock/branch/main/graph/badge.svg)](https://codecov.io/gh/ergebnis/clock)
[![Type Coverage](https://shepherd.dev/github/ergebnis/clock/coverage.svg)](https://shepherd.dev/github/ergebnis/clock)

[![Latest Stable Version](https://poser.pugx.org/ergebnis/clock/v/stable)](https://packagist.org/packages/ergebnis/clock)
[![Total Downloads](https://poser.pugx.org/ergebnis/clock/downloads)](https://packagist.org/packages/ergebnis/clock)
[![Monthly Downloads](http://poser.pugx.org/ergebnis/clock/d/monthly)](https://packagist.org/packages/ergebnis/clock)

This package provides a simple abstraction of a clock, following the suggestion by [Martin Fowler](https://martinfowler.com/bliki/ClockWrapper.html), and compatible with [PSR-20](https://www.php-fig.org/psr/psr-20/).

## Installation

Run

```sh
composer require ergebnis/clock
```

## Usage

### `SystemClock`

Create a new system clock and use it to determine the current time:

```php
<?php

declare(strict_types=1);

use Ergebnis\Clock;

$timeZone = new \DateTimeZone('Europe/Berlin');

$clock = new Clock\SystemClock($timeZone);

$now = $clock->now();
```

### `FrozenClock`

Create a new frozen clock and use it in tests:

```php
<?php

declare(strict_types=1);

use Ergebnis\Clock;

$now = new \DateTimeImmutable();

$clock = new Clock\FrozenClock($now);

sleep(5);

$stillNow = $clock->now();
```

Alternatively, create a new frozen clock by freezing a system clock:

```php
<?php

declare(strict_types=1);

use Ergebnis\Clock;

$timeZone = new \DateTimeZone('Europe/Berlin');

$clock = new Clock\SystemClock($timeZone);

$frozenClock = $clock->freeze();

$now = $clock->now();

sleep(5);

$stillNow = $clock->now();
```

## Changelog

The maintainers of this package record notable changes to this project in a [changelog](CHANGELOG.md).

## Contributing

The maintainers of this package suggest following the [contribution guide](.github/CONTRIBUTING.md).

## Code of Conduct

The maintainers of this package ask contributors to follow the [code of conduct](.github/CODE_OF_CONDUCT.md).

## General Support Policy

The maintainers of this package provide limited support.

You can support the maintenance of this package by [sponsoring @localheinz](https://github.com/sponsors/localheinz) or [requesting an invoice for services related to this package](mailto:am@localheinz.com?subject=ergebnis/clock:%20Requesting%20invoice%20for%20services).

## PHP Version Support Policy

This package supports PHP versions with [active support](https://www.php.net/supported-versions.php).

The maintainers of this package add support for a PHP version following its initial release and drop support for a PHP version when it has reached its end of active support.

## Security Policy

This package has a [security policy](.github/SECURITY.md).

## License

This package uses the [MIT license](LICENSE.md).

## Credits

This package is inspired by [`lcobucci/clock`](https://github.com/lcobucci/clock) (originally licensed under MIT by [Luís Cobucci](https://github.com/lcobucci)).

## Social

Follow [@localheinz](https://twitter.com/intent/follow?screen_name=localheinz) and [@ergebnis](https://twitter.com/intent/follow?screen_name=ergebnis) on Twitter.
