<?php
    include('../Backend/conexion.php');

    $id=$_GET['id'];
    $delete = "DELETE FROM stand WHERE id='$id'";
    $resultado = mysqli_query($conn,$delete);
    if($resultado){
        $_SESSION['mensaje'] = 'se ha subido correctamente';
        $_SESSION['tipo'] = 'success';
        header('location:upload-stand.php');
    }else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
        $_SESSION['tipo'] = 'danger';
    }


?>