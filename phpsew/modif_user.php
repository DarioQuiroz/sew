<?php

modifusuario(
    $_POST['Id'],
        $_POST['Nombre'],
        $_POST['Usuario'],
        $_POST['Clave'],
        $_POST['Correo'],
        $_POST['No_control']
        );
        function modifusuario($id, $Nombre, $Usuario, $Clave, $Correo, $No_control)
	{
        include "db.php";
        include "conexion.php";
               
                if (mysqli_connect_errno()) {
                die("No se puede conectar a la base de datos:" . mysqli_connect_error());
                }else{
                 
        
                }
	 $sentencia="UPDATE usuarios SET
     nombre='".$Nombre."',
     usuario='".$Usuario."',
     clave='".$Clave."',
     correo='".$Correo."',
     tipo='".$tipo."',
     num_emple='".$No_control."'
         WHERE id='".$id."' ";
	$conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conn));
}
        


if ($conn) {
    ?>
    <script type="text/javascript">
            alert("! error al Actualizar datos !");
            window.location.href = "edit_usuarios_sew.php?id=<?php echo  $_POST['Id']; ?>";
    </script>
<?php
} else {
    ?>
    <script type="text/javascript">
            alert("!Datos actualizados con éxito !");
           window.location.href = 'ver_usuarios_sew.php';
    </script>
    <?php
}




?>

