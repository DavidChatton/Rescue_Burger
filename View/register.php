
<form method="post" enctype="multipart/form-data">
    <h3>Inscription</h3>
    Prénom: <input type="text" name="firstname" required><br>
    Nom: <input type="text" name="lastname" required><br>
    Email: <input type="email" name="email" required><br>
    Mot de passe: <input type="password" name="password" required><br>
    
    <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
    <input type="submit" value="Créer un Compte">
</form>
