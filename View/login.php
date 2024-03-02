<div class="container">
    <form action="?page=login" method="post">
        <h3>Connexion</h3>
        <p> Entrez votre email : </p>
        <div class="input-group">
            <i class="fas fa-envelope input-icon"></i>
            <input type="email" name="email" autofocus placeholder="Email" id="username" required>
        </div>
        <p>Mot de passe :</p>
        <div class="input-group-password">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" placeholder="Mot de passe" name="password" id="password" onblur="checkPassword()">
            <span class="toggle-password" onclick="togglePasswordVisibility()">
                <i class="fas fa-eye input-icon-eye"></i>
            </span>
        </div> 
        <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
        <button type="submit" value="login" class="btn-login">Se connecter</button>
        <div class="register-footer">
        Pas de compte ? <a href="?page=register">Inscrivez-vous</a>
    </div>
    </form>
</div>
