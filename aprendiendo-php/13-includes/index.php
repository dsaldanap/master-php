<!-- Cabecera -->
<?php require_once 'includes/cabecera.php' ?>
    <!-- Contenidos -->
    <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>Texto de prueba de la pagina de inicio</p>
    </div>
    <!-- Footer -->
<?php require_once 'includes/footer.php' ?>



<!-- existes otraforma de utilizar el include, la cual es por medio
de la sentencia include_once esto hace que el include solo se ejecute
una vez, de lo contrario si por error lo escribimos mas de una vez
este se estaria ejecuntado varias veces, por eso es necesario ejcutar
siempre include_once

Existe otra sentencia util, que se llama require, hace exactamente lo
mismo que include pero se cataloga que requiere es de mejor funcionamiento
pasa lo mismo que include es mejor utilizar require_once para evitar
que se ejecute mas de una ve si es que  por error escribimos mas de
una vez la sentencia, por ello mejor utilizar require_once-->
<?php /* include 'includes/cabecera.php' */ ?>
    <!-- Contenidos -->
    <!-- <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>Texto de prueba de la pagina de inicio</p>
    </div> -->
    <!-- Footer -->
<?php /* include 'includes/footer.php' */ ?>