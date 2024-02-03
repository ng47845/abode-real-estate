<?php 

    require '../includes/dbconnect.php';

    if(isset($_POST['submit'])){
        $client_name = $_POST['client_name'];
        $client_email = $_POST['client_email'];
        $client_message = $_POST['client_message'];

        $sql = "INSERT INTO contacts(client_name,client_email,client_message) VALUE (:client_name, :client_email, :client_message)";
        $query = $pdo->prepare($sql);

        $query->bindParam('client_name',$client_name);
        $query->bindParam('client_email',$client_email);
        $query->bindParam('client_message',$client_message);

        $query->execute();

        header("Location: index.php?page=contacts");
    }

?>
<div class="mt-2">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add contact
            </div>
            <form method="post" class="p-1" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="client_name">Your name:</label>
                    <input type="text" name="client_name" id="client_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="client_email">Your email:</label>
                    <input type="email" name="client_email" id="client_email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="client_message">Your message:</label>
                    <textarea rows="5" type="text" name="client_message" id="client_message" class="form-control" required></textarea>
                </div>
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary mt-1">
            </form>
        </div>
    </div>
</div>