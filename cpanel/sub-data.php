<?php

include('../Backend/conexion.php');

if(isset($_POST['Guardar-Imagen'])){
    $imagen = $_FILES['imagen']['name'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
          $_SESSION['tipo'] = 'danger';
          header('location:bib-photos.php');
       }else{
         $query = "INSERT INTO photos(imagen) values('$imagen')";
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

/*
if(isset($_POST['Guardar-Imagen'])){
    $imagen = $_FILES['imagen']['name'];
    list($name_img,$name_ext)=explode(".",$imagen);
    $copy="_copy";

    if(isset($imagen) && $imagen != ""){
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
            $_SESSION['tipo'] = 'danger';
            header('location:bib-photos.php');
        }else{
            if(!file_exists($imagen)){
                $imagen_c=$name_img.$copy.".".$name_ext;
                $query="INSERT INTO photos(imagen) VALUES('$imagen_c')";
                $resltado=mysqli_query($conn,$query);
                if($resultado){
                    move_uploaded_file($temp,'../cpanel/imagenes/'.$imagen_c); 
                    header('location:bib-photos.php');
                }
            }else{
                $query = "INSERT INTO photos(imagen) values('$imagen')";
                $resultado = mysqli_query($conn,$query);
                if($resultado){
                    move_uploaded_file($temp,'cpanel/imagenes/'.$imagen);   
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
}

*/

if(isset($_POST['Guardar-Calendario'])){
    $query = "SELECT * FROM calendario";
    
    //Usar cuando sepa duplicar archivos
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    unlink("../cpanel/imagenes/".$row['imagen']);// Delete the file from server


    $delete="DELETE FROM calendario";
    $del=mysqli_query($conn,$delete);
    
    $imagen = $_FILES['imagen']['name'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
          $_SESSION['tipo'] = 'danger';
          header('location:upload-cal-esc.php');
       }else{
         $query = "INSERT INTO calendario(imagen) values('$imagen')";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'imagenes/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:upload-cal-esc.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}

if(isset($_POST['Guardar-Video'])){
    $titulo = $_POST['titulo'];
    $link = $_POST['link'];
    $query = "INSERT INTO videos(titulo, link) values('$titulo','$link')";
    $resultado = mysqli_query($conn,$query);
    if($resultado){ 
        $_SESSION['mensaje'] = 'se ha subido correctamente';
        $_SESSION['tipo'] = 'success';
        header('location:upload-videos.php');
    }else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
        $_SESSION['tipo'] = 'danger';
    }/*

    //https://www.youtube.com/watch?v=MxhasqDtq1s
    $cantidad_url_video 	= strlen($link);
    if ($cantidad_url_video == '28') {
    	$cortar_url 			= str_replace ('https://youtu.be/','',$link);
    	$url_final_video 		= 'https://www.youtube.com/embed/' .$cortar_url; 

    }elseif ($cantidad_url_video == '41') {
    	$cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$link);
    	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

    }elseif ($cantidad_url_video == '43') {
    	$cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$link);
    	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

    }elseif ($cantidad_url_video == '58') {
    	$cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$link);
    	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

    }elseif ($cantidad_url_video == '60') {
    	$cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$link);
    	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 
    }else{
    echo "URL INVALIDA";
    }

    //Creando mi INSERT a BD
    $queryInsert = ("INSERT INTO videos(titulo, link) VALUES ('$titulo', '$link')");
    $result = mysqli_query($conn, $queryInsert);

    header('location:upload-videos.php');
*/
}

if(isset($_POST['Guardar-Noticia'])){
    $imagen = $_FILES['imagen']['name'];
    $titulo = $_POST['titulo'];
    $cuerpo = $_POST['cuerpo'];
    $date = $_POST['date'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
            $_SESSION['tipo'] = 'danger';
            header('location:bib-notice.php');
        }else{
            $query = "INSERT INTO notice(imagen, name, titulo, cuerpo, date) values('$imagen', '$name', '$titulo', '$cuerpo', '$date')";
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
        $query = "INSERT INTO notice(titulo, cuerpo, date) values('$titulo','$cuerpo','$date')";
        $resultado = mysqli_query($conn,$query);
        if($resultado){ 
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:bib-notice.php');
        }else{
         $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
         $_SESSION['tipo'] = 'danger';
        }
    }
}

if(isset($_POST['Guardar-Beca'])){
    $imagen = $_FILES['imagen']['name'];
    $titulo = $_POST['titulo'];
    $file=$_FILES['file']['name'];
    $FileTpmName = $_FILES['file']['tmp_name'];    
    $file_path = "../cpanel/files/".$file;

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
            $_SESSION['tipo'] = 'danger';
            header('location:upload-becas.php');
        }else{
            $query = "INSERT INTO becas(imagen, files, title) values('$imagen', '$file', '$titulo')";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                move_uploaded_file($FileTpmName,$file_path);
                move_uploaded_file($temp,'imagenes/'.$imagen);   
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:upload-becas.php');
            }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
            }
        }
    }else{
        $query = "INSERT INTO becas(title, files) values('$titulo','$file')";
        $resultado = mysqli_query($conn,$query);
        if($resultado){ 
            move_uploaded_file($FileTpmName,$file_path);
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:upload-becas.php');
        }else{
         $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
         $_SESSION['tipo'] = 'danger';
        }
    }
}

