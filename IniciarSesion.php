<?php   
    session_start();
    include('Conexion.php');

    if (isset($_POST['Usuario']) && isset($_POST['Clave']) && isset($_POST['Email']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']); 
    $Clave = validate($_POST['Clave']);
    $Email = validate($_POST['Email']);

    if (empty($Usuario)) {
        header("Location: Index.php?error=El usuario es requerido");
        exit();
    }elseif (empty($Clave)) {
        header("Location: Index.php?error=La clave es requerida");
        exit();
    }elseif (empty($Email)) {
        header("Location: Index.php?error=El email es requerido");
        exit();
    }else{

        // hash
        // $Clave = md5($Clave);

        $Sql = "SELECT * FROM usuarios WHERE Usuario= '$Usuario' AND Clave='$Clave' AND Email='$Email'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $Usuario && $row['Clave'] === $Clave && $row['Email'] === $Email) {
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                $_SESSION['Id'] = $row['Id'];
                $_SESSION['Email'] = $row['Email'];
                header("Location: Inicio.php");
                exit();
            }else {
                header("Location: Index.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: Index.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location: Index.php");
            exit();
}
