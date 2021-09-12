#!/usr/bin/env bash
composer install -o

rm -rf var/cache/*
./vendor/bin/phpunit --coverage-xml build/coverage-xml --coverage-html build/coverage-html --coverage-clover build/clover.xml --log-junit=build/coverage-xml/junit.xml
./vendor/bin/infection --coverage=build/coverage-xml

while true; do
    read -p "Do you wish to run grumphp? (y/N) " yn
    case $yn in
        [Yy]* ) ./vendor/bin/grumphp run; break;;
        [Nn]* ) exit;;
        * ) echo "Please answer yes or no.";;
    esac
done