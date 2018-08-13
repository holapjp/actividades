<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Bienvenido</title>
</head>
<body>
    <?php
        session_start();
        $user = $_SESSION["user"];
    ?>
    <div class="container">
        <h1 class="jumbotron bg-success text-white text-center">Bienvenido <?= $user->email; ?></h1>
        <a href="logout.php" class="btn btn-danger btn-block btn-lg">Cerrar Sesion</a>
        <h3 class="text-center my-3">Qué es Vue.js?</h3>
         <p class="lead">
            Es un Framework progresivo, es decir, es un Framework que sirve para consumir interfaz del usuario.

            Fue creado por Evan You que trabajaba en Google realizando prototipos y en el core del Framework de Meteor, hasta que pensó en otra forma de hacer una opción más fácil que abarcara las necesidades a la hora de hacer prototipos. Así surgió Vue en el 2014, desde entonces ha tenido una gran evolución y sigue creciendo en su versión 2 cada vez más y  más.

            Características:
            Accesible.
            Versátil: Su núcleo es bastante pequeño y se escala a través de plugins, con lo cual escucharás mucho que Vue es una librería muy parecida a React, una librería que cumple un propósito.
            Escalable por el mismo tema de la versatilidad.
            Reactivo.
            Optimizado: Su core ocupa 74KB, como ves es bastante liviano.
            Comunidad: Va creciendo a un ritmo importante con más 66500 estrellas en GitHub y 130 personas contribuyendo al core cada día.
            Licencia MIT: se publicó bajo el amparo de esta licencia.
            Estadisticas de NPM(Node Package Manager):
            NPM (Gestor de Paquetes de Node) facilita a los desarrolladores de JavaScript compartir y reutilizar código y facilita la actualización del código que comparten. Para Vue se tiene:

            +33400 Descargas el último día.

            +174800 Descargas la última semana.

            +695100 Descargas el último mes.

            Ecosistema:
            ecosistemavue

            Vue.JS tiene un gran ecosistema mantenido por los propios desarrolladores del core y la comunidad que existe detrás de Vue.

            Existen plugins muy importantes como:

            VUE-ROUTER: Para la gestión de rutas.
            Conectar a servicios externos: Como vue-axios o vuefire para conectarnos a una base de datos.
            TEST: Se pueden hacer test unitarios y funcionales.
            VUEX: Es una implementación de la arquitectura de aplicación FLUX basada en la arquitectura ELM y además creado un poco en REDUX, es una implementación simple pero muy potente, fácil de utilizar y de entender, el cual nos permite gestionar el flujo de datos en nuestra aplicación.
         </p>
</div>
</body>
</html>