<?php



/* 
$queryAllCategoryProducts = "SELECT c.id, c.name, c.descriptions, c.image FROM categories";



$queryAllCategoryProducts = "SELECT p.id, p.name, p.picture, p.description, p.categorie, p.price FROM products AS p LEFT JOIN "
LEFT JOIN productors AS p ON m.productor_id = p.id




INNER JOIN productors AS p ON m.productor_id = p.id

$query = "SELECT p.id, p.title, p.content, p.date FROM post_its AS p WHERE p.user_id = :user_id ";

left join 








$queryAllStudent = "SELECT u.id AS id, u., u.lastname, u.email, u.profile_picture, u.birthday FROM users as u INNER JOIN promotions as p ON u.promotion_id = p.id WHERE role=:role AND p.id =:data_id " . $order;
$allStudents = $bdd->prepare($queryAllStudents);
$allStudents->execute(
    [
        'role' => 'student',
        'data_id' => $_GET['id'],
    ]
);
$users = $allStudents->fetchAll();
if (isset($_GET['orderBy']) && isset($_GET['sortBy'])) {
    require '../views/show_all_students.php';
} else {
    header('location: ?page=show_all_students&id=' . $_GET['id'] . '&orderBy=lastname&sortBy=desc');
    exit();
} */