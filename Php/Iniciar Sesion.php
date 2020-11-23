<?php 
    include("BD.php");
    session_start();

    if(isset($_POST['Correo'])){
        $Correo = $_POST['Correo'];
        $Password = $_POST['Password'];

        $sql = "SELECT * FROM Usuarios WHERE Correo = '$Correo' AND Password ='$Password'";
        $Resultado = mysqli_query($conex, $sql);

        if(mysqli_num_rows($Resultado) >=1){
            echo 1;
            while($row =$Resultado->fetch_array()){
                $Usuario = $row['Usuario'];
                
                $_SESSION['Usuario'];
            }
            
            
        }else{
            echo 0;
        }

    }
?>