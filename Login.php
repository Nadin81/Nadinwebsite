<?php
$pageTitel = "Login";
require_once "includes/header.php";
require_once "includes/nav.php";
?>
<div class="login-container">
        <h1>Einloggen</h1>
        <form action="/login" method="POST">
            <label for="username">Benutzername</label>
            <input type="text" id="username" name="username" placeholder="Benutzername" required>

            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" placeholder="Passwort" required>

            <button type="submit">Einloggen</button>
        </form>
        <p class="footer-text">Noch keinen Account? <a href="/register">Registrieren</a></p>
    </div>
    <?php
require_once "includes/footer.php";
?>