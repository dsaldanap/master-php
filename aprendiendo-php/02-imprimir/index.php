<!DOCTYPE HTML>
<HTML lang="ES">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>imprimir por pantalla - Master en PHP</TITLE>
    </HEAD>
    <BODY>
        <H1>Master en PHP - dsp.com.mx</H1>
        
        <?= "El curso mas grande de PHP" ?>
        
        <?php
            // Titular de la seccion
            echo "<h3>Listado de videojuegos</h3>";
            
            /*Esta es una lista
            de videojuegos
            moderna*/
            echo "<ul>"
                    ."<li>GTA</li>"
                    ."<li>FIFA</li>"
                    ."<li>Mario Bros</li>"
                    ."</ul>";
                    //echo "<br>Hola hola hola</br>";
            //parrafo explicativo
                    echo '<p>Esta es toda '.' - '.' lista de videojuegos</p>';
        ?>
    </BODY>
</HTML>