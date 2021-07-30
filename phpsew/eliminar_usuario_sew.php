<?php
EliminarProducto($_GET['id']);
            
            function EliminarProducto($clave)
            {
                include 'conexion.php';
                $sentencia="DELETE FROM usuarios WHERE id='".$clave."' ";
                $conn->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
        
            }
        ?>
        
        <script type="text/javascript">
            alert("¡ Usuario Eliminado !");
            window.location.href='ver_usuarios_sew.php';
        </script>
         