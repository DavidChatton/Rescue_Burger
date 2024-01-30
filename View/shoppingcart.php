<section>
    <?php var_dump($_SESSION['cart']); ?>
    <h2>Votre Panier</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Produit</th>
                <th>Prix Unitaire</th>
                <th>Quantité</th>
                <th>Prix Total</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($productsInCartDetails as $product) { ?>
                <tr>
                <td><?= '<img src="' . $product['picture'] . '" alt="Product Image" class="img-panier">'; ?></td>

                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo number_format($product['price'], 2, ',', ' '); ?> €</td>

                    

                    <td>
                        <div class="quantity-controls">
                            <button type="button" class="quantity-minus" data-id="<?= htmlspecialchars($product['id']) ?>">-</button>

                            <input type="number" name="quantity" value="1" min="1" class="quantity-input" data-id="<?= htmlspecialchars($product['id']) ?>">

                            <button type="button" class="quantity-plus" data-id="<?= htmlspecialchars($product['id']) ?>">+</button>
                        </div>
                    </td>
                    <td> prix total</td>
                
                </tr>
            <?php }?>
        </tbody>
    </table>

   

    <p>Total: $<?php  ?></p>

    <button>Passer la commande</button>
</section>
<script>
                                document.querySelectorAll('.quantity-plus').forEach(button => {
                                    button.addEventListener('click', function() {
                                        const productId = this.getAttribute('data-id');
                                        const input = document.querySelector('.quantity-input[data-id="' + productId + '"]');
                                        input.value = parseInt(input.value) + 1;
                                    });
                                });

                                document.querySelectorAll('.quantity-minus').forEach(button => {
                                    button.addEventListener('click', function() {
                                        const productId = this.getAttribute('data-id');
                                        const input = document.querySelector('.quantity-input[data-id="' + productId + '"]');
                                        if (input.value > 1) {
                                            input.value = parseInt(input.value) - 1;
                                        }
                                    });
                                });
                        </script>
