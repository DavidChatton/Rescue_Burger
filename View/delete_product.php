<body>
    <div class="delete-section">
        <h1>Confirmation de suppression</h1>
        <p>Êtes-vous sûr de vouloir supprimer ce produit?</p>
    </div>
    <form method="post" action="?page=delete_product" class="btn-delete-categorie">
        <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
        <input type="submit"  value="Confirmer la suppression">
    </form>
</body>
