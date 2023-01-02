<?php
include('../Backend/conexion.php');
$usuario=$_POST['usuario'];
$contra=$_POST['pass'];
session_start();

$consulta="SELECT*FROM users where user='$usuario' and contra='$contra'";
$resultado=mysqli_query($conn,$consulta);

$row=mysqli_num_rows($resultado);

if($row){
  
    header("location:upload-notice.php");

}else{
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
    <?php

    include("admin.php");

    ?>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);

?>