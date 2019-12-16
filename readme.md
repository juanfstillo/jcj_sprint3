

## Installation

```
git clone 
cd jcjsprintfinal
composer install
# Crear archivo .env a partir del .env.example
//# Crear esquema en la db y configurar .env con el nombre del esquema y la contraseña de la db//NO ESTOY SEGURO PORQUE ENVIO DB POR SEPARADO
php artisan key:generate
//php artisan migrate//NO ESTOY SEGURO PORQUE ENVIO DB POR SEPARADO
php artisan db:seed//NO ESTOY SEGURO PORQUE ENVIO DB POR SEPARADO
php artisan serve
```

## Database Design

![Database Design](https://cldup.com/sQs-bmafhI.png)

## JavaScript

En la parte de órdenes de compra, hay filas de la tabla que están ocultas. En el `layout.blade.php` agregué un `yield('scripts')` para agregar scripts de JS en las pantallas que lo requieran.

En `orders.blade.php` completé ese hueco incluyendo un [`orders.js`](https://github.com/sachalifs/reebok-ecommerce/blob/master/public/js/orders.js) que pueden encontrar en [`/public/js/orders.js`](https://github.com/sachalifs/reebok-ecommerce/blob/master/public/js/orders.js).

En ese archivo lo que hago es mostrar/ocultar esas filas cuando se hace click en una de las filas de la orden, para desplegar las filas de sus productos.
