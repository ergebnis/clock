# clock

[![Build Status](https://travis-ci.org/localheinz/clock.svg?branch=master)](https://travis-ci.org/localheinz/clock)
[![codecov](https://codecov.io/gh/localheinz/clock/branch/master/graph/badge.svg)](https://codecov.io/gh/localheinz/clock)
[![Latest Stable Version](https://poser.pugx.org/localheinz/clock/v/stable)](https://packagist.org/packages/localheinz/clock)
[![Total Downloads](https://poser.pugx.org/localheinz/clock/downloads)](https://packagist.org/packages/localheinz/clock)

Provides a simple abstraction of a clock.

## Installation

Run

```
$ composer require localheinz/clock
```

## Usage

Create a new clock and use it to determine the current time:

```php
use Localheinz\Clock;


$clock = new Clock\SystemClock();

$now = $clock->now();
```

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
