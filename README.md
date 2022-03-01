```
composer require khadegd/laravel-breeze-bootstrap --dev
```

Buat database baru di mysql dan tulis setinggan database di file .env

```
php artisan migrate
php artisan db:seed ResepSeeder
php artisan db:seed IsiSeeder
php artisan serve
```
