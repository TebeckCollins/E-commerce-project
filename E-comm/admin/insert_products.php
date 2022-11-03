<?php
    include('./includes/connect.inc.php');
    if (isset($_POST['insert_product'])) {
        $product_title = $_POST['product_title'];
        $product_description = $_POST['product_description'];
        $product_keywords = $_POST['product_keywords'];
        $product_category = $_POST['product_category'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_status = 'true';

        // accessing images
        $product_image1 = $_FILES['product_image1']['name'];
        $product_image2 = $_FILES['product_image2']['name'];
        $product_image3 = $_FILES['product_image3']['name'];

        //accessing image temp name
        $tmp_img1 = $_FILES['product_image1']['tmp_name'];
        $tmp_img2 = $_FILES['product_image2']['tmp_name'];
        $tmp_img3 = $_FILES['product_image3']['tmp_name'];

        //checking empty conditions
        if ($product_title =='' OR $product_description =='' OR $product_keywords =='' OR $product_category =='' OR $product_brand =='' OR $product_price=='' OR $product_image1=='' OR $product_image2=='' OR $product_image3=='') {
            echo "<script>
            alert('Please fill all available fields')
            </script>";
            exit();
        }else{
            move_uploaded_file($tmp_img1,"./products/$product_image1");
            move_uploaded_file($tmp_img2,"./products/$product_image2");
            move_uploaded_file($tmp_img3,"./products/$product_image3");

            // insert query
            $insert_products = "INSERT INTO products (product_title, product_description, product_keywords, category_id, brand_id, product_image1, product_image2, product_image3, product_price, date, status) values('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_brand', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')";
            $result_query = mysqli_query($conn, $insert_products);
            if ($result_query) {
                echo "<script>
                alert('Product inserted successfully!')
                </script>";
            }
        }

    }
?>
<div class="container mt-3">
    <form action="" method="post" enctype="multipart/form-data">
        <!-- Title -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
        </div>
        <!-- description -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="product_description" class="form-label">Product Description</label>
            <input type="text" name="product_description" id="description" class="form-control" placeholder="Enter Product description" autocomplete="off" required="required">
        </div>
        <!-- keywords -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="product_keywords" class="form-label">Product Keyword</label>
            <input type="text" name="product_keywords" id="keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required="required">
        </div>
        <!-- categories -->
        <div class="form-outline mb-4 w-50 m-1">
            <select name="product_category" id="" class="form-select">
                <option value="">Select a Category</option>
                <?php
                    $select_query = "SELECT * FROM categories";
                    $result_query = mysqli_query($conn, $select_query);
                    while ($row=mysqli_fetch_assoc($result_query)) {
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                ?>

            </select>
        </div>
        <!-- bRANDS -->
        <div class="form-outline mb-4 w-50 m-1">
            <select name="product_brand" id="" class="form-select">
                <option value="">Select a Brands</option>
                <?php
                    $select_query = "SELECT * FROM brands";
                    $result_query = mysqli_query($conn, $select_query);
                    while ($row=mysqli_fetch_assoc($result_query)) {
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                ?>
            </select>
        </div>
        <!-- image 1 -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="image1" class="form-label">Product image</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
        </div>
        <!-- image 2 -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="image2" class="form-label">Product image</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
        </div>
        <!-- image 3 -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="image3" class="form-label">Product image</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
        </div>
        <!-- Price -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="price" class="form-control" placeholder="Enter Product price" autocomplete="off" required="required">
        </div>
        <!-- Submit -->
        <div class="form-outline mb-4 w-50 m-1">
            <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
        </div>
    </form>
</div>