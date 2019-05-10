<?php
session_start();
//print_r($_SESSION);
require "../kernel/functions.php";
require "templates/footer.php";
?>

<body>
<div class="container"></div>
    <div class="row">
        <div class="col-6 offset-3">
            <h1>Identifiez-vous!</h1>
            <?php echo getFlash() ?>
            <form action="../controllers/login.php" method="POST">
                <div class="form-group">
                    <label for="login">Votre Login</label>
                    <input class="form-control" type="text" name="login" id="login">
                </div>
                <div class="form-group">
                    <label for="password">Votre Mot De Passe</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <input  type="submit" class="btn btn-primary" value="se connecter">
                </div>
            </form>
        </div>
    </div>

</body>
</html>