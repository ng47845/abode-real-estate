<?php
require '../includes/dbconnect.php';
if ($_SESSION['permission'] == 1) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM users WHERE user_id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $user = $query->fetch();

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $permission = $_POST['permission'];

        $sql = 'UPDATE users SET name = :name, surname = :surname, email = :email, permission = :permission WHERE user_id = :id';
        $query = $pdo->prepare($sql);
        if (empty($name)) {
            $message = "name is required";
        } else {
            $query->bindParam('name', $name);
        }
        if (empty($surname)) {
            $message = "surname is required";
        } else {
            $query->bindParam('surname', $surname);
        }
        if (empty($email)) {
            $message = "email is required";
        } else {
            $query->bindParam('email', $email);
        }
        $query->bindParam('permission', $permission);
        $query->bindParam('id', $id);

        $query->execute();

        header('Location: index.php?page=users');
    }
?>
    <div class="container">
    <div class="card" style="width: 500px; margin: 0 auto">
            <div class="card-header">
                Add post
            </div>
        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $user['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" id="surname" class="form-control" value="<?php echo $user['surname'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="permission">Permission:</label>
                <input type="number" name="permission" id="permission" class="form-control" value="<?php echo $user['permission'] ?>" required min=0 max=1>
            </div>
            <br>
            <input type="submit" value="Edit User" name="submit" class="btn btn-primary">
        </form>
    </div>
    </div>

<?php } else {
    header('Location: test.php');
} ?>