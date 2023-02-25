<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar clientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col">
    <table class="table">
    	<thead class="table-success table-striped">

    		<th>nombre</th>
    		<th>apellidos</th>
    		<th>correo</th>
    		<th>usuario</th>
    		<th>clave</th>
    		<th>telefono</th>
    		<th></th>
    		<th></th>

    	</thead>

    	<?php
    		include('DataBase.php');
    		$con=conectarse();
    		$sql='select * from usuario'
    		$result=mysqli_query($conexion, $Sql);
    		while($fila=mysqli_fetch_array($result))
    		?>


    		<tbody>
    			<tr>
    				<td><?php echo $fila['nombre'];?></td>
    				<td><?php echo $fila['apellidos'];?></td>
    				<td><?php echo $fila['correo'];?></td>
    				<td><?php echo $fila['usuario'];?></td>
    				<td><?php echo $fila['clave'];?></td>
    				<td><?php echo $fila['telefono'];?></td>
    				<td><a href="actualizarCliente.php?id=<?php> echo $fila['telefono'];?>Editar</a></td>
    				<td><a href="eliminarCliente.php?id=<?php> echo $fila['nombre'];?>Eliminar</a></td>
    				<td><?php echo $fila['nombre'];?></td>

    			</tr>
    		</tbody>
    		<?php
    	}
           <?
    </table>

</div>

</div>

</div>

</body>
</html>