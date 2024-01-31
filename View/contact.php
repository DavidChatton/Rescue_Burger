<form method="post" enctype="multipart/form-data">
    <h2 class="title-contact">Contact</h2>
    <p>Laissez nous un message et nous vons répondrons rapidement.</p>
    Sujet : <input type="text" name="title" required><br>
    Votre message : <input type="text" name="content" required><br>
    
    <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
    <input type="submit" value="Envoyer">
</form>
