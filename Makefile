.PHONY: build run-npm run-composer

build:
	cd npm && npm run build
	composer install

run-npm:
	cd npm && npm start

run-composer:
	php composer/bin/ababil
