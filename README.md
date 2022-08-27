<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

crias-evaluation tiene como objetivo administrar crías de calidad, para visualizar el proyecto realiza los siguientes pasos.

## Requerimientos

- Apache o Nginx
- PHP 8.0+
- MySQL 5.6+/8.0.23+ or MariaDB 10.0.5+
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org/es/)

## Instalación

Clonar el repositorio

    git clone https://github.com/Anttonoff/crias-evaluation.git

Cambiar a la carpeta del repositorio

    cd crias-evaluation
    
Copiar y crear archivo .env

    cp .env.example .env
    
Instalación de dependencias composer

    composer install

Instalación de dependencias npm
    
    npm install && npm run build

Generación de key de aplicacion

    php artisan key:generate
    
## Variables de entorno

- `.env` - Las variables de entorno se pueden establecer en este archivo

***Note*** : Puede configurar rápidamente la información de la base de datos y otras variables en este archivo y hacer que la aplicación funcione completamente.

Asegúrese de configurar la información de conexión de la base de datos correcta.

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre-de-la-bd
DB_USERNAME=nombre-de-usuario
DB_PASSWORD=password-de-usuario
```

Luego de configurar correctamente la conexión con la base de datos, ejecute el siguiente comando para crear las tablas y precargar información demo.

    php artisan migrate:fresh --seed
    
## Diagrama E-R

`ER-crias-evaluation.drawio` - Consulte el siguiente archivo para conocer el diagrama E-R de la base de datos.

## Tablas

`calves`: Almacena información de las crías.

`barnyards`: Almacena los corrales existentes.

`sensor_logs`: Almacena información de los sensores.

`sick_calf_logs`: Almacena la información de la cría cuando es enviada a cuarentena.

`barnyard_types`: Almacena tipos de corrales para identificar los corrales para cuarentena.

`meat_classifications`: Almacena los tipos de clasificación de carne.

`providers`: Almacena información de los proveedores.

## Servidor de desarrollo local

Finalmente, ya que se conoce la base de datos del proyecto, inicie el servidor de desarrollo local de Laravel usando el siguiente comando:

    php artisan serve
    
Si el comando se ha ejecutado correctamente, acceda a la siguiente ruta:

    http://127.0.0.1:8000/

## Usuarios

Las actividades que pueden realizar los roles dentro de la plataforma son los soguientes:

`personal-control`: Registrar nuevas crías.

`reclutador`: Registrar nuevas crías.

`veterinario`: Registrar nuevas crías, asignar diweta, registrar cuarentena.

`ayudante-veterinario`: Registrar datos de los sensores de las crías.

| rol | email | password |
| --- | --- | --- |
| personal-control | persona.control@crias.com | password |
| reclutador | reclutador@crias.com | password |
| veterinario | veterinario@crias.com | password |
| ayudante-veterinario | ayudante.veterinario@crias.com | password |

Los usuarios mostrados anteriormente le permitirán ingresar a la plataforma.

## Módulos

**Los módulos incluyen validación en formularios de registro**

### Crias

Listado de crías actuales en la plataforma

![image](https://user-images.githubusercontent.com/47762298/187032746-41695359-00a4-4eaf-a5f3-36588dadbc74.png)

Formulario de registro de cría

![image](https://user-images.githubusercontent.com/47762298/187032803-dc2e2227-d8a4-4900-ae61-929e324db712.png)

### Información de sensores

Listado de información de sensores

![image](https://user-images.githubusercontent.com/47762298/187032946-3d708dd1-97cd-4686-b542-a2eb95235bbd.png)

Formulario de registro de información de sensores

![image](https://user-images.githubusercontent.com/47762298/187032956-2d5fa4e8-c1e2-4658-93ab-9713aa0516e3.png)

### Crías por enfermar

Listado de crías por enfermar

![image](https://user-images.githubusercontent.com/47762298/187034049-0b207aed-58e6-400e-9b45-c0d9fda9dc33.png)

Registro de cuarentena de la cría

![image](https://user-images.githubusercontent.com/47762298/187033031-02741f9f-d6b3-4157-a0ca-3521452fb442.png)



    
 
