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

Provides a simple abstraction of a clock, following the suggestion by [Martin Fowler](https://martinfowler.com/bliki/ClockWrapper.html).

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

Please have a look at [`CHANGELOG.md`](CHANGELOG.md).

## Contributing

Please have a look at [`CONTRIBUTING.md`](.github/CONTRIBUTING.md).

## Code of Conduct

Please have a look at [`CODE_OF_CONDUCT.md`](https://github.com/ergebnis/.github/blob/main/CODE_OF_CONDUCT.md).

## Security Policy

Please have a look at [`SECURITY.md`](.github/SECURITY.md).

## License

This package is licensed using the MIT License.

Please have a look at [`LICENSE.md`](LICENSE.md).

## Credits

This project is inspired by [`lcobucci/clock`](https://github.com/lcobucci/clock) (originally licensed under MIT by [Luís Cobucci](https://github.com/lcobucci)).

## Curious what I am up to?

Follow me on [Twitter](https://twitter.com/intent/follow?screen_name=localheinz)!
