<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Coroanalyst</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="margin: 0px;padding: 80px;background: rgb(241, 247, 252);border-style: none;">
    <section class="register-photo" style="padding: 0px;margin: 0px;background: rgb(241, 247, 252);color: rgb(241, 247, 252);">
        <div class="form-container">
            <div id="log-in" class="image-holder"></div>
            <form method="POST" action="server/login.php">
                <h2 class="text-left">Ingresar a cuenta.</h2>
                <?php 
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput"){
                            echo "<p class='Error'>*Porfavor llene todos los campos</p>";
                        } else if ($_GET["error"] == "wronglogin"){
                            echo "<p class='Error'>*Correo o contrasena incorrectos</p>";
                        } else if ($_GET["error"] == "stmtfailed"){
                            echo "<p class='Error'>*Algo salio mal, porfavor intente mas tarde</p>";
                        } else if ($_GET["error"] == "tiempofuera"){
                            echo "<p class='Error'>*Favor de iniciar sesion de nuevo</p>";
                        }
                    }
                ?>
                <div class="form-group"><input class="form-control" type="text" name="Correo" placeholder="Correo"></div>
                <div class="form-group"><input class="form-control" type="password" name="Contraseña" placeholder="Contraseña"></div>
                <div class="form-group"><a class="text-right text-primary already" href="#">Olvide mi contraseña</a></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Log in</button>
                    <div class="form-check"><label class="form-check-label d-inline"><input class="form-check-input" type="checkbox" name="Recordar" value="Recuerdame">Recuerdame&nbsp;</label></div>
                </div><a class="text-primary already" href="signin.php">No tienes una cuenta? Haz Sign in aquí.</a>
            </form>
        </div>
        
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>