<div class="background-card">
   
         <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) {?>
        <form class="profile" method="post"
                action="?page=add_categorie" enctype="multipart/form-data">
                <a href="?page=homepage"><i class="fa-solid fa-circle-left"></i></a>
                
                <input type="text" name="name" value="" placeholder="Nom de la catégorie">
                <input type="text" name="description" placeholder="Description" value="">
                <input type="file" name="image" accept="image/*">
                <input type="submit" name="submit" value="Crée une catégorie" class="profile-submit">
                <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
        </form>
        <?php  } ?> 
</div>

