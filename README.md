# clock

[![Integrate](https://github.com/ergebnis/clock/workflows/Integrate/badge.svg)](https://github.com/ergebnis/clock/actions)
[![Merge](https://github.com/ergebnis/clock/workflows/Merge/badge.svg)](https://github.com/ergebnis/clock/actions)
[![Release](https://github.com/ergebnis/clock/workflows/Release/badge.svg)](https://github.com/ergebnis/clock/actions)
[![Renew](https://github.com/ergebnis/clock/workflows/Renew/badge.svg)](https://github.com/ergebnis/clock/actions)

[![Code Coverage](https://codecov.io/gh/ergebnis/clock/branch/main/graph/badge.svg)](https://codecov.io/gh/ergebnis/clock)

[![Latest Stable Version](https://poser.pugx.org/ergebnis/clock/v/stable)](https://packagist.org/packages/ergebnis/clock)
[![Total Downloads](https://poser.pugx.org/ergebnis/clock/downloads)](https://packagist.org/packages/ergebnis/clock)
[![Monthly Downloads](http://poser.pugx.org/ergebnis/clock/d/monthly)](https://packagist.org/packages/ergebnis/clock)

This project provides a [`composer`](https://getcomposer.org) package with abstractions of a clock, following the suggestion by [Martin Fowler](https://martinfowler.com/bliki/ClockWrapper.html), and compatible with [PSR-20](https://www.php-fig.org/psr/psr-20/).

## Installation

Run

```sh
composer require ergebnis/clock
```

## Usage

### `SystemClock`

Create a new `SystemClock` and use it to determine the current time in a specific time zone:

```php
<?php

declare(strict_types=1);

use Ergebnis\Clock;

$clock = new Clock\SystemClock(new \DateTimeZone('Europe/Berlin'));

$now = $clock->now();
```

Freeze a `SystemClock` to turn it into a `FrozenClock`:

```php
<?php

declare(strict_types=1);

use Ergebnis\Clock;

$clock = new Clock\SystemClock(new \DateTimeZone('Europe/Berlin'));

$frozenClock = $clock->freeze();

$now = $clock->now();

sleep(5);

$stillNow = $clock->now();
```

### `UtcClock`

Create a new `UtcClock` and use it to determine the current time in the UTC time zone:

```php
<?php

declare(strict_types=1);

use Ergebnis\Clock;

$clock = new Clock\UtcClock();

$now = $clock->now();
```

Freeze a `UtcClock` to turn it into a `FrozenClock`:

```php
<?php

declare(strict_types=1);

use Ergebnis\Clock;

$clock = new Clock\UtcClock();

$frozenClock = $clock->freeze();

$now = $clock->now();

sleep(5);

$stillNow = $clock->now();
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

## Changelog

The maintainers of this project record notable changes to this project in a [changelog](CHANGELOG.md).

## Contributing

The maintainers of this project suggest following the [contribution guide](.github/CONTRIBUTING.md).

## Code of Conduct

The maintainers of this project ask contributors to follow the [code of conduct](https://github.com/ergebnis/.github/blob/main/CODE_OF_CONDUCT.md).

## General Support Policy

The maintainers of this project provide limited support.

You can support the maintenance of this project by [sponsoring @ergebnis](https://github.com/sponsors/ergebnis).

## PHP Version Support Policy

This project supports PHP versions with [active and security support](https://www.php.net/supported-versions.php).

The maintainers of this project add support for a PHP version following its initial release and drop support for a PHP version when it has reached the end of security support.

## Security Policy

This project has a [security policy](.github/SECURITY.md).

## License

This project uses the [MIT license](LICENSE.md).

## Credits

This project is inspired by [`lcobucci/clock`](https://github.com/lcobucci/clock) (originally licensed under MIT by [Luís Cobucci](https://github.com/lcobucci)).

## Social

Follow [@localheinz](https://twitter.com/intent/follow?screen_name=localheinz) and [@ergebnis](https://twitter.com/intent/follow?screen_name=ergebnis) on Twitter.
