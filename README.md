# authentication-back

## Prérequis
 PHP >= 7.4.0 \
 MySQL \
 Composer 

*Installation:
=======

* Composer install
* Create the .env.local file in the root directory and set your local variables values (DATABASE_URL)
* Launch the command line **php bin/console doctrine:database:create** to create the Database. 
* Launch the command line **php bin/console doctrine:schema:update --force** to update the schema.
* Launch the command line **php bin/console hautelook:fixtures:load -n** to fill the User table with fictive one.


*Generate an ssh key:

$ mkdir -p config/jwt
$ openssl genrsa -out config/jwt/private.pem -aes256 4096
$ openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem

*run serve
symfony server:start