<?php
    
    if (isset($_POST['registrar'])
        && !empty($_POST['nombre_1'])
        && !empty($_POST['nombre_2'])
        && !empty($_POST['nombre_3'])){

        $empleados = [0=>[trim($_POST['nombre_1']), trim($_POST['apellido_1']), trim($_POST['cedula_1']),trim($_POST['salario_1']), trim($_POST['departamento_1']), trim($_POST['l-trabajo_1'])],
                      1=>[trim($_POST['nombre_2']), trim($_POST['apellido_2']), trim($_POST['cedula_2']),trim($_POST['salario_2']), trim($_POST['departamento_2']), trim($_POST['l-trabajo_2'])],
                      2=>[trim($_POST['nombre_3']), trim($_POST['apellido_3']), trim($_POST['cedula_3']),trim($_POST['salario_3']), trim($_POST['departamento_3']), trim($_POST['l-trabajo_3'])]
                    ];
        
        for ($i = 0; $i < count($empleados); $i++){
                echo '<div class="rsltd">','Empleado #',$i + 1,'<br>';
                for($dato = 0; $dato < count($empleados[$i]); $dato++){
                    echo '>>> ',$empleados[$i][$dato],'<br>';
                }
                echo '</div>';
        }
    }

?>