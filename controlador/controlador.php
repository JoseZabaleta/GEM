
<?php
session_start();


// Procesar el inicio de sesión
if (!empty($_POST["btningresar"])) {
    // Verificar que los campos no estén vacíos
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["password"];
        $_SESSION['usuario'] = $usuario;

        $sql = $conexion->query("select * FROM tb_usuario WHERE usuario='$usuario' and password = '$contrasena'");


        if ($datos = $sql->fetch_object()) {

            header("Location:menu.php");
        } else {
            echo '<div class="alert alert-danger">Acceso denegado</div>';
        }
    }
}
?>