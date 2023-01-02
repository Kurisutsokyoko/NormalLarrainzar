<?php 
    include('../Backend/conexion.php');

    $id=$_GET['id'];
    $query="SELECT * FROM becas WHERE id='$id'";
    $result=mysqli_query($conn,$query);
    if($del=mysqli_fetch_array($result)){
        unlink("../cpanel/imagenes/".$del['imagen']);
        unlink("../cpanel/files/".$del['files']);
    }
    else{
        echo"Error";
    }
    $delete = "DELETE FROM becas WHERE id='$id'";
    $resultado = mysqli_query($conn,$delete);
    if($resultado){ 
        $_SESSION['mensaje'] = 'se ha subido correctamente';
        $_SESSION['tipo'] = 'success';
        header('location:upload-becas.php');
    }else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
        $_SESSION['tipo'] = 'danger';
        header('location:upload-becas.php');
    }
?>