
<div>
    <h1>Bienvenue sur Rescue Burger</h1>
    <div class="background-card">
        <?php if (isset($categories) && is_array($categories)) { ?>
            <?php foreach ($categories as $categorie) { ?>
                <div class="card">
                    <?php if ($categorie['image']) { ?>
                        <a href="?page=allproducts&categorie_id=<?= $categorie['id'] ?>">
                            <img src="<?= $categorie['image']; ?>" alt="Categorie Picture" class="img-card">
                        </a>
                    <?php } ?>
                    <div class="card-content">
                            <div class="card-end">
                                <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
                                    <div class="card-title-categorie">

                                            <h2> <?= $categorie['name'] ?> </h2>

                                            <div class="card-icones">
                                                <a href="?page=edit_categorie&categorie_id=<?= $categorie['id'] ?>">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>
                                        
                                                <a href="?page=delete_categorie&categorie_id=<?= $categorie['id'] ?>">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>  
                                            </div>      
                                        
                                <?php } ?>
                                    </div>

                                <h2> <?= $categorie['name'] ?> </h2>
                                <?= $categorie['description'] ?>

                            </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>Aucune catégorie disponible</p>
        <?php } ?>
        <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
            <div class="card-add-category">
                <div>
                    <h2>Ajouter une Catégorie</h2>
                    <div class="btn-add-category">
                        <a href="?page=add_categorie">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>