# Laravel Spanish Cities

Ciudades de España para laravel.

Spanish Cities es un paquete que añade a tu proyecto laravel todas las comunidades autónomas, provncias y ciudades de España, todas ellas relacionadas y con sus capitales. Es muy fácil de usar y añadir la posibilidad de que cualquiera de tus modelos pertenezca a una ciudad de España

## Instalación

Usar [Composer](https://getcomposer.org/) es la manera mas sencilla.

```bash
composer require flogti/spanish-cities
```

## Uso

Solo usa el siguiente comando y se ejecutaran las migraciones y los seeders necesarios.

```bash
php artisan spanish-cities:install
```

Para poder asignar ciudades a un modelo utiliza, añade a la tabla que necesites el campo __town_id__.
Así podrás usar los métodos disponibles.

## Métodos
 
Añade el trait __HasTown__ a cualquier modelo. Por ejemplo en el modelo User sería así.

```php
...
use Flogti\SpanishCities\Traits\HasTown;

class User extends Authenticatable
{
    use Notifiable, HasTown;
    ...
```

### Relación town

Al usar el campo town_id, incluye la relación con la tabla de ciudades y puedes acceder a la ciudad.

```php
//Devuelve la ciudad a la que pertenece.
$town = $user->town;
```

### province()

```php
//Devuelve la provincia a la cual pertenece su ciudad.
$province = $user->province();
```

### community()

```php
//Devuelve la comunidad autónoma a la cual pertenece su ciudad.
$community = $user->community();
```

## El modelo Town

Puedes obtener la provincia a la que pertenece.

```php
$province = $town->province;
```

## El modelo Province

Puedes obtener la comunidad a la que pertenece, su capital y las ciudades que pertenecen a esa provincia.

```php
//Devuelve la comunidad a la cual pertenece la provincia.
$community = $province->community;

//Devuelve la capital de esa provincia.
$capital = $province->capital;

//Devuelve las ciudades que pertenecen a esa provincia.
$towns = $province->towns;
```

## El modelo Community

Puedes obtener su capital y las provincias y ciudades que pertenecen a esa provincia.

```php
//Devuelve la capital de esa comunidad.
$capital = $community->capital;

//Devuelve las provincias que pertenecen a esa comunidad.
$provinces = $community->provinces;

//Devuelve las ciudades que pertenecen a esa comunidad.
$towns = $community->towns;
```