<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>Sistema Gestion Empresarial</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../main.css">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>
    <header>
    <div style="float: right; margin-right: 10px;">
            <form action="../controlador/logout.php" method="post">

                <button type="submit" class="btn btn-secondary " value="Logout">Salir</button>

            </form>
        </div>
        <h1 class="text-center text-light">Sistema GEM</h1>
        <h2 class="text-center text-light">Consulta de <span class="badge badge-warning">Registro de Productos</span></h2>
    </header>
    <div style="height:50px"></div>

    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">CATEGORIA</th>
                                <th scope="col">STOCK</th>
                                <th scope="col">PRECIO</th>
                                <th scope="col">PORCENTAJE IVA</th>
                                <th scope="col">ESTADO(A-I)</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require("../Config/Conexion.php");
                            $sql = $conexion->query("SELECT 
                            p.idProducto,
                            p.nombre,
                            p.descripcion,
                            c.descripcion AS categoria,
                            p.cantidad,
                            p.precio,
                            p.porcentajeIva,
                            p.estado
                        FROM 
                            tb_producto p
                        INNER JOIN 
                            tb_categoria c ON p.idCategoria = c.idCategoria
                      ;");
                            while ($resultado = $sql->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $resultado['idProducto'] ?></td>
                                    <td><?php echo $resultado['nombre'] ?></td>
                                    <td><?php echo $resultado['descripcion'] ?></td>
                                    <td><?php echo $resultado['categoria'] ?></td>
                                    <td><?php echo $resultado['cantidad'] ?></td>
                                    <td><?php echo $resultado['precio'] ?></td>
                                    <td><?php echo $resultado['porcentajeIva'] ?></td>
                                    <td><?php echo $resultado['estado'] ?></td>



                                </tr>

                            <?php

                            };
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="float: left; margin-right: 10px;">
            <form action="../menu.php" method="post">

                <input type="submit" class="btn btn-primary " value="Atras">

            </form>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>

    <!-- para usar botones en datatables JS -->
    <script src="../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="../datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

    <!-- código JS -->
    <script type="text/javascript" src="../main.js"></script>


</body>

</html>