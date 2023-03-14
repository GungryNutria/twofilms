<?php
include "src/models/SessionModel.php";
$sesion = new SessionesModel();

if ($sesion->getSession() == "") {
    echo "Si hay session";
} else {
?>
    <section class="container_login">
        <div class="container-form">
            <form action="src/controllers/ControllerLogin.php" method="post" class="form">
                <legend>TWO FILM</legend>
                <div class="secciones"><input type="email" required name="email" id="email" placeholder="Email"></div>
                <div class="secciones">
                    <input type="password" name="password" id="password" required placeholder="Password">
                    <img id="ojo" onclick="verOcultarPassword()" src="src/assets/eye-close-svgrepo-com.svg" alt="Ojo">
                </div>
                <a id="forgetPassword" href="#">Forget Password</a>
                <button>Log In</button>
            </form>
        </div>
    </section>
<?php
}
?>