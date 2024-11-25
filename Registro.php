<?php
    session_start();
    include('Conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function validate($data) {
        $data = trim($data); // elimina espacios en blanco
        $data = stripslashes($data); // barras invertidas
        $data = htmlspecialchars($data); // caracteres especiales
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);
    $RepetirClave = validate($_POST['RepetirClave']);
    $Nombre_Completo = validate($_POST['Nombre_Completo']);
    $Email = validate($_POST['Email']);

    if (empty($Usuario) || empty($Clave) || empty($RepetirClave) || empty($Nombre_Completo) || empty($Email)) {
        $error = "Todos los campos son requeridos";
    } elseif ($Clave !== $RepetirClave) {
        $error = "Las claves no coinciden";
    } elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $error = "El formato del correo electrónico no es válido";
    }else {
        // verificar si el nombre de usuario ya existe
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE Usuario = ?");
        $stmt->bind_param("s", $Usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "El nombre de usuario ya está registrado";
        } else {
            // hashear la clave antes de almacenarla
            // $ClaveHasheada = password_hash($Clave, PASSWORD_DEFAULT);

            // insertar el nuevo usuario en la base de datos
            $stmt = $conexion->prepare("INSERT INTO usuarios (Usuario, Clave, Nombre_Completo, Email) VALUES (?, ?, ?,?)");
            $stmt->bind_param("ssss", $Usuario, $Clave, $Nombre_Completo, $Email);

            if ($stmt->execute()) {
                $success = "Usuario registrado exitosamente";
            } else {
                $error = "Error en el registro";
            }
        }

        $stmt->close();
    }
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="Registro.php" method="post">
        <h1>Registro</h1>
        <?php if (isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
        <?php if (isset($success)) { ?>
            <p style="color: green;"><?php echo $success; ?></p>
        <?php } ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario" required>
        <i class="fa-solid fa-at"></i>
        <label>Correo electrónico</label>
        <input type="email" name="Email" placeholder="Correo electrónico">
        <i class="fa-solid fa-font"></i>
        <label>Nombre completo</label>
        <input type="text" name="Nombre_Completo" placeholder="Nombre completo" required>
        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="Clave" placeholder="Clave" required>
        <i class="fa-solid fa-unlock"></i>
        <label>Repetir la clave</label>
        <input type="password" name="RepetirClave" placeholder="Repetir la clave" required>
        <hr>
        <button type="submit">Registrar</button>
        <a href="index.php">Iniciar sesión</a>
    </form>
</body>
</html>
