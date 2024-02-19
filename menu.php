<?php 
include './controlador/seguridad.php';
?>


<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplicativo Web GEM</title>
  <link rel="stylesheet" media="all" href="style.css" />
</head>
<body>
	
<header>
        <div style="float: right; margin-right: 10px;">
            <form action="./controlador/logout.php" method="post">

                <button type="submit" class="btn btn-secondary " value="Logout">Salir</button>

            </form>
        </div>
       
      
    </header>

<input type='checkbox' id='mmeennuu'>

<label class='menu' for='mmeennuu'>

<div class='barry'>
	<span class='bar'></span>
	<span class='bar'></span>
	<span class='bar'></span>
	<span class='bar'></span>
	
</div>
	
<ul>
	<li><a id='ventas' href='./Views/Ventas.php'>Ventas</a></li>
	<li><a id='merma' href='./Views/Merma.php'>Mermas</a></li>
	<li><a id='contact' href='./Views/Asignacion.php'>Asignaciones</a></li>
	<li><a id='link' href='./Views/Producto.php'>Productos</a></li>

  
</ul>

</label>


</body>





</html>