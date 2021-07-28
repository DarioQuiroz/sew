<?php
error_reporting(0);
include 'conexionvacante.php';
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];

$usuario2 = $_POST['usuario2'];

$contraseña = $_POST['contraseña'];

$contraseña2 = $_POST['contraseña2'];

$Correo = $_POST['Correo'];

$Tipo = $_POST['Tipo'];



if (buscarrepetido($usuario, $conn) == 1) {
                ?>
        <script type="text/javascript">
                alert("!El usuario ya existe!");
                window.location.href = 'registrarsefac.html';
        </script>
<?php
} else {
        $insertar = "INSERT INTO usuarios (`nombre`, `usuario`, `clave`, `correo`, `tipo`) VALUES 
('$nombre', '$usuario', '$contraseña', '$Correo', '$Tipo')";


        $resultado = mysqli_query($conn, $insertar);
        echo mysqli_errno($this->db_link);
}

function buscarrepetido($user, $conn)
{
        $sql = "SELECT *FROM usuarios WHERE usuario='$user'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {  ?>
                <script type="text/javascript">
                        alert("!El usuario que intentas ingresar, ya ha sido registrado!");
                     //   window.location.href = 'registrarsefac.html';
                </script>
                <?php
                return 1;
        } else {
        return 0;
}
}



if (!$resultado) {
                ?>
        <script type="text/javascript">
                alert("! error al registrar !");
             //   window.location.href = 'registrarsefac.html';
        </script>
<?php
} else {
        ?>
        <script type="text/javascript">
                alert("¡ Usuario registrado exitosamente !");
                window.location.href = 'loguin_facturar.php';
        </script>
<?php
}
mysqli_close($conn);
?>