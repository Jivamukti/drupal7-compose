#!/bin/bash
# set -e
# path=$(dirname "$0")
# source $path/common.sh

# git clone ssh://codeserver.dev.33bc5703-7175-4ab6-b922-1147b8121e81@codeserver.dev.33bc5703-7175-4ab6-b922-1147b8121e81.drush.in:2222/~/repository.git www
time composer -vvv install

#chmod -R +w $base/cnf
#chmod -R +w $base/www/sites/default
