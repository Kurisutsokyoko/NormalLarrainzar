<?php
include('../Backend/conexion.php');

if(isset($_POST['Guardar-Imagen'])){
    $imagen = $_FILES['imagen']['name'];
    $id=$_POST['id'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:bib-photos.php');
       }else{
            $query = "UPDATE photos SET imagen='$imagen' WHERE id='$id'";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                move_uploaded_file($temp,'imagenes/'.$imagen);   
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:bib-photos.php');
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }  
        }
    }
}

if(isset($_POST['Guardar-Video'])){
    $id=$_POST['id'];
    $titulo = $_POST['titulo'];
    $link = $_POST['link'];
    $query = "UPDATE videos SET titulo='$titulo', link='$link' WHERE id='$id'";
    $resultado = mysqli_query($conn,$query);
    if($resultado){ 
        $_SESSION['mensaje'] = 'se ha subido correctamente';
        $_SESSION['tipo'] = 'success';
        header('location:bib-videos.php');
    }else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
        $_SESSION['tipo'] = 'danger';
    }
}

if(isset($_POST['Guardar-Personal'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nombre'];
    list($stand, $orden) = explode(',', $_POST['cargo']);
    $levels = $_POST['academic_level'];
    $funcion = $_POST['academic_formation'];
    $id = $_POST['id'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:upload-photos.php');
       }else{
            $query = "UPDATE personal SET nombre='$nombre', cargo='$stand', imagen='$imagen', academic_formation='$funcion', academic_levels='$levels', orden='$orden' WHERE id='$id'";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                move_uploaded_file($temp,'imagenes/'.$imagen);   
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:bib-personal.php');
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }  
        }
    }else{
        $query = "UPDATE personal SET nombre='$nombre', cargo='$stand', academic_formation='$funcion', academic_levels='$levels', orden='$orden' WHERE id='$id'";
        $resultado = mysqli_query($conn,$query);
        if($resultado){
            move_uploaded_file($temp,'imagenes/'.$imagen);   
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:bib-personal.php');
        }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
        }
    }
}

if(isset($_POST['Guardar-Noticia'])){
    $imagen = $_FILES['imagen']['name'];
    $titulo = $_POST['titulo'];
    $cuerpo = $_POST['cuerpo'];
    $date = $_POST['date'];
    $id=$_POST['id'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:bib-notice.php');
       }else{
            $query = "UPDATE notice SET titulo='$titulo', cuerpo='$cuerpo', imagen='$imagen', date='$date' WHERE id='$id'";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                move_uploaded_file($temp,'imagenes/'.$imagen);   
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:bib-notice.php');
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }  
        }
    }else{
        $query = "UPDATE notice SET titulo='$titulo', cuerpo='$cuerpo', date='$date' WHERE id='$id'";
        $resultado = mysqli_query($conn,$query);
        if($resultado){
            move_uploaded_file($temp,'imagenes/'.$imagen);   
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:bib-notice.php');
        }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
        }
    }
}

if(isset($_POST['Guardar-Agenda'])){
    $imagen = $_FILES['imagen']['name'];
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];
    $id=$_POST['id'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp, png';
          $_SESSION['tipo'] = 'danger';
          header('location:bib-agenda.php');
       }else{
            $query = "UPDATE agenda SET titulo='$titulo', imagen='$imagen', fecha='$fecha' WHERE id='$id'";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                move_uploaded_file($temp,'imagenes/'.$imagen);   
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:bib-agenda.php');
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }  
        }
    }else{
        $query = "UPDATE agenda SET titulo='$titulo', fecha='$fecha' WHERE id='$id'";
        $resultado = mysqli_query($conn,$query);
        if($resultado){
            move_uploaded_file($temp,'imagenes/'.$imagen);   
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:bib-agenda.php');
        }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
        }
    }
}


if(isset($_POST['Guardar-Info-Relev'])){
    $imagen = $_FILES['imagen']['name'];
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];
    $cuerpo = $_POST['cuerpo'];
    $id=$_POST['id'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:bib-notice.php');
       }else{
            $query = "UPDATE informacion SET titulo='$titulo', cuerpo='$cuerpo', imagen='$imagen', fecha='$fecha' WHERE id='$id'";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                move_uploaded_file($temp,'imagenes/'.$imagen);   
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:bib-info-relev.php');
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }  
        }
    }else{
        $query = "UPDATE informacion SET titulo='$titulo', cuerpo='$cuerpo', fecha='$fecha' WHERE id='$id'";
        $resultado = mysqli_query($conn,$query);
        if($resultado){
            move_uploaded_file($temp,'imagenes/'.$imagen);   
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:bib-info-relev.php');
        }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
        }
    }
}


if(isset($_POST['Guardar-Ingreso'])){

    //$delete="DELETE FROM convocatoria";
    //$del=mysqli_query($conn,$delete);

    $file=$_FILES['pdf']['name'];
    $FileTpmName = $_FILES['pdf']['tmp_name'];    
    $file_path = "files/".$file;
    $file_name = $_POST['document_name'];
    $imagen = $_FILES['imagen']['name'];
    $id = $_POST['id'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
            $_SESSION['tipo'] = 'danger';
            header('location:upload-becas.php');
        }else{
            if(isset($file) && $file != ""){
                $query = "UPDATE ingreso SET title='$file_name', filee='$file', imagen='$imagen' WHERE id='$id'";
                $resultado = mysqli_query($conn,$query);
                if($resultado){
                    move_uploaded_file($FileTpmName,$file_path);
                    move_uploaded_file($temp,'imagenes/'.$imagen);   
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    header('location:upload-ingreso.php');
                }else{
                    $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                    $_SESSION['tipo'] = 'danger';
                }
            }else{
                $query = "UPDATE ingreso SET title='$file_name', imagen='$imagen' WHERE id='$id'";
                $resultado = mysqli_query($conn,$query);
                if($resultado){
                    move_uploaded_file($temp,'imagenes/'.$imagen);   
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    header('location:upload-ingreso.php');
                }else{
                    $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }else{
        if(isset($file) && $file != ""){
            $query = "UPDATE ingreso SET title='$file_name', filee='$file' WHERE id='$id'";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                move_uploaded_file($FileTpmName,$file_path); 
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:upload-ingreso.php');
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }
        }else{
            $query = "UPDATE ingreso SET title='$file_name' WHERE id='$id'";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:upload-ingreso.php');
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }
        }



        /*
        $query = "INSERT INTO ingreso(title, files) values('$file_name','$file')";
        $resultado = mysqli_query($conn,$query);
        if($resultado){ 
            move_uploaded_file($FileTpmName,$file_path);
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:upload-ingreso.php');
        }else{
         $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
         $_SESSION['tipo'] = 'danger';
        }
        */
    }
}

?>