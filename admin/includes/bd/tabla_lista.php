<?php


include('../../../includes/conexion.php');
$consulta = 'select * from usuarios';
$resultado = mysqli_query($conexion, $consulta);
$tabla = <<<FIN
<table>
<tr><th>Nombre</th><th>Apellidos</th><th>Telefono</th><th>Correo</th><th colspan="2">Accion</th></tr>
FIN;

while ($registro = mysqli_fetch_assoc($resultado)) {
    $tabla .= '<tr>';
    $tabla .= "<td>{$registro['nombres']}</td>";
    $tabla .= "<td>{$registro['app']}</td>";
    $tabla .= "<td>{$registro['apm']}</td>";
    $tabla .= "<td>{$registro['correo']}</td>";
    $tabla .= "<td><a href=borrar.php?id={$registro['id']}>Borrar</a></td>";
    $tabla .= "<td><a href=editar.php?id={$registro['id']}>Editar</a></td>";
    $tabla .= '</tr>';
}
$tabla .= '</table>';
