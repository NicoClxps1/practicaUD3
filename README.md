# MotoCenter
## Descripción del problema

MotoCenter es una empresa dedicada a la venta de motocicletas que desea implementar un sistema de gestión integral para optimizar y automatizar sus procesos administrativos y operativos. El sistema permitirá gestionar eficientemente el inventario de motocicletas, registrar clientes, realizar ventas y analizar el rendimiento del negocio mediante estadísticas clave.

### Áreas de gestión:

*Inventario de Motocicletas:* Registrar motocicletas disponibles, detallando atributos como marca, modelo, tipo de motor, precio y disponibilidad. Estas motocicletas estarán asociadas a un catálogo de modelos predefinidos con especificaciones técnicas.

*Clientes:* Registrar y mantener los datos personales de los clientes, como nombre, apellidos, correo electrónico y teléfono, para realizar un seguimiento de las transacciones y mejorar la atención al cliente.

*Ventas:* Gestionar cada venta, incluyendo detalles como la motocicleta vendida, el cliente asociado, el precio total y la fecha de la transacción.

*Modelos:* Administrar un catálogo de modelos de motocicletas con sus especificaciones (cilindrada, tipo de motor, descripción, etc.).

*Estadísticas y Análisis:* Generar estadísticas clave, como el número de ventas por modelo, ingresos totales, y clientes frecuentes.

### Funcionalidades principales El sistema permitirá:

*Gestión de Motocicletas:* Registrar nuevas motocicletas en el inventario, actualizarlas o eliminarlas, y consultar información detallada de cada una.

*Gestión de Modelos:* Crear, editar y consultar modelos de motocicletas, incluyendo su descripción y especificaciones técnicas.

*Gestión de Clientes:* Registrar nuevos clientes, actualizar su información y consultar un historial de sus compras.

*Gestión de Ventas:* Registrar las ventas realizadas, asociándolas a un cliente y a una motocicleta específica.
Actualizar automáticamente el estado de las motocicletas vendidas para que no aparezcan como disponibles en el inventario.

*Estadísticas e Informes:* Generar informes sobre ventas por periodo, modelo o cliente. Analizar la popularidad de los modelos y las tendencias de ventas.
### Objetivo del sistema
Proporcionar una herramienta moderna, eficiente y fácil de usar que facilite:

*La administración del inventario de motocicletas,* asegurando la disponibilidad de productos actualizada.
*El seguimiento de los clientes y sus transacciones,* mejorando la atención al cliente y fidelizándolos.
*El registro y control de las ventas,* minimizando errores administrativos y agilizando el proceso de compra.
*La toma de decisiones basada en datos analíticos,* como estadísticas de modelos más vendidos, ingresos generados y comportamiento de los clientes.

Con este sistema, MotoCenter podrá mejorar sus procesos internos, optimizar recursos y ofrecer una mejor experiencia tanto al cliente como al personal administrativo.

