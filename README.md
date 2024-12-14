# install dependencies
composer install
npm install

# run migrations
php artisan migrate

# run server
composer run dev
OR
php artisan serve
