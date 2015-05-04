#!/bin/bash
# set -e
# path=$(dirname "$0")
# source $path/common.sh

time composer -vvv update
cp cnf/travis.yml www/.travis.yml

#chmod -R +w $base/cnf
#chmod -R +w $base/www/sites/default