if(isset($_POST['Guardar-Personal'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nombre'];
    list($stand, $orden) = explode(',', $_POST['cargo']);
    $funcion = $_POST['academic_formation'];
    $levels = $_POST['academic_level'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
            $_SESSION['tipo'] = 'danger';
            header('location:bib-personal.php');
        }else{
            $query = "INSERT INTO personal(nombre, cargo, imagen, academic_formation, academic_levels, orden) values('$nombre','$stand', '$imagen', '$funcion','$levels', '$orden')";
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
        $query = "INSERT INTO personal(nombre, cargo, academic_formation, academic_levels, orden) values('$nombre','$stand', '$funcion','$levels', '$orden')";
        $resultado = mysqli_query($conn,$query);
        if($resultado){   
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:bib-personal.php');
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

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, png';
            $_SESSION['tipo'] = 'danger';
            header('location:bib-agenda.php');
        }else{
            $query = "INSERT INTO agenda(titulo, imagen, fecha) values('$titulo', '$imagen', '$fecha')";
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
        $query = "INSERT INTO agenda(titulo, fecha) values('$titulo', '$fecha')";
        $resultado = mysqli_query($conn,$query);
        if($resultado){
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
    $cuerpo = $_POST['cuerpo'];
    $fecha = $_POST['fecha'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
            $_SESSION['tipo'] = 'danger';
            header('location:upload-info-relev.php');
        }else{
            $query = "INSERT INTO informacion(titulo, cuerpo, imagen, fecha) values('$titulo', '$cuerpo', '$imagen', '$fecha')";
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
        $query = "INSERT INTO informacion(titulo, cuerpo, fecha) values('$titulo', '$cuerpo', '$fecha')";
        $resultado = mysqli_query($conn,$query);
        if($resultado){ 
            $_SESSION['mensaje'] = 'se ha subido correctamente';
            $_SESSION['tipo'] = 'success';
            header('location:bib-info-relev.php');
        }else{
         $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
         $_SESSION['tipo'] = 'danger';
        }
    }
}

if(isset($_POST['Guardar-Stand'])){
    $stand = $_POST['stand'];
    $levels = $_POST['levels'];

    //Verificación

    $ver = mysqli_query($conn,"SELECT stand FROM stand WHERE stand = '$stand'");
    if(mysqli_num_rows($ver)>0){
        echo '<script>
                alert("Ya existe el puesto")
                window.location="upload-stand.php"
              </script>';
    }else{
        $query = "INSERT INTO stand(stand,levels) values('$stand','$levels')";
        $resultado = mysqli_query($conn,$query);
        if($resultado){
            $_SESSION['mensaje'] = 'Complete upload';
            $_SESSION['mensaje'] = 'seccesfull';
            header('location:upload-stand.php');
        }else{
            $_SESSION['mensaje'] = 'Incomplete upload';
            $_SESSION['mensaje'] = 'danger';
            header('location:upload-stand.php');
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

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg, jpeg, png';
            $_SESSION['tipo'] = 'danger';
            header('location:upload-becas.php');
        }else{
            $query = "INSERT INTO ingreso(imagen, filee, title) values('$imagen', '$file', '$file_name')";
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
        }
    }else{
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
    }
}

if(isset($_POST['Guardar-Horario'])){
    $semestre=$_POST['semestre'];
    $grupo=$_POST['group'];

    $file=$_FILES['file']['name'];
    $FileTpmName = $_FILES['file']['tmp_name'];    
    $file_path = "files/".$file;

    $query="INSERT INTO horarios(semestre,grupo,horario) VALUES('$semestre','$grupo','$file')";
    $result = mysqli_query($conn,$query);
    if($result){
        move_uploaded_file($FileTpmName,$file_path);
        echo "Finalizado";
        header('location:upload-horarios.php');
    }
    else{
        echo "Error";
        header('location:upload-horarios.php');
    }
}
?>