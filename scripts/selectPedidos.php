<?php
//Coneccion a la DB
require_once "connection.php";

//Obteniendo datos de la tabla pedidos
$sql = "SELECT Pedidos.id, Clientes.NombreCliente, Clientes.DireccionEmpresa,
  Pedidos.Cantidad, Pedidos.Precio, Repartidores.NombreRepartidor, Pedidos.Completado, Pedidos.FechaLimite
FROM Clientes INNER JOIN Pedidos ON Clientes.id = Pedidos.idCliente
INNER JOIN Repartidores ON Pedidos.idRepartidor = Repartidores.id
WHERE Pedidos.Completado = 0
ORDER BY Pedidos.FechaLimite";

//Consultando
$result = $link->query($sql);

//Desplegando datos en forma de tabla
if ($result->num_rows > 0) {
    //Desplegrando cada renglon
    while($row = $result->fetch_assoc()) {
        $fecha = new DateTime($row["FechaLimite"]); 
        $fecha = $fecha->format("d-m-Y");
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["NombreCliente"]. "</td><td>" . $row["DireccionEmpresa"]. "</td>";
        echo "<td>" . $row["Cantidad"]. "</td><td>" . $row["Precio"]. "</td><td>" . $row["NombreRepartidor"]. "</td>";
        echo "<td>" . $fecha . "</td>";
        /*
        //Si ya esta completado el checkbox aparecerá ya marcado
        if ($row["Completado"] == 1){
            echo "<td><input type='checkbox' checked></td>";
        }
        else{
            echo "<td><input type='checkbox' ></td>";
        }
        */
        echo "</tr>";

    }
}
else {
    echo "No hay pedidos pendientes dados de alta";
}
?>
