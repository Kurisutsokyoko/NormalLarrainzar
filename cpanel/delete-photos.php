<?php 
    include('../Backend/conexion.php');

    $id=$_GET['id'];
    //Usar para eliminar files con bases de datos y php (Solo cambiar la tabla, la ubicacion y el nombre de la row)
    $query = "SELECT * FROM photos WHERE id='$id'";
    
    //Usar cuando sepa duplicar archivos
    //$result=mysqli_query($conn,$query);
    //$row=mysqli_fetch_array($result);
    //unlink("../cpanel/imagenes/".$row['imagen']);// Delete the file from server
    
    
    $delete = "DELETE FROM photos WHERE id='$id'";
    $resultado = mysqli_query($conn,$delete);
    if($resultado){ 
        $_SESSION['mensaje'] = 'se ha subido correctamente';
        $_SESSION['tipo'] = 'success';
        header('location:bib-photos.php');
    }else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
        $_SESSION['tipo'] = 'danger';
    }
?>