<div class="background-card">

        <?php foreach ($categories as $categorie) { ?>
            <div class="card-student">

                <?php if ($categorie['image']): ?>
                    <img src="assets/images/<?= $categorie['image']; ?>" alt="Categorie Picture" class="img-card">

                <?php endif; ?>

                <div class="card-content">
                    <div class="card-end">

                        <h4>
                            <a href="?page=homepage=<?= $_GET['id'] ?>&user_id=<?= $categorie['id'] ?>">



                                <?= $categorie['name'] . "<br>" . $categorie['description'] ?>
                            </a>
                        </h4>

                        <?php if (isset($_SESSION['categorie_id'])) { ?>
                            <?php if (isset($_SESSION['admin']) || $categorie['id'] == $_SESSION['_id']) { ?>
                                <a href="?page=homepage=<?= $_GET['id'] ?>&_id=<?= $user['id'] ?>"> <i
                                        class="fa-solid fa-pencil"></i></a>
                            <?php } ?>
                        <?php } ?>
                    </div>


                    <?php if ($_SESSION['user_role'] != 'guest') { ?>
                        <p>
                            <?= $user['email'] ?>
                        </p>
                    <?php } else { ?>
                        <p> Vous n'êtes pas connecté</p>
                    <?php } ?>
                   
                </div>
            </div>
        <?php } ?>
        <?php


        if ($_SESSION['user_role'] === 'admin') { ?>
            <div id="add_student" class="card-student" onclick="window.location.href = '?page=add_student';">
                <a href="?page=add_student" class="link-add">Add Categorie
                    <div class=" container-icon">
                    <i class="fa-solid fa-plus"></i>
            </div>
            </a>
        </div>
    <?php } ?>
    </div>