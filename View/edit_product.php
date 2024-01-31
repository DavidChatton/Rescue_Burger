<div class="background-card">
   
         <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
        <form class="profile" method="post"
                action="?page=edit_product&product_id=<?= $_GET['product_id'] ?>=" enctype="multipart/form-data">
    
                <a href="?page=homepage<?= $_GET['id'] ?>"><i class="fa-solid fa-circle-left"></i></a>
                
                <img src="<?= $product['picture']; ?>" alt="Product Picture" class="img-card">

                
                <input type="text" name="name" value="<?= $product['name'] ?>">
                <input type="text" name="description" value="<?= $product['description'] ?>">
                <input type="number" name="price" value="<?= $product['price'] ?>">
                <input type="file" name="picture" accept="image/*">
                <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
                <input type="submit" name="submit" value="Mettre à jour" class="profile-submit">
            </form>
        <?php  } ?>
</div>

