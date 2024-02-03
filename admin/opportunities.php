<?php 
    $query = $pdo->query('SELECT * FROM opportunities');
    $opportunities = $query->fetchAll();

    if($_SESSION['permission']==1){
?>

<div class="mt-2">
<div class="container">
    <!-- <a href="index.php?page=add_opportunity" class="btn btn-sm btn-primary">Add Opportunity</a> -->
    <h1>Opportunities</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <!-- no real need to edit and delete as they won't have to change, but if necessary add edit delete can be done in phpmyadmin
                <th scope="col">Edit</th>
                <th scope="col">Delete</th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opportunities as $opportunity) : ?>
                <tr>
                    <td><?php echo $opportunity['opportunity_id']; ?></td>
                    <td><?php echo $opportunity['title']; ?></td>
                    <td><?php echo $opportunity['description']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

<?php
    } else {
        header ('Location: test.php');
    }
?>