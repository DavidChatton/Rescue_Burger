
<form method="post" enctype="multipart/form-data">
    <h3>Inscription</h3>

    <p>Prénom :</p>
    <div class="input-group">
        <i class="fas fa-user input-icon"></i>
        <input type="text" id="name" name="firstname" placeholder="Prénom" required>
    </div>

    <p>Nom :</p>
    <div class="input-group">
        <i class="fas fa-user input-icon"></i>
        <input type="text" id="name" name="lastname" placeholder="Nom" required>
    </div>

    <p>Email :</p>
    <div class="input-group">
        <i class="fas fa-envelope input-icon"></i>
        <input type="email" name="email" placeholder="Email" required>
    </div>

    <p>Mot de passe :</p>
    <div class="input-group-password">
        <i class="fas fa-lock input-icon"></i>
        <input type="password" placeholder="Mot de passe" name="password" id="password" onblur="checkPassword()">
        <span class="toggle-password" onclick="togglePasswordVisibility()">
            <i class="fas fa-eye input-icon-eye"></i>
        </span>
    </div> 
    <p id="passwordMessage" class="error-password">Votre mot de passe doit contenir au moins 14 caractères</p>
    <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
    <input type="submit" class="btn-create-account" value="Créer un Compte">
    <div class="register-footer">
        Vous avez déjà un compte ? <a href="?page=login">Connectez-vous</a>
    </div>
</form>
