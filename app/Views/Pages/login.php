<?php
if(isset($_SESSION['MessageLog'])) {
    echo $_SESSION['MessageLog'];
}
?>
<form id="form" class="container" method="POST" action="<?php echo base_url('/login/signIn'); ?>">
        <h1>Login</h1>
        <input name="username" id="username" type="text" placeholder="Identifiant">
        <input name="password" id="password" type="password" placeholder="Password">
        <button type="submit">Log in</button>
</form>