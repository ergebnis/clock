.PHONY: coverage cs it stan test

it: cs test

coverage: vendor
	vendor/bin/phpunit --configuration=test/Unit/phpunit.xml --coverage-text

cs: vendor
	vendor/bin/php-cs-fixer fix --config=.php_cs --diff --verbose

test: vendor
	vendor/bin/phpunit --configuration=test/Unit/phpunit.xml

vendor: composer.json composer.lock
	composer self-update
	composer validate
	composer install
