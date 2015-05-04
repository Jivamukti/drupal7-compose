#!/bin/bash
# set -e
# path=$(dirname "$0")
# source $path/common.sh


rm -rf core/.git
time composer update
#chmod -R +w $base/cnf
#chmod -R +w $base/www/sites/default
