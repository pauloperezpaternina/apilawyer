# apilawyer

## Detalle
API REST permite crear suscripciones de pago a los usuarios abogados

## How to start
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

```
Test login http://localhost:8000/login  
Email Address :
 
Password : password

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
