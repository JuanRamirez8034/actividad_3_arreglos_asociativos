<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Arreglos Asociativos</title>
</head>
<!--Realice un programa en PHP que permita la entrada de 
nombre, apellido y cedula de 3 
empleados al igual que sus respectivos 
sueldos, departamento y lugar de trabajo. 
utilice arreglos asociativos.
-->
<body>
    <div class="principal">
        <h1>Arreglos asociativos</h1>
        <div class="secundaria">
            <form action="index.php" method="POST">
                <h3>Datos empleados</h3>
                <div class="flexible">
                <label>Nombre</label><label>Apellido</label><label>Cedula</label><label class="mas">Salario</label class='mas'><label>Departamento</label><label class='mas'>Lugar</label>
                </div>
                <div class="fila">
                    <input type="text" name="nombre_1"       id="nombre_1" placeholder="Ingresar nombre" require>
                    <input type="text" name="apellido_1"     id="apellido_1" placeholder="Ingresar apellido" require>
                    <input type="text" name="cedula_1"       id="cedula_1" placeholder="Ingresar cedula" require>
                    <input type="text" name="salario_1"      id="salario_1" placeholder="Ingresar salario" require>
                    <input type="text" name="departamento_1" id="departamento_1" placeholder="Ingresar nombre Dto" require>
                    <input type="text" name="l-trabajo_1"    id="l-trabajo_1" placeholder="Ingresar nombre trabajo" require>
                </div>
                <div class="fila">
                    <input type="text" name="nombre_2"       id="nombre_2" placeholder="Ingresar nombre" require>
                    <input type="text" name="apellido_2"     id="apellido_2" placeholder="Ingresar apellido" require>
                    <input type="text" name="cedula_2"       id="cedula_2" placeholder="Ingresar cedula" require>
                    <input type="text" name="salario_2"      id="salario_2" placeholder="Ingresar salario" require>
                    <input type="text" name="departamento_2" id="departamento_2" placeholder="Ingresar nombre Dto" require>
                    <input type="text" name="l-trabajo_2"    id="l-trabajo_2" placeholder="Ingresar nombre trabajo" require>
                </div>
                <div class="fila">
                    <input type="text" name="nombre_3"       id="nombre_3" placeholder="Ingresar nombre" require>
                    <input type="text" name="apellido_3"     id="apellido_3" placeholder="Ingresar apellido" require>
                    <input type="text" name="cedula_3"       id="cedula_3" placeholder="Ingresar cedula" require>
                    <input type="text" name="salario_3"      id="salario_3" placeholder="Ingresar salario" require>
                    <input type="text" name="departamento_3" id="departamento_3" placeholder="Ingresar nombre Dto" require>
                    <input type="text" name="l-trabajo_3"    id="l-trabajo_3" placeholder="Ingresar nombre trabajo" require>
                </div>
                <input type="submit" value="registrar" name="registrar">
            </form>
            <div class="resultado">
                <h3>Vista</h3>
                <?php include("./assets/main.php")?>
            </div>
        </div>
    </div>
</body>
</html>