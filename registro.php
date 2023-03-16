<?php 
$username = $_POST['username'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];

$con = mysqli_connect("basedatos:3306","root","123","usuarios_db");
$query1 = "insert into usuarios values('$username', '$nombre','$correo','$contra')";

if($con){
    $result = mysqli_query($con, $query1);
    if($result){
        echo'<script type="text/javascript">
        alert("Registro Correcto");
        window.location.href="index.html";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("Algo salio mal :/");
        window.location.href="registro.html";
        </script>';
    }
}else{
    echo "no conectado bro..";
}

?>
