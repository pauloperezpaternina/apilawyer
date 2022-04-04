# apilawyer

## Detalle
API REST permite crear suscripciones de pago a los usuarios abogados

## How to start 🏁
```bash
git clone git@github.com:pauloperezpaternina/apilawyer.git

cd apilawyer

composer install
```

copy .env.example and rename .env

```bash
php artisan key:generate

```

Created bd and config .env, next
```bash

php artisan migrate

php artisan db:seed
```

## Test login 🔐

go http://localhost:8000/login  

Email Address : pauloperez@bittronic.net
 
Password : 3174397349

## Change Language 🇨🇴 🇺🇲
Go to config/app.php
 search 'locale' => 'es' change es for en

 ## Endpoint
- Crear suscripción:
    
    Post http://localhost:8000/api/v1/subscriptions/?name=Jhon Doe&email=jd@gmail.com&password=DfreGfr
- Ver la suscripción actual
    Get http://localhost:8000/api/v1/subscriptions/{id}

- Actualizar suscripción de pago
   Put http://localhost:8000/api/v1/subscriptions/{id}?name=Emma w&email=ew@gmail.com

- Eliminar mi suscripción actual.

    Delete http://localhost:8000/api/v1/subscriptions/{id}

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
