<?php
require_once __DIR__ . '/../Models/User.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->getAll();
        include __DIR__ . '/../Views/users/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $file = $_FILES['photo'];

            $uploadDir = __DIR__ . '/../../public/uploads/';
            $fileName = time() . '_' . basename($file['name']);
            $targetPath = $uploadDir . $fileName;

            $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            if (!in_array($file['type'], $allowedTypes)) {
                die("Format foto tidak valid!");
            }
            
            move_uploaded_file($file['tmp_name'], $targetPath);

            $this->model->create($name, $email, $fileName);
            header("Location: index.php");
        } else {
            include __DIR__ . '/../Views/users/create.php';
        }
    }

    public function update() {
        $id = $_GET['id'];
        $user = $this->model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $photo = $user['photo'];

            if (!empty($_FILES['photo']['name'])) {
                $file = $_FILES['photo'];
                $uploadDir = __DIR__ . '/../../public/uploads/';
                $fileName = time() . '_' . basename($file['name']);
                $targetPath = $uploadDir . $fileName;
                move_uploaded_file($file['tmp_name'], $targetPath);
                $photo = $fileName;
            }

            $this->model->update($id, $name, $email, $photo);
            header("Location: index.php");
        } else {
            include __DIR__ . '/../Views/users/edit.php';
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header("Location: index.php");
    }

    public function detail() {
        $id = $_GET['id'];
        $user = $this->model->getById($id);
        include __DIR__ . '/../Views/users/detail.php';
    }

}
