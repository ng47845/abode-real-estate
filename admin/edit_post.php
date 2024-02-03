<?php

require '../includes/dbconnect.php';
if($_SESSION['permission']==1){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $sql = 'SELECT * FROM posts WHERE post_id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $post = $query->fetch();

if(isset($_POST['submit'])){
    $category = $_POST['category'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $residence_type = $_POST['residence_type'];
        $year = $_POST['year'];
        $price = $_POST['price'];
        $lot_size = $_POST['lot_size'];
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            // New file uploaded
            $image_file = time() . $_FILES['image']['name'];
            $temp = $_FILES['image']['tmp_name'];
            move_uploaded_file($temp, "uploads/" . $image_file);
        } else {
            // No new file uploaded, use the existing image filename
            $image_file = $post['image'];
        }

    move_uploaded_file($temp, "uploads/".$image_file);

    $sql = "UPDATE posts SET category = :category, location = :location, description = :description, residence_type = :residence_type, year = :year, price = :price, lot_size = :lot_size, image= :image WHERE post_id = :id";
    $query = $pdo->prepare($sql);

    $query->bindParam('category',$category);
        $query->bindParam('location',$location);
        $query->bindParam('description',$description);
        $query->bindParam('residence_type',$residence_type);
        $query->bindParam('year',$year);
        $query->bindParam('price',$price);
        $query->bindParam('lot_size',$lot_size);
        $query->bindParam('image',$image_file);
    $query->bindParam('id',$id);

    $query->execute();

    header("Location: index.php?page=posts");
}

?>
<div class="mt-2">
<div class="container">
    <div class="card" style="width: 500px; margin: 0 auto">
        <div class="card-header">
            Add post
        </div>
        <form method="post" class="p-1" enctype="multipart/form-data">
        <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location" class="form-control" value="<?php echo $post['location']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select name="category" id="category" class="form-control" required>
                        <option value="" disabled>Select one</option>
                        <option value="residence" <?php echo ($post['category'] === 'residence') ? 'selected' : ''; ?>>Residence</option>
                        <option value="apartment" <?php echo ($post['category'] === 'apartment') ? 'selected' : ''; ?>>Apartment</option>
                        <option value="lot" <?php echo ($post['category'] === 'lot') ? 'selected' : ''; ?>>Lot</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="residence_type">Residence type:</label>
                    <select name="residence_type" id="residence_type" class="form-control" required>
                        <option value="" disabled>Select one</option>
                        <option value="Single Family Residence" <?php echo ($post['residence_type'] === 'Single Family Residence') ? 'selected' : ''; ?>>Single Family Residence</option>
                        <option value="Investment Property" <?php echo ($post['residence_type'] === 'Investment Property') ? 'selected' : ''; ?>>Investment Property</option>
                        <option value="Mobile Home" <?php echo ($post['residence_type'] === 'Mobile Home') ? 'selected' : ''; ?>>Mobile Home</option>
                        <option value="Condominium" <?php echo ($post['residence_type'] === 'Condominium') ? 'selected' : ''; ?>>Condominium</option>
                        <option value="Waterfront Property" <?php echo ($post['residence_type'] === 'Waterfront Property') ? 'selected' : ''; ?>>Waterfront Property</option>
                        <option value="Unimproved Land" <?php echo ($post['residence_type'] === 'Unimproved Land') ? 'selected' : ''; ?>>Unimproved Land</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="number" name="year" id="year" class="form-control" value="<?php echo $post['year']; ?>" required maxlength="4">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price" class="form-control" value="<?php echo $post['price']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="lot_size">Lot size (acres):</label>
                    <input type="number" name="lot_size" id="lot_size" class="form-control" value="<?php echo $post['lot_size']; ?>" required step="0.01">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control" required><?php echo htmlspecialchars($post['description']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png">
                    
                    <!-- Hidden input to store the existing image path -->
                    <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($post['image']); ?>">

                    <?php if (!empty($post['image'])) : ?>
                        <p>Existing Image: <?php echo htmlspecialchars($post['image']); ?></p>
                        <img src="uploads/<?php echo $post['image']; ?>" height="200"><br>
                    <?php endif; ?>
                </div>

            <input type="submit" name="submit" value="Add Post" class="btn btn-primary mt-1">
        </form>
    </div>
</div>
</div>

<?php } else {
    header('Location: test.php');
} ?>