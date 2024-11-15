<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genio del pH y pOH</title>
    <link rel="stylesheet" type="text/css" href="css/ingreso.css">
</head>
<body>

<style>
  body{
    font-family: Arial, sans-serif;
    color: #333;
    background: url('img/fondo.gif') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
  }

  .loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #3498db;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 2s linear infinite;
    margin: 10px auto;
  }

  h1{
    color:black;
  }

  label{
    color: black;
    text-aling: left;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
</style>

<!--CALCULADORA-->
<div class="formulario">
    <h1>Calculadora de pH y pOH</h1>
    <div id="resultados">
        <div id="barra-carga" class="loader" style="display:none;"></div>
        <?php
        function calcularPHyPOH($compuesto, $tipoConcentracion, $concentracion, $constanteDisociacion) {
            // Validar que la concentración sea un número válido y mayor que cero
            if (!is_numeric($concentracion) || $concentracion <= 0) {
                echo '<p class="error">Por favor, ingrese una concentración válida (mayor que cero).</p>';
                return;
            }

            $tablaDatos = "<table style='background-color: beige;'><tr><th>CONCEPTO</th><th>DATO</th></tr>";
            $tablaDatos .= "<tr><td>Compuesto o Símbolo del Elemento</td><td>$compuesto</td></tr>";
            $tablaDatos .= "<tr><td>Tipo de Concentración</td><td>$tipoConcentracion</td></tr>";
            $tablaDatos .= "<tr><td>Concentración (M)</td><td>$concentracion</td></tr>";
            if (!empty($constanteDisociacion)) {
                $tablaDatos .= "<tr><td>Constante de Disociación (Ka o Kb)</td><td>$constanteDisociacion</td></tr>";
            }
            $tablaDatos .= "</table>";

            // Calcular pH y pOH según el tipo de concentración
            if ($tipoConcentracion === "OH") {
                $pOH = -log10($concentracion);
                $pH = 14 - $pOH;
                $mensajeResultado = "<p>Resultado: pOH = " . number_format($pOH, 2) . ", pH = " . number_format($pH, 2) . "</p>";
            } elseif ($tipoConcentracion === "H") {
                $pH = -log10($concentracion);
                $pOH = 14 - $pH;
                $mensajeResultado = "<p>Resultado: pH = " . number_format($pH, 2) . ", pOH = " . number_format($pOH, 2) . "</p>";
            }

            // Determinar y mostrar el tipo de ácido o base
            $tipoAcidoBase = "";
            $explicacion = "";
            if ($pH < 7) {
                if ($pH >= 0 && $pH < 3) {
                    $tipoAcidoBase = "Ácido fuerte";
                    $explicacion = "El pH muy bajo indica una alta concentración de iones de hidrógeno (H+) en la solución, lo cual caracteriza a los ácidos fuertes.";
                } else {
                    $tipoAcidoBase = "Ácido débil";
                    $explicacion = "El pH bajo pero no extremadamente ácido sugiere una concentración moderada de iones de hidrógeno (H+) en la solución, típico de ácidos débiles.";
                }
            } elseif ($pH > 7) {
                if ($pH > 7 && $pH <= 14) {
                    $tipoAcidoBase = "Base fuerte";
                    $explicacion = "El pH alto indica una alta concentración de iones hidróxido (OH-) en la solución, lo cual caracteriza a las bases fuertes.";
                } else {
                    $tipoAcidoBase = "Base débil";
                    $explicacion = "El pH alto pero no extremadamente básico sugiere una concentración moderada de iones hidróxido (OH-) en la solución, típico de bases débiles.";
                }
            } else {
                $tipoAcidoBase = "Neutral";
                $explicacion = "Un pH de 7 indica una solución neutra, donde la concentración de iones hidrógeno (H+) es igual a la concentración de iones hidróxido (OH-).";
            }

            echo $tablaDatos;
            echo "<p>Fórmula utilizada: pH = -log<sub>10</sub>([H<sup>+</sup>]) o pOH = -log<sub>10</sub>([OH<sup>-</sup>]) y pOH = 14 - pH</p>";
            echo $mensajeResultado;

            echo "<p><strong>Tipo de sustancia:</strong> $tipoAcidoBase</p>";
            echo "<p><strong>Explicación:</strong> $explicacion</p>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['compuesto'])) {
            $compuesto = $_POST["compuesto"] ?? "";
            $tipoConcentracion = $_POST["tipoConcentracion"] ?? "";
            $concentracion = $_POST["concentracion"] ?? "";
            $constanteDisociacion = $_POST["constanteDisociacion"] ?? "";

            $errores = [];
            if (empty($compuesto)) {
                $errores[] = "Por favor, ingrese el compuesto químico o el símbolo del elemento.";
            }
            if (!in_array($tipoConcentracion, ["OH", "H"])) {
                $errores[] = "Por favor, seleccione el tipo de concentración.";
            }
            if (!is_numeric($concentracion) || $concentracion <= 0) {
                $errores[] = "Por favor, ingrese una concentración válida (mayor que cero).";
            }
            if ($tipoConcentracion === "OH" && !empty($constanteDisociacion) && (!is_numeric($constanteDisociacion) || $constanteDisociacion <= 0)) {
                $errores[] = "La constante de disociación debe ser un número válido y mayor que cero.";
            }

            if (!empty($errores)) {
                echo '<div class="error">';
                foreach ($errores as $error) {
                    echo "<p>$error</p>";
                }
                echo '</div>';
            } else {
                calcularPHyPOH($compuesto, $tipoConcentracion, $concentracion, $constanteDisociacion);
                echo "<script>ocultarBarraCarga();</script>";
            }
        }
        ?>
    </div>
    <form id="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="compuesto">Ingrese el compuesto químico o símbolo del elemento:</label>
            <input type="text" name="compuesto" id="compuesto" required value="<?php echo isset($compuesto) ? htmlspecialchars($compuesto) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="tipoConcentracion">Seleccione el tipo de concentración:</label>
            <select name="tipoConcentracion" id="tipoConcentracion" required>
                <option value="">Seleccione...</option>
                <option value="OH" <?php if (isset($tipoConcentracion) && $tipoConcentracion === "OH") echo "selected"; ?>>Concentración de OH-</option>
                <option value="H" <?php if (isset($tipoConcentracion) && $tipoConcentracion === "H") echo "selected"; ?>>Concentración de H+</option>
            </select>
        </div>
        <div class="form-group">
            <label for="concentracion">Ingrese la concentración de la disolución (M):</label>
            <input type="number" step="0.0001" name="concentracion" id="concentracion" required value="<?php echo isset($concentracion) ? htmlspecialchars($concentracion) : ''; ?>">
        </div>
        
        <button type="submit" class="button">CALCULAR</button>
        <button type="reset" class="button" onclick="resetearResultados()">BORRAR</button>
    </form>
    <hr>
    <a href="index.html" class="button">REGRESAR</a>
</div>

<script>
    function mostrarBarraCarga() {
        document.getElementById('barra-carga').style.display = 'block';
    }

    function ocultarBarraCarga() {
        document.getElementById('barra-carga').style.display = 'none';
    }

    document.getElementById('formulario').addEventListener('submit', function() {
        mostrarBarraCarga();
    });

    // Si usas PHP para calcular, puedes ocultar la barra de carga después de que la página recargue con resultados.
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['compuesto'])): ?>
        window.addEventListener('load', function() {
            ocultarBarraCarga();
        });
    <?php endif; ?>

    function resetearResultados() {
        document.getElementById("resultados").innerHTML = '<div id="barra-carga" class="loader" style="display:none;"></div>';
    }
</script>

</body>
</html>