--------------------------------------------------------------------------------------------------
# **Modelo E-R**
![image](https://github.com/user-attachments/assets/10936b45-c010-43c2-9de2-2327d16ffa02)
--------------------------------------------------------------------------------------------------
# **Way of Working (WoW)**

## **Requisitos tecnológicos**
- **Sistema Operativo**:  
  - Cualquier distribución de Linux compatible (probado en **Ubuntu 22.04** y derivados).  
  - También funciona en **Windows** y **macOS** con las configuraciones apropiadas.

---

## **Configuración del Proyecto**

### **1. Clonar el Repositorio**

```bash
git clone https://github.com/NicoClxps1/practicaUD3.git
```
Entra al directorio del proyecto:

```bash
cd practicaUD3
```

2. Instalar Dependencias
Ejecuta Composer para instalar las dependencias de Laravel:
```bash
composer install
```

3. Configurar el Archivo .env
Copia el archivo de configuración de ejemplo:
```bash
cp .env.example .env
```
Edita el archivo .env:
```bash
nano .env
```

Configura las credenciales de la base de datos:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=practica_ud3
DB_USERNAME=root
DB_PASSWORD=tu_contraseña
```
4. Generar la Clave de la Aplicación
Ejecuta este comando para generar la clave de la aplicación:
```bash
php artisan key:generate
```
5. Configurar la Base de Datos
Crea la base de datos en MySQL:
```bash

mysql -u root -p
CREATE DATABASE practica_ud3;
```
Aplica las migraciones y los seeders:
```bash
php artisan migrate --seed
```
Ejecución del Proyecto
1. Iniciar el Servidor Local
Para levantar el servidor de desarrollo de Laravel, ejecuta:
```bash
php artisan serve
```
Esto iniciará el servidor en http://127.0.0.1:8000.

2. Probar la API con Postman
   
Abre Postman.

Importa el archivo de colección de Postman si lo tienes (si no, crea las pruebas manualmente).

Prueba los endpoints definidos:
- GET /api/motos: Listar todas las motos.
- POST /api/motos: Crear una nueva moto.
- PUT /api/motos/{id}: Actualizar una moto existente.
- DELETE /api/motos/{id}: Eliminar una moto.



Cómo Instalar Laravel Installer

Instala Laravel Installer globalmente:
```bash
composer global require laravel/installer
```
Agrega el binario a tu $PATH:
```bash
export PATH="$HOME/.composer/vendor/bin:$PATH"
```
## Requisitos tecnológicos y cómo instalarlos

A continuación, se describen los pasos para instalar las herramientas necesarias para trabajar en este proyecto.

### PHP

PHP es el lenguaje en el que se desarrolla Laravel. Necesitarás al menos la versión 8.1.

#### Instalación en Ubuntu 

Actualiza el sistema:
bash
sudo apt update && sudo apt upgrade

Agrega el repositorio de PHP:
bash
sudo add-apt-repository ppa:ondrej/php
sudo apt update

Instala PHP y las extensiones necesarias:
bash
sudo apt install php8.1 php8.1-cli php8.1-fpm php8.1-mysql php8.1-xml php8.1-mbstring php8.1-curl php8.1-zip

Verifica la instalación:
bash
    php -v

#### Instalación en Windows

Descarga el instalador de PHP desde la página oficial:  
[Descargar PHP para Windows](https://windows.php.net/download/)

Extrae los archivos en una carpeta, por ejemplo, C:\php.
Agrega C:\php al Path en las variables de entorno.

Verifica la instalación abriendo una terminal y ejecutando:

bash
    php -v

#### Instalación en macOS

    Instala Homebrew si no lo tienes:
bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

Instala PHP con Homebrew:
bash
brew install php

Verifica la instalación:

    php -v

### Composer

Composer es el gestor de dependencias para PHP y se requiere para instalar Laravel.

#### Instalación en cualquier sistema operativo

Descarga Composer ejecutando:
bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"

Mueve el ejecutable a una ubicación accesible globalmente:
bash
sudo mv composer.phar /usr/local/bin/composer

Verifica la instalación:
bash
    composer --version


Verifica la instalación:

    composer --version

### Docker y Docker Compose

Docker se utiliza para crear el contenedor de MariaDB.
Instalación en Ubuntu

#### Instala Docker:

    sudo apt update
    sudo apt install docker.io

Habilita Docker para que se inicie automáticamente:

    sudo systemctl start docker
    sudo systemctl enable docker

#### Instala Docker Compose:

    sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
    sudo chmod +x /usr/local/bin/docker-compose

Verifica las instalaciones:

    docker --version
    docker-compose --version

    
### Laravel

Laravel se instala usando Composer.

Instala el instalador global de Laravel:

    composer global require laravel/installer

Agrega el directorio global de Composer a tu PATH:

    export PATH="$HOME/.config/composer/vendor/bin:$PATH"  # Ubuntu/Linux

Verifica la instalación:

    laravel --version



### VS Code

VS Code es el editor de texto recomendado.

Descarga VS Code desde:
https://code.visualstudio.com/

  Instálalo y agrega extensiones útiles:
      Laravel Extension Pack
      PHP Intelephense
      Docker
