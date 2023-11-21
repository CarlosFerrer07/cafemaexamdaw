# Levantar el Servicio - Carlos Ferrer de Lokkos

Para poner en marcha el servicio, sigue estos pasos simples:

## Descarga del Proyecto

1. Descarga la carpeta comprimida del proyecto desde [enlace al proyecto].

## Estructura del Proyecto

El proyecto contiene los siguientes elementos en la raíz:

- **Dockerfiles:**
  - `Dockerfile-admin`
  - `Dockerfile-bd`
  - `Dockerfile-web`

- **Archivos:**
  - `index.php`
  - `docker-compose.yml`

- **Directorios:**
  - `config`: Contiene el archivo `dba.json` para la conexión a la base de datos desde el index.
  - `db`: Contiene la creación de la base de datos.

## Levantar el Servicio

1. Abre Docker.
2. Sitúate en la carpeta de tu proyecto en visual studio.
3. Abre una terminal y ejecuta el siguiente comando:
   ```bash
   docker-compose up --build
