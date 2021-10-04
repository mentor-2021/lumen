# lumen

# migration

composer clearcache && composer dump-autoload
composer dump-autoload
php artisan migrate:fresh && php artisan db:seed
