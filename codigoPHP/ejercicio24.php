<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CFGS - Desarrollo de Aplicaciones Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        header {
            background: #F59C27;
            color: white;
            padding: 15px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        footer{
            margin: auto;
            background-color: #F59C27;
            text-align: center;
            height: 150px;
	    color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
	main{
	text-align:center;
	justify-content:center;
	}
        a{
            text-decoration: none;
            color:purple;
        }
        
        td{
            padding: 10px;
            border-width: 4px;
        }
        
        #encabezado{
            background-color: lightsteelblue;
            font-weight: bold;
        }
        
        .codigos{
            background-color: lightblue;
        }
        
        .mostrar{
            background-color: lightsalmon;
        }
        
        tr{
            height: 40px;
        }
        table{
            border-collapse: collapse;
            border-width: 4px;
            margin: 0 auto;
        }
        
        td{
            padding: 10px;
            border-width: 4px;
        }
        input{
            border-radius: 15px;
        }
        
        #formulario{
            margin: 0 auto;
            border-style:solid;
            border-color: black;
            border-width: 1px;
            width: 600px;
            border-radius: 25px;
            background-color: linen;
        }
        #boton{
            border-radius: 5px;
            width: 150px;
            background-color: lightgreen;
        }
        label{
            font-weight: bold;
        }
        h3{
            text-decoration: underline;
        }
        
    </style>
</head>
<body>
    <header>
        <h1><b>UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</b></h1>
        <a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>Ejercicio 24</b></h2>
        <div id="formulario">
       <h3>Formulario de datos del departamento:</h3>
       
                    <?php
            /*
             * Autor: Alberto Méndez Núñez
             * Fecha de ultima modificación: 21/11/2025
             *24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                    recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
                    respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
             */
                            

            require_once '../core/231018libreriaValidacion.php';

            $aErrores = [
                "T02_CodDepartamento" => "",
                "T02_DescDepartamento" => "",
                "T02_VolumenNegocio" => ""
            ];

            $aRespuestas = [
                "T02_CodDepartamento" => "",
                "T02_DescDepartamento" => "",
                "T02_VolumenNegocio" => ""
            ];

            $entradaOK = true;

            if (isset($_REQUEST['submit'])) {

                $T02_CodDepartamento=$_REQUEST['T02_CodDepartamento'] ?? "";
                $T02_DescDepartamento=$_REQUEST['T02_DescDepartamento'] ?? "";
                $T02_VolumenNegocio=$_REQUEST['T02_VolumenNegocio'] ?? "";

                $aErrores['T02_CodDepartamento']=validacionFormularios::comprobarAlfabetico($T02_CodDepartamento, 3, 3, 1);
                
                if($T02_CodDepartamento!== strtoupper($T02_CodDepartamento)){
                    $aErrores['T02_CodDepartamento']='El codigo de departamento debe estar en mayusculas';
                }
                
                $aErrores['T02_DescDepartamento']=validacionFormularios::comprobarAlfabetico($T02_DescDepartamento, 255, 1, 1);
                
                $volumen = str_replace(",", ".", $T02_VolumenNegocio);
                $aErrores['T02_VolumenNegocio']=validacionFormularios::comprobarFloat($volumen, PHP_FLOAT_MAX, 0, 1);

                foreach ($aErrores as $error) {
                    if (!empty($error)) {
                        $entradaOK = false;
                    }
                }
            }

            if ($entradaOK && isset($_REQUEST['submit'])) {

                $aRespuestas['T02_CodDepartamento']  = $T02_CodDepartamento;
                $aRespuestas['T02_DescDepartamento'] = $T02_DescDepartamento;
                $aRespuestas['T02_VolumenNegocio']   = $T02_VolumenNegocio;

                echo "<h3>Datos introducidos:</h3>";
                echo "Código: " . $aRespuestas["T02_CodDepartamento"] . "<br>";
                echo "Descripción: " . $aRespuestas["T02_DescDepartamento"] . "<br>";
                echo "Volumen de negocio: " . $aRespuestas["T02_VolumenNegocio"] . "€" . "<br>";

            } else {
                ?>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <table>

                            <tr>
                                <td><label for="T02_CodDepartamento">Código de departamento:</label></td>
                                <td><input type="text" name="T02_CodDepartamento" id="T02_CodDepartamento"
                                           style="background-color: lightgoldenrodyellow"
                                           value="<?= (empty($aErrores['T02_CodDepartamento'])) ?
                                               ($_REQUEST['T02_CodDepartamento'] ?? '') : '' ?>"></td>

                                <td><span style="color:red;"><?= $aErrores["T02_CodDepartamento"] ?></span></td>
                            </tr>


                            <tr>
                                <td><label for="T02_DescDepartamento">Descripción del departamento:</label></td>
                                <td><input type="text" name="T02_DescDepartamento" id="T02_DescDepartamento"
                                           style="background-color: lightgoldenrodyellow"
                                           value="<?= (empty($aErrores['T02_DescDepartamento'])) ?
                                               ($_REQUEST['T02_DescDepartamento'] ?? '') : '' ?>"></td>

                                <td><span style="color:red;"><?= $aErrores["T02_DescDepartamento"] ?></span></td>
                            </tr>


                            <tr>
                                <td><label for="T02_VolumenNegocio">Volumen de Negocio:</label></td>
                                <td><input type="number" name="T02_VolumenNegocio" id="T02_VolumenNegocio"
                                           style="background-color: lightgoldenrodyellow"
                                           value="<?= (empty($aErrores['T02_VolumenNegocio'])) ?
                                                ($_REQUEST['T02_VolumenNegocio'] ?? '') : '' ?>" step="0.1"></td>

                                <td><span style="color:red;"><?= $aErrores["T02_VolumenNegocio"] ?></span></td>
                            </tr>

                            <tr>
                                <td colspan="3" style="text-align:center;">
                                    <input id="boton" type="submit" name="submit" value="Enviar">
                                </td>
                            </tr>

                        </table>
                    </form>

            <?php
            }
            ?>
        
    </main>
</body>
</html>