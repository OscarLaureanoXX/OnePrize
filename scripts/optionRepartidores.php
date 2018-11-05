<?php


//Obteniendo Telefono y Direccion del cliente
$sql = "SELECT id, NombreRepartidor FROM Repartidores";

//Consultando
$result = $link->query($sql);

//Desplegando los en forma de opciones para el dropdown de agregar pedido
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["id"] ."'>".$row["NombreRepartidor"] ."</option>";
    }
} 
else {
    echo "<option value='-1'>0 resultados</option>";
}
?>
