<body>
    <div class="delete-section">
        <h1>Confirmation de suppression</h1>
        <p>Êtes-vous sûr de vouloir supprimer cette catégorie?</p>
    </div>
    <form method="post" class="btn-delete-categorie">
        <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
        <input type="submit"  value="Confirmer la suppression">
    </form>
</body>