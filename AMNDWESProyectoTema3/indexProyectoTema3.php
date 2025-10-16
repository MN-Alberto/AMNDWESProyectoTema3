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
        
        table{
            border-collapse: collapse;
            width: 100%;
            border-width: 4px;
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
            height: 80px;
        }

    </style>
</head>
<body>
    <header>
        <h1><b>Índice Proyecto Tema 3</b></h1>
	<h3><a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a></h3>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>CONTENIDO</b></h2>
        <table border solid black 2px>
            <tr id="encabezado">
                <td>NÚMERO EJERCICIO</td>
                <td>ENUNCIADO</td>
                <td>EJECUTAR CÓDIGO</td>
                <td>MOSTRAR CÓDIGO</td>
            </tr>
            
             <tr>
                <td>Ejercicio00</td>
                <td>0. Hola mundo y phpinfo().</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio00.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio00.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio01</td>
                <td>1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,
                    var_dump).</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio01.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio01.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio02</td>
                <td>2. Inicializar y mostrar una variable heredoc.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio02.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio02.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio03</td>
                <td>3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio03.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio03.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio04</td>
                <td>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio04.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio04.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio05</td>
                <td>5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio05.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio05.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio06</td>
                <td>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio06.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio06.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio07</td>
                <td>7. Mostrar el nombre del fichero que se está ejecutando.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio07.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio07.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio08</td>
                <td>8. Mostrar la dirección IP del equipo desde el que estás accediendo.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio08.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio08.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio09</td>
                <td>9. Mostrar el path donde se encuentra el fichero que se está ejecutando.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio09.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio09.php">Ver código</a></td>
            </tr>
        </table>
    </main>
</body>
</html>

