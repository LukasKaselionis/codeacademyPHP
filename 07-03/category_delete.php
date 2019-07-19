<?php

declare(strict_types = 1);

require_once (__DIR__.'/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_category'])) {
    $categoryId = $_POST['deleteId'];
    try {
        $sql = 'DELETE FROM categories WHERE id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
    } catch (Exception $exception) {
        echo $exception->getMessage();
        exit();
    }
    header('Location: category.php');
}