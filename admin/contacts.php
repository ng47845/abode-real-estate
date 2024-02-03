<?php 
    $query = $pdo->query('SELECT * FROM contacts');
    $contacts = $query->fetchAll();
?>

<div class="mt-2">
<div class="container">
    <a href="index.php?page=add_contact" class="btn btn-sm btn-primary">Add Contact</a>
    <h1>Contacts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Client</th>
                <th scope="col">E-mail</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) : ?>
                <tr>
                    <td><?php echo $contact['contact_id']; ?></td>
                    <td><?php echo $contact['client_name']; ?></td>
                    <td><?php echo $contact['client_email']; ?></td>
                    <td><?php echo $contact['client_message']; ?></td>
                    <td><?php echo $contact['date_add']; ?></td>
                    <td><a href="index.php?page=delete_contact&id=<?php echo $contact['contact_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

