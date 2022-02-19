<?php

$empleados[0] = array ('Nombre'=>$_POST['empleNombre1'],
                       'apellido'=>$_POST['empleApellido1'],
                       'cedula'=>$_POST['empleCedula1'],
                       'sueldo'=>$_POST['emplesueldo1'],
                       'departamento'=>$_POST['empleDepart1'],
                       'lugarTrabajo'=>$_POST['empleLTrabajo1'],
);

$empleados[1] =  array ('Nombre'=>$_POST['empleNombre2'],
                 'apellido'=>$_POST['empleApellido2'],
                 'cedula'=>$_POST['empleCedula2'],
                 'sueldo'=>$_POST['emplesueldo2'],
                 'departamento'=>$_POST['empleDepart2'],
                 'lugarTrabajo'=>$_POST['empleLTrabajo2'],
);

$empleados[2] =  array ('Nombre'=>$_POST['empleNombre3'],
                    'apellido'=>$_POST['empleApellido3'],
                        'cedula'=>$_POST['empleCedula3'],
                        'sueldo'=>$_POST['emplesueldo3'],
                  'departamento'=>$_POST['empleDepart3'],
                'lugarTrabajo'=>$_POST['empleLTrabajo3'],
);

    echo '<h1>REGISTRO DE EMPLEADOS: </h1>';

        foreach ($empleados as $posicion) {
            echo '<h3>Nombre: ' . $posicion['Nombre'] . '</h3>';
            echo '<h3>Apellido: ' . $posicion['apellido'] . '</h3>';
            echo '<h3>Cédula: ' . $posicion['cedula'] . '</h3>';
            echo '<h3>Sueldo: ' . $posicion['sueldo'] . '</h3>';
            echo '<h3>Departamento: ' . $posicion['departamento'] . '</h3>';
            echo '<h3>Lugar donde trabaja: ' . $posicion['lugarTrabajo'] . '</h3>';
            echo '<hr>';
        }
?>