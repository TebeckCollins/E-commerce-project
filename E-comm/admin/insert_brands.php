<?php

    include('./includes/connect.inc.php');

    if (isset($_POST['insert_brands'])) {
        $brand_title = $_POST['brand_title'];
        
        // select data from database
        $select_query = "SELECT * FROM brands where brand_title = '$brand_title';";
        $select_result = mysqli_query($conn, $select_query);
        $number = mysqli_num_rows($select_result);
        if ($number > 0) {
            echo "<script>alert('Failed to add Brand. Brand already exist!')</script>";
        } else{
            $insert_query = "insert into brands (brand_title) values ('$brand_title');";
            
            $insect_result = mysqli_query($conn, $insert_query);
            if ($insect_result) {
                echo "<script>alert('Successfully added this Brand')</script>";
            }
        }
    }
?>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text  bg-dark text-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Enter Brand" aria-label="Brand" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
<!--        <input type="submit"  name="insert_cat" value="Enter Category"> -->
    <button type="submit" class="btn btn-dark p-2 my-2 border-0" name="insert_brands">Enter Brand</button>
    </div>
</form>