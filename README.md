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
![motos drawio](https://github.com/user-attachments/assets/715f8482-6fa1-41c7-a03d-ce45ca0a1a16)


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
