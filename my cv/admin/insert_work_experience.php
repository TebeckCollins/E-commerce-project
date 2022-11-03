<?php
    include('./includes/connect.inc.php');
    if (isset($_POST['insert_work_experience'])) {
        $company_name = $_POST['company_name'];
        $position = $_POST['position'];
        $duration = $_POST['duration'];
        $profile_status = TRUE;


        //checking empty conditions
        if ($company_name =='' OR $position =='' OR $duration =='') {
            echo "<script>
            alert('Please fill all available fields')
            </script>";
            exit();
        }else{
            // insert query
            $insert_work_experience = "INSERT INTO work_experience (company_name, position, duration, status) VALUES ('$company_name','$position','$duration','$profile_status')";
            $result_query = mysqli_query($conn, $insert_work_experience);
            if ($result_query) {
                echo "<script>
                alert('Experience Added successfully!')
                </script>";
            }
        }

    }
?>

<div class="container mt-3">
    <form action="" method="post" enctype="multipart/form-data">
        <!-- company_name -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="company_name" class="form-label">Company name</label>
            <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Enter Company name" autocomplete="on" required="required">
        </div>
        <!-- position -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" id="position" class="form-control" placeholder="Enter position" autocomplete="on" required="required">
        </div>
        <!-- duration -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" placeholder="Enter duration" autocomplete="on" required="required">
        </div>
        <!-- Submit -->
        <div class="form-outline mb-4 w-50 m-1">
            <input type="submit" name="insert_work_experience" class="btn btn-info mb-3 px-3" value="Insert work experience">
        </div>
    </form>
</div>