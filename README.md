# install dependencies
composer install
npm install

# run migrations
php artisan migrate
OR
php artisan migrate:fresh --seed

# run server
composer run dev
OR
php artisan serve
