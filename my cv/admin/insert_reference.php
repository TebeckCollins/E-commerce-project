<?php
    include('./includes/connect.inc.php');
    if (isset($_POST['insert_reference'])) {
        $name = $_POST['name'];
        $position = $_POST['position'];
        $contact_details = $_POST['contact_details'];
        $profile_status = TRUE;


        //checking empty conditions
        if ($name =='' OR $position =='' OR $contact_details =='') {
            echo "<script>
            alert('Please fill all available fields')
            </script>";
            exit();
        }else{
            // insert query
            $insert_reference = "INSERT INTO reference (name, position, contact_details, status) VALUES ('$name','$position','$contact_details','$profile_status')";
            $result_query = mysqli_query($conn, $insert_reference);
            if ($result_query) {
                echo "<script>
                alert('Profile Updated successfully!')
                </script>";
            }
        }

    }


?>

<div class="container mt-3">
    <form action="" method="post" enctype="multipart/form-data">
        <!-- name -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" autocomplete="on" required="required">
        </div>
        <!-- position -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" id="position" class="form-control" placeholder="Enter position" autocomplete="on" required="required">
        </div>
        <!-- contact_details -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="contact_details" class="form-label">Contact details</label>
            <input type="text" name="contact_details" id="contact_details" class="form-control" placeholder="Enter contact details" autocomplete="on" required="required">
        </div>
        <!-- Submit -->
        <div class="form-outline mb-4 w-50 m-1">
            <input type="submit" name="insert_reference" class="btn btn-info mb-3 px-3" value="Insert Reference">
        </div>
    </form>
</div>