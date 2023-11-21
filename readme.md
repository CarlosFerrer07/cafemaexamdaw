# Levantar el Servicio - Carlos Ferrer de Lokkos

Para poner en marcha el servicio, sigue estos pasos simples:

## Descarga del Proyecto

1. Descarga la carpeta comprimida del proyecto desde https://github.com/CarlosFerrer07/cafemaexamdaw.

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
  - `db`: Contiene la creación de la base de datos OJO HAY QUE BUSCAR LA IP CON EL NOMBRE DEL CONTENEDOR y DOCKER INSPECT DE LA BASE DE DATOS Y SUSTITUIRLA EN EL dba.json donde pone host (no sabia hacerlo de manera que no lo tengamos que cambiar).

## Levantar el Servicio

1. Abre Docker.
2. Sitúate en la carpeta de tu proyecto en visual studio.
3. Abre una terminal y ejecuta el siguiente comando:
   ```bash
   docker-compose up --build
