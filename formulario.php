<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>

    <!--FORMULARIO-->
    <div class="formulario">
        <h1>Cuestionario sobre PH y POH</h1>
        <form name="cuestionario" method="POST" onsubmit="return showResults(event)">
            <fieldset>
            <div class="form-group">
                <label>1. ¿Qué es el pH?</label><br>
                <label><input type="radio" name="pregunta1" value="opcion1" required> Medida de la acidez</label><br>
                <label><input type="radio" name="pregunta1" value="opcion2"> Medida de la basicidad</label><br>
                <label><input type="radio" name="pregunta1" value="opcion3"> Medida de la conductividad</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>2. ¿Qué significa la “p” en pH?</label><br>
                <label><input type="radio" name="pregunta2" value="opcion1" required> Potencial</label><br>
                <label><input type="radio" name="pregunta2" value="opcion2"> Posibilidad</label><br>
                <label><input type="radio" name="pregunta2" value="opcion3"> Presión</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>3. ¿Cuál es el rango de la escala de pH?</label><br>
                <label><input type="radio" name="pregunta3" value="opcion1" required> 0 a 7</label><br>
                <label><input type="radio" name="pregunta3" value="opcion2"> 0 a 14</label><br>
                <label><input type="radio" name="pregunta3" value="opcion3"> 0 a 10</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>4. ¿Qué es el pOH?</label><br>
                <label><input type="radio" name="pregunta4" value="opcion1" required> Medida de la acidez</label><br>
                <label><input type="radio" name="pregunta4" value="opcion2"> Medida de la basicidad</label><br>
                <label><input type="radio" name="pregunta4" value="opcion3"> Medida de la conductividad</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>5. ¿Cómo se relacionan pH y pOH?</label><br>
                <label><input type="radio" name="pregunta5" value="opcion1" required> pH + pOH = 14</label><br>
                <label><input type="radio" name="pregunta5" value="opcion2"> pH - pOH = 7</label><br>
                <label><input type="radio" name="pregunta5" value="opcion3"> pH * pOH = 10</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>6. ¿Cuál es el valor del pH para una solución ácida?</label><br>
                <label><input type="radio" name="pregunta6" value="opcion1" required> pH menor a 7</label><br>
                <label><input type="radio" name="pregunta6" value="opcion2"> pH igual a 7</label><br>
                <label><input type="radio" name="pregunta6" value="opcion3"> pH mayor a 7</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>7. ¿Cuál es el valor del pH para una solución básica?</label><br>
                <label><input type="radio" name="pregunta7" value="opcion1" required> pH menor a 7</label><br>
                <label><input type="radio" name="pregunta7" value="opcion2"> pH mayor a 7</label><br>
                <label><input type="radio" name="pregunta7" value="opcion3"> pH igual a 7</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>8. Escribe la fórmula para calcular el pH:</label><br>
                <select name="pregunta8" required>
                    <option value="">Selecciona una opción</option>
                    <option value="-log[H+]">-log[H+]</option>
                    <option value="-log[OH-]">-log[OH-]</option>
                    <option value="14 - pOH">14 - pOH</option>
                </select>
                <hr>
            </div>
            <div class="form-group">
                <label>9. ¿Cuál es la concentración de iones H+ en una solución neutra?</label><br>
                <label><input type="radio" name="pregunta9" value="opcion1" required> 10^-7 M</label><br>
                <label><input type="radio" name="pregunta9" value="opcion2"> 10^-14 M</label><br>
                <label><input type="radio" name="pregunta9" value="opcion3"> 1 M</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>10. Si el pOH de una solución es 4, ¿cuál es el pH?</label><br>
                <label><input type="radio" name="pregunta10" value="4" required> 4</label><br>
                <label><input type="radio" name="pregunta10" value="10"> 10</label><br>
                <label><input type="radio" name="pregunta10" value="7"> 7</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>11. ¿Qué instrumento se usa para medir el pH?</label><br>
                <label><input type="radio" name="pregunta11" value="opcion1" required> pHmetro</label><br>
                <label><input type="radio" name="pregunta11" value="opcion2"> Termómetro</label><br>
                <label><input type="radio" name="pregunta11" value="opcion3"> Espectrofotómetro</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>12. ¿Cuál es el pH del agua pura?</label><br>
                <label><input type="radio" name="pregunta12" value="opcion1" required> 7</label><br>
                <label><input type="radio" name="pregunta12" value="opcion2"> 1</label><br>
                <label><input type="radio" name="pregunta12" value="opcion3"> 14</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>13. ¿Qué indica un pH de 2 en una solución?</label><br>
                <label><input type="radio" name="pregunta13" value="opcion1" required> Alta acidez</label><br>
                <label><input type="radio" name="pregunta13" value="opcion2"> Neutralidad</label><br>
                <label><input type="radio" name="pregunta13" value="opcion3"> Alta basicidad</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>14. ¿Qué indica un pH de 12 en una solución?</label><br>
                <label><input type="radio" name="pregunta14" value="opcion1" required> Alta basicidad</label><br>
                <label><input type="radio" name="pregunta14" value="opcion2"> Alta acidez</label><br>
                <label><input type="radio" name="pregunta14" value="opcion3"> Neutralidad</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>15. Selecciona la fórmula para calcular el pOH:</label><br>
                <select name="pregunta15" required>
                    <option value="">Selecciona una opción</option>
                    <option value="-log[OH-]">-log[OH-]</option>
                    <option value="-log[H+]">-log[H+]</option>
                    <option value="14 - pH">14 - pH</option>
                </select>
                <hr>
            </div>
            <div class="form-group">
                <label>16. ¿Qué es una solución buffer?</label><br>
                <label><input type="radio" name="pregunta16" value="opcion1" required> Solución que resiste cambios de pH</label><br>
                <label><input type="radio" name="pregunta16" value="opcion2"> Solución que acelera reacciones químicas</label><br>
                <label><input type="radio" name="pregunta16" value="opcion3"> Solución que cambia de color</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>17. ¿Qué pH tiene una solución ácida fuerte?</label><br>
                <label><input type="radio" name="pregunta17" value="opcion1" required> pH cercano a 0</label><br>
                <label><input type="radio" name="pregunta17" value="opcion2"> pH cercano a 7</label><br>
                <label><input type="radio" name="pregunta17" value="opcion3"> pH cercano a 14</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>18. ¿Qué pH tiene una solución básica fuerte?</label><br>
                <label><input type="radio" name="pregunta18" value="opcion1" required> pH cercano a 14</label><br>
                <label><input type="radio" name="pregunta18" value="opcion2"> pH cercano a 7</label><br>
                <label><input type="radio" name="pregunta18" value="opcion3"> pH cercano a 0</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>19. ¿Qué significa un pH de 7 en una solución?</label><br>
                <label><input type="radio" name="pregunta19" value="opcion1" required> Neutralidad</label><br>
                <label><input type="radio" name="pregunta19" value="opcion2"> Alta acidez</label><br>
                <label><input type="radio" name="pregunta19" value="opcion3"> Alta basicidad</label><br>
                <hr>
            </div>
            <div class="form-group">
                <label>20. ¿Qué compuesto tiene un pH cercano a 2?</label><br>
                <label><input type="radio" name="pregunta20" value="opcion1" required> Agua pura</label><br>
                <label><input type="radio" name="pregunta20" value="opcion2"> Leche</label><br>
                <label><input type="radio" name="pregunta20" value="opcion3"> Jugo de limón</label><br>
                <hr>
            </div>
            </fieldset>
            <button type="submit" id="submit-button" class="button">FINALIZAR</button>
            <button type="button" id="reset-button" class="button" >BORRAR</button>
            <hr>
            <div class="b1">
                <hr>
                <a href="index.html" class="button">REGRESAR</a>
                <hr>
            </div>
        </form>
    </div>
    
    
    <h1>Resultados del Cuestionario</h1>
    <?php
    // Respuestas correctas 
    $respuestas = [
        'pregunta1' => 'opcion1',
        'pregunta2' => 'opcion1',
        'pregunta3' => 'opcion2',
        'pregunta4' => 'opcion2',
        'pregunta5' => 'opcion1',
        'pregunta6' => 'opcion1', 
        'pregunta7' => 'opcion2', 
        'pregunta8' => '-log[H+]',
        'pregunta9' => 'opcion1',
        'pregunta10' => '10',
        'pregunta11' => 'opcion1',
        'pregunta12' => 'opcion3', 
        'pregunta13' => 'opcion1',
        'pregunta14' => 'opcion1',
        'pregunta15' => '-log[OH-]',
        'pregunta16' => 'opcion1',
        'pregunta17' => 'opcion1', 
        'pregunta18' => 'opcion2',
        'pregunta19' => 'opcion1',
        'pregunta20' => 'opcion3' 
    ];

   
    $total = 0;

   
    foreach ($respuestas as $pregunta => $respuesta) {
        if (isset($_POST[$pregunta]) && $_POST[$pregunta] === $respuesta) {
            $total++;
        }
    }

    
    echo "<p>Respuestas correctas: $total / 20</p>";
    ?>
   

</body>
</html>