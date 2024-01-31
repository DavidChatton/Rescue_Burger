<div class="background-card">
   
         <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) {?>
        <form class="profile" method="post"
                action="?page=add_product" enctype="multipart/form-data">
                <a href="?page=homepage"><i class="fa-solid fa-circle-left"></i></a>
                
                <input type="text" name="name" value="" placeholder="Nom du produit">
                <input type="text" name="description" value="" placeholder="Description du produit">
                <input type="number" name="price" placeholder="Prix du produit">
                <input type="file" name="image" accept="image/*">
                <input type="number" name="categorie_id" placeholder="Id de la categorie"  >
                <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
                <input type="submit" name="submit" value="Crée un produit" class="profile-submit">
        </form>
        <?php  } ?> 
</div>

