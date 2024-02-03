<?php

    require '../includes/dbconnect.php';
    if ($_SESSION['permission'] == 1) {
    if(isset($_POST['submit'])){
        $category = $_POST['category'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $residence_type = $_POST['residence_type'];
        $year = $_POST['year'];
        $price = $_POST['price'];
        $lot_size = $_POST['lot_size'];
        $image_file = time() . $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];

        move_uploaded_file($temp, "uploads/".$image_file);

        $sql = "INSERT INTO posts(category,location,description,residence_type,year,price,lot_size,image) VALUE (:category,:location,:description,:residence_type,:year,:price,:lot_size,:image)";
        $query = $pdo->prepare($sql);

        $query->bindParam('category',$category);
        $query->bindParam('location',$location);
        $query->bindParam('description',$description);
        $query->bindParam('residence_type',$residence_type);
        $query->bindParam('year',$year);
        $query->bindParam('price',$price);
        $query->bindParam('lot_size',$lot_size);
        $query->bindParam('image',$image_file);

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
                    <input type="text" name="location" id="location" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select name="category" id="category" class="form-control" required>
                        <option value="" disabled selected>Select one</option>
                        <option value="residence">Residence</option>
                        <option value="apartment">Apartment</option>
                        <option value="lot">Lot</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="residence_type">Residence type:</label>
                    <select name="residence_type" id="residence_type" class="form-control" required>
                        <option value="" disabled selected>Select one</option>
                        <option value="Single Family Residence">Single Family Residence</option>
                        <option value="Investment Property">Investment Property</option>
                        <option value="Mobile Home">Mobile Home</option>
                        <option value="Condominium">Condominium</option>
                        <option value="Waterfront Property">Waterfront Property</option>
                        <option value="Unimproved Land">Unimproved Land</option>
                    </select>                
                </div>
                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="number" name="year" id="year" class="form-control" required maxlength="4">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lot_size">Lot size (acres):</label>
                    <input type="number" name="lot_size" id="lot_size" class="form-control" required step="0.01">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png">
                </div>
                <input type="submit" name="submit" value="Add Post" class="btn btn-primary mt-1">
            </form>
        </div>
    </div>
</div>

<?php } else {
    header('Location: test.php');
} ?>