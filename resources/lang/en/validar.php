<?php
$email = $_POST["correo"];
$clave = $_POST["pass"];

if($email == "bazarroxana@gmail.com" && $clave == "1234"){
    echo "<table aling=center>
    <td>Bienvenido al sitio</td>
    </table>";
    header("Location: menu.blade.php");
}
else{
    echo "<h1>Usuario o clave no validos</h1>";
}
?>
