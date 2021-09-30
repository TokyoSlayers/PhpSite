<?php $title = 'Mon blog'; $director = '../'; $nav = '';
ob_start(); 
require('../controller/connect.php');
    login();
    register();
?>
<h1 id="connect">Se Connecter !</h1>

<div id="connector">

    <form class="form" action="" method="post">
        <h2 class="login-title">S'enregister</h2>
        <input type="text" class="login-input" name="rusername" placeholder="Username"/>
        <input type="password" class="login-input" name="rpassword" placeholder="Password">
        <input type="password" class="login-input" name="rconfirm_password" placeholder="confirm password">
        <input type="submit" name="submit" value="Register" class="login-button">
    </form>

    <form class="form" method="post" name="login">
        <h2 class="login-title">Se connecter</h2>
        <input type="text" class="login-input" name="lusername" placeholder="Username"/>
        <input type="password" class="login-input" name="lpassword" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
    </form>
</div>
  
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
