<?php 
    $query = $pdo->query('SELECT * FROM posts');
    $posts = $query->fetchAll();

    if($_SESSION['permission']==1){
?>

<div class="mt-2">
<div class="container">
    <a href="index.php?page=add_post" class="btn btn-sm btn-primary">Add Post</a>
    <h1>Portfolio</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category</th>
                <th scope="col">Residence Type</th>
                <th scope="col">Location</th>
                <th scope="col">Year</th>
                <th scope="col">Price</th>
                <th scope="col">Lot Size</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td><?php echo $post['post_id']; ?></td>
                    <td><?php echo $post['category']; ?></td>
                    <td><?php echo $post['residence_type']; ?></td>
                    <td><?php echo $post['location']; ?></td>
                    <td><?php echo $post['year']; ?></td>
                    <td><?php echo $post['price']; ?></td>
                    <td><?php echo $post['lot_size']; ?></td>
                    <td><?php echo $post['description']; ?></td>
                    <td><?php echo $post['image']; ?></td>
                    <td><a href="index.php?page=edit_post&id=<?php echo $post['post_id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="index.php?page=delete_post&id=<?php echo $post['post_id']; ?>" class="btn btn-danger">Delete</a></td>
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