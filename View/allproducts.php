            <div class="background-card">
    <?php foreach ($products as $product) { ?>
        <div class="card">
            <?php if ($product['picture']) : ?>
                <img src="<?= $product['picture']; ?>" alt="Product Picture" class="img-card">
            <?php endif; ?>

            <div class="card-content">
                <div>
                    <h2 id="productName"><?= $product['name']?></h2>
                    
                    <a href="?page=delete_product">
                        <i class="fa-solid fa-trash"></i>
                    </a>




                    <?= $product['description']?>

                    <h4>Composition</h4>
                    <?= $product['product_ingredient_id']?>

                    <div class="card-end">
                    <input type="number" id="quantity<?= $product['id'] ?>" value="1" min="1" max="10">
                        <span id="productPrice" class="product-price"><?= number_format($product['price'], 0, '', ' ') ?>&nbsp;€</span>
                        
                        <button onclick="addToCart(event,<?= $product['id'] ?>)" class="btn-product id">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
        <div class="card">
            <a href="?page=add_product">
                <h2>Ajouter un produit</h2>
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
    <?php } ?>
</div>


   



