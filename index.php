<?php 
$conexion = new mysqli("localhost", 
"root", 
"", 
"test"
);

$sql = "select * from menu"; 
 $r = $conexion->query($sql);
echo "<table> 
<thead> 
      <tr> 
             <th>Producto</th> 
             <th>Precio</th> 
             </tr> 
          </thead> 
          <tbody>"; 
 while($fila = $r->fetch_assoc()){
     echo "<tr>
     <td>{$fila["producto"]}</td>
     <td>{$fila["precio"]}</td>
    </tr>"; }
 echo "</tbody>";
