<?php 

$NOMBRES=$_POST['NOMBRES'];
$APELLIDOS=$_POST['APELLIDOS'];
$DIRECCION=$_POST['DIRECCION'];
$TELEFONO=$_POST['TELEFONO'];
$USUARIO=$_POST['USUARIO'];
$CLAVE=$_POST['CLAVE'];

$con = mysqli_connect("basedatos:3306","root","123","usuarios_db");
$query2 = "insert into clientes values('$NOMBRES', '$APELLIDOS','$DIRECCION','$TELEFONO','$USUARIO','$CLAVE')";

if($con){
    $result = mysqli_query($con, $query2);
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
