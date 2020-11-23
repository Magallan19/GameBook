<?php
    include("BD.php");
    session_start();
    

    if (isset($_POST['usuario'])) {
        $usuario = $_POST["usuario"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM Usuarios WHERE Correo = '$correo'";
        $resultado = mysqli_query($conex, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            echo 1;
        } else {
            echo 0;
            $_SESSION['Usuario']=$usuario;
        }
    
    }
?>