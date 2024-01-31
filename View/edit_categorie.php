<div class="background-card">
   
         <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
        <form class="profile" method="post"
                action="?page=edit_categorie&categorie_id=<?= $_GET['categorie_id'] ?>" enctype="multipart/form-data">

                <a href="?page=homepage<?= $_GET['id'] ?>"><i class="fa-solid fa-circle-left"></i></a>
                
                <img src="<?= $categorie['image']; ?>" alt="Categorie Picture" class="img-card">

                <input type="text" name="name" value="<?= $categorie['name'] ?>">
                <input type="text" name="description" value="<?= $categorie['description'] ?>">
                <input type="file" name="image" accept="image/*">
                <input type="hidden" name="token" value="<?= $_SESSION['token']?>" />
                <input type="submit" name="submit" value="Mettre à jour" class="profile-submit">
            </form>
        <?php  } ?>
</div>

