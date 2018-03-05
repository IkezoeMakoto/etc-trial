#!/bin/bash

git clone git@github.com:IkezoeMakoto/etc-trial.git
cd etc-trial/laravel

# not install docker-compose
docker build -t laravel_trial .
docker run -d -v $(pwd)/test_app:/app -p 10080:80 laravel_trial

# or install docker-compose
make up