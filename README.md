# clock

[![CI Status](https://github.com/localheinz/clock/workflows/Continuous%20Integration/badge.svg)](https://github.com/localheinz/clock/actions)
[![codecov](https://codecov.io/gh/localheinz/clock/branch/master/graph/badge.svg)](https://codecov.io/gh/localheinz/clock)
[![Latest Stable Version](https://poser.pugx.org/localheinz/clock/v/stable)](https://packagist.org/packages/localheinz/clock)
[![Total Downloads](https://poser.pugx.org/localheinz/clock/downloads)](https://packagist.org/packages/localheinz/clock)

Provides a simple abstraction of a clock, following the suggestion by [Martin Fowler](https://martinfowler.com/bliki/ClockWrapper.html).

## Installation

Run

```
$ composer require localheinz/clock
```

## Usage

### `SystemClock`

Create a new system clock and use it to determine the current time:

```php
use Localheinz\Clock;

$timeZone = new \DateTimeZone('Europe/Berlin');

$clock = new Clock\SystemClock($timeZone);

$now = $clock->now();
```

### `FrozenClock`

Create a new frozen clock and use it in tests:

```php
use Localheinz\Clock;

$now = new \DateTimeImmutable();

$clock = new Clock\FrozenClock($now);

sleep(5);

$stillNow = $clock->now();
```

## Changelog

Please have a look at [`CHANGELOG.md`](CHANGELOG.md).

## Contributing

Please have a look at [`CONTRIBUTING.md`](.github/CONTRIBUTING.md).

## Code of Conduct

Please have a look at [`CODE_OF_CONDUCT.md`](.github/CODE_OF_CONDUCT.md).

## License

This package is licensed using the MIT License.

## Credits

This project is inspired by [`lcobucci/clock`](https://github.com/lcobucci/clock)
(originally licensed under MIT by [Luís Cobucci](https://github.com/lcobucci)),
with additional support for PHP 7.0.
