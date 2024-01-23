<form method="post" enctype="multipart/form-data">
    <h2>Contact</h2>
    <p>Laissez nous un message et nous vons répondrons rapidement.</p>
    Titre: <input type="text" name="title" required><br>
    Contenu: <input type="text" name="content" required><br>
    <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
    <input type="submit" value="Envoyer">
</form>
