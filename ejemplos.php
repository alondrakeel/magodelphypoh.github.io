<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJEMPLOS</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
   <!--CALCULO DE LOS EJEMPLOS DE PH Y POH-->
    <div class="texto">
        <h1>EJEMPLOS DE CALCULO DE PH Y POH</h1>
    </div>
       
    <div class="calculoph_poh">
        <?php
        function ej1() {
            $conc = 0.5; 
            $conc_OH = $conc; 
            $pOH = -log10($conc_OH);

            echo "<br>";
            echo "<h2>Ejemplo 1: Calcular el pOH de una disolución 0,5 N de hidróxido de sodio NaOH</h2>";
            echo "<p><strong>Datos del Ejemplo:</strong> 0,5 N NaOH</p>";
            echo "<p><strong>Fórmula:</strong> pOH = -log [OH-]</p>";
            echo "<p><strong>Resultado:</strong> pOH = -log [0,5] = " . round($pOH, 2) . "</p>";
            echo "<p><strong>Explicación:</strong> Al ser una base fuerte, todo el NaOH se disocia completamente, por lo que la concentración de [OH-] es 0,5 N. Calculamos el pOH como el logaritmo negativo de la concentración de [OH-].</p>";
        }

        function ej2() {
            $conc = 0.5; 
            $Kb = 1.8e-5; 
            $conc_OH = sqrt($Kb * $conc);
            $pOH = -log10($conc_OH);

            echo "<br>";
            echo "<h2>Ejemplo 2: Calcular el pOH de una disolución 0,5 N de amoníaco NH3 con Kb= 1,8 · 10-5</h2>";
            echo "<p><strong>Datos del Ejemplo:</strong> 0,5 N NH3, Kb = 1,8 · 10-5</p>";
            echo "<p><strong>Fórmula:</strong> pOH = -log [OH-]</p>";
            echo "<p><strong>Resultado:</strong> pOH = -log [6 · 10-3] = " . round($pOH, 2) . "</p>";
            echo "<p><strong>Explicación:</strong> Al ser una base débil, el NH3 no se disocia completamente. Usamos la constante de equilibrio para calcular [OH-], y luego el pOH como el logaritmo negativo de la concentración de [OH-].</p>";
        }

        function ej3() {
            $conc = 3.8e-4; 
            $pH = -log10($conc);
            $pOH = 14 - $pH;

            echo "<br>";
            echo "<h2>Ejemplo 3: Calcular el pH de una disolución de ácido nítrico HNO3 3,8·10-4 M</h2>";
            echo "<p><strong>Datos del Ejemplo:</strong> 3,8·10-4 M HNO3</p>";
            echo "<p><strong>Fórmula:</strong> pH = -log [H3O+]</p>";
            echo "<p><strong>Resultado:</strong> pH = " . round($pH, 2) . ", pOH = " . round($pOH, 2) . "</p>";
            echo "<p><strong>Explicación:</strong> Al ser un ácido fuerte, todo el HNO3 se disocia completamente, por lo que la concentración de [H3O+] es 3,8·10-4 M. Calculamos el pH como el logaritmo negativo de la concentración de [H3O+], y luego el pOH como 14 menos el pH.</p>";
        }

        function ej4() {
            $conc = 0.02; 
            $Ka = 3.0e-6; 
            $conc_H = sqrt($Ka * $conc);
            $pH = -log10($conc_H);
            $pOH = 14 - $pH;

            echo "<br>";
            echo "<h2>Ejemplo 4: Calcular el pH de una disolución 0,02 M de un ácido débil HA con Ka= 3,0 · 10-6</h2>";
            echo "<p><strong>Datos del Ejemplo:</strong> 0,02 M HA, Ka = 3,0 · 10-6</p>";
            echo "<p><strong>Fórmula:</strong> pH = -log [H+]</p>";
            echo "<p><strong>Resultado:</strong> pH = " . round($pH, 2) . ", pOH = " . round($pOH, 2) . "</p>";
            echo "<p><strong>Explicación:</strong> Al ser un ácido débil, el HA no se disocia completamente. Usamos la constante de equilibrio para calcular [H+], y luego el pH como el logaritmo negativo de la concentración de [H+].</p>";
        }

        function ej5() {
            $conc = 1.0e-3; 
            $pH = -log10($conc);
            $pOH = 14 - $pH;

            echo "<br>";
            echo "<h2>Ejemplo 5: Calcular el pH y pOH de una disolución 1,0·10-3 M de ácido clorhídrico HCl</h2>";
            echo "<p><strong>Datos del Ejemplo:</strong> 1,0·10-3 M HCl</p>";
            echo "<p><strong>Fórmula:</strong> pH = -log [H+], pOH = 14 - pH</p>";
            echo "<p><strong>Resultado:</strong> pH = " . round($pH, 2) . ", pOH = " . round($pOH, 2) . "</p>";
            echo "<p><strong>Explicación:</strong> Al ser un ácido fuerte, el HCl se disocia completamente, por lo que la concentración de [H+] es 1,0·10-3 M. Calculamos el pH como el logaritmo negativo de la concentración de [H+], y luego el pOH como 14 menos el pH.</p>";
        }

        function ej6() {
            $conc = 0.1; 
            $Ka = 4.0e-4; 
            $conc_H = sqrt($Ka * $conc);
            $pH = -log10($conc_H);
            $pOH = 14 - $pH;

            echo "<br>";
            echo "<h2>Ejemplo 6: Calcular el pH de una disolución 0,1 M de un ácido débil HB con Ka= 4,0 · 10-4</h2>";
            echo "<p><strong>Datos del Ejemplo:</strong> 0,1 M HB, Ka = 4,0 · 10-4</p>";
            echo "<p><strong>Fórmula:</strong> pH = -log [H+]</p>";
            echo "<p><strong>Resultado:</strong> pH = " . round($pH, 2) . ", pOH = " . round($pOH, 2) . "</p>";
            echo "<p><strong>Explicación:</strong> Al ser un ácido débil, el HB no se disocia completamente. Usamos la constante de equilibrio para calcular [H+], y luego el pH como el logaritmo negativo de la concentración de [H+].</p>";
        }

        function ej7() {
            $conc = 0.25; 
            $Kb = 1.5e-5; 
            $conc_OH = sqrt($Kb * $conc);
            $pOH = -log10($conc_OH);

            echo "<br>";
            echo "<h2>Ejemplo 7: Calcular el pOH de una disolución 0,25 N de hidróxido de amonio NH4OH con Kb= 1,5 · 10-5</h2>";
            echo "<p><strong>Datos del Ejemplo:</strong> 0,25 N NH4OH, Kb = 1,5 · 10-5</p>";
            echo "<p><strong>Fórmula:</strong> pOH = -log [OH-]</p>";
            echo "<p><strong>Resultado:</strong> pOH = -log [6,12 · 10-3] = " . round($pOH, 2) . "</p>";
            echo "<p><strong>Explicación:</strong> Al ser una base débil, el NH4OH no se disocia completamente. Usamos la constante de equilibrio para calcular [OH-], y luego el pOH como el logaritmo negativo de la concentración de [OH-].

</p>";
        }

        function ej8() {
            $conc = 0.05; 
            $Ka = 2.0e-5; 
            $conc_H = sqrt($Ka * $conc);
            $pH = -log10($conc_H);
            $pOH = 14 - $pH;

            echo "<br>";
            echo "<h2>Ejemplo 8: Calcular el pH de una disolución 0,05 M de un ácido débil HC con Ka= 2,0 · 10-5</h2>";
            echo "<p><strong>Datos del Ejemplo:</strong> 0,05 M HC, Ka = 2,0 · 10-5</p>";
            echo "<p><strong>Fórmula:</strong> pH = -log [H+]</p>";
            echo "<p><strong>Resultado:</strong> pH = " . round($pH, 2) . ", pOH = " . round($pOH, 2) . "</p>";
            echo "<p><strong>Explicación:</strong> Al ser un ácido débil, el HC no se disocia completamente. Usamos la constante de equilibrio para calcular [H+], y luego el pH como el logaritmo negativo de la concentración de [H+].</p>";
        }

        ej1();
        ej2();
        ej3();
        ej4();
        ej5();
        ej6();
        ej7();
        ej8();
        ?>
    </div>
    
    <div class="b1">
    <hr>
    <a href="index.html" class="button">REGRESAR</a>
    <hr>
</div>
</body>
</html>
