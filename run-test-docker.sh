#!/usr/bin/env bash
docker-compose up -d --remove-orphans

docker exec -it recursive-inherit-test-cli ./run-tests.sh