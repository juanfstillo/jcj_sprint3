# Reebok Ecommerce

![screenshot](https://cldup.com/rSw9zHHcUl.png)

## Installation

```
git clone git@github.com:sachalifs/reebok-ecommerce.git
cd reebok-ecommerce
composer install
# Crear archivo .env a partir del .env.example
# Crear esquema en la db y configurar .env con el nombre del esquema y la contraseña de la db
php artisan migrate
php artisan db:seed
php artisan serve
```
