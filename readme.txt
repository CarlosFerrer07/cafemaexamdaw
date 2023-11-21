Para levantar el servicio en primer lugar nos descargamos la carpeta comprimida, en ella veremos en raiz 3 dockerfile un index.php un y un docker-compose.yml, ademas de unos directorios llamados config donde tenemos el dba.json que usaremos para conectarnos a la base de datos en el index y un directorio db con la creacion de una base de datos.

Una vez situados lo que hacemos será abrir docker y luego en la carpeta de nuestro proyecto levantamos una terminal y lanzamos el comando docker-compose up --build, ya está todo configurado para que con solo este comando te lo levante de manera correcta, comprobamos que los contenedores estén en verde. 

Luego nos vamos a nuestro navegador y ponemos localhost, nos debería de salir mi nombre, edad y estilo y el tuyo.

Y ya estaría.
