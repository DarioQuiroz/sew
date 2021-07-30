<?php
error_reporting();
include 'conexion.php';
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];

$usuario2 = $_POST['usuario2'];

$contraseña = $_POST['contraseña'];

$contraseña2 = $_POST['contraseña2'];

$Correo = $_POST['Correo'];

$Tipo = $_POST['Tipo'];
$numero=$_POST['numero'];


if (buscarrepetido($usuario, $conn) == 1) {
                ?>
        <script type="text/javascript">
                alert("!El usuario ya existe!");
                window.location.href = 'registrar_user_sew.html';
        </script>
<?php
} else if ($usuario==$usuario2 && $contraseña==$contraseña2){
        $insertar = "INSERT INTO usuarios (`nombre`, `usuario`, `clave`, `correo`, `tipo`,`num_emple`) VALUES 
('$nombre', '$usuario', '$contraseña', '$Correo', '$Tipo', '$numero')";

$resultado = mysqli_query($conn, $insertar);
if (!$resultado) {
        ?>
        <script type="text/javascript">
                alert("! error al registrar !");
                window.location.href = 'registrar_user_sew.html';
        </script>
<?php
} else {
        ?>
        <script type="text/javascript">
                alert("!registro exitoso !");
               window.location.href = 'ver_usuarios_sew.php';
        </script>
        <?php
}



  


}






function buscarrepetido($user, $conn)
{
        $sql = "SELECT *FROM usuarios WHERE usuario='$user'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {  ?>
                <script type="text/javascript">
                        alert("!El usuario que intentas ingresar, ya ha sido registrado!");
                      window.location.href = 'registrar_user_sew.html';
                </script>
                <?php
                return 1;
        } else {
        return 0;
}
}
mysqli_close($conn);
?>