#!/bin/bash

clear

echo "Challenge for PHP Developer."

#./composer.phar install

php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixtures:load --append

#cd web/frontend
#npm install

#cd ../../
php bin/console server:run