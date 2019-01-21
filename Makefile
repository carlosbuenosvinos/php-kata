test:
	bin/phpunit ./tests/

test-file:
	bin/phpunit ./tests/ --group $(FILE)

stan:
	bin/phpstan analyse $(FILE) --level 7

cs-fixer:
	bin/php-cs-fixer fix $(FILE)