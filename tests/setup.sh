#!/bin/bash

cp -r ./vendor/iartz/jobsheet-ex-components/public .

cp -r ./vendor/iartz/jobsheet-ex-components/.env.example ./.env

ENV_FILE=.env

export $(egrep -v '^#' $ENV_FILE | xargs)

echo http://localhost:8081

php -S localhost:8081 -t public
