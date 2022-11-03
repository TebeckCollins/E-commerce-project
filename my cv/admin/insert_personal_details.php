<?php
    include('./includes/connect.inc.php');
    if (isset($_POST['insert_personal_details'])) {
        $surname = $_POST['surname'];
        $first_name = $_POST['first_name'];
        $date_of_birth = $_POST['date_of_birth'];
        $marital_status = $_POST['marital_status'];
        $nationality = $_POST['nationality'];
        $home_language = $_POST['home_language'];
        $other_language = $_POST['other_language'];
        $id_number = $_POST['id_number'];
        $health = $_POST['health'];
        $license = $_POST['license'];
        $address = $_POST['address'];
        $contact_details = $_POST['contact_details'];
        $email = $_POST['email'];
        $personal_profile = $_POST['personal_profile'];
        $academic_qualification = $_POST['academic_qualification'];
        $skills_and_competence = $_POST['skills_and_competence'];
        $employment_duties = $_POST['employment_duties'];
        $skills = $_POST['skills'];
        $interest = $_POST['interest'];
        $profile_status = TRUE;

        // accessing images
        $profile_image = $_FILES['profile_image']['name'];

        //accessing image temp name
        $tmp_img = $_FILES['profile_image']['tmp_name'];

        //checking empty conditions
        if ($surname =='' OR $first_name =='' OR $date_of_birth =='' OR $marital_status =='' OR $nationality =='' OR $home_language=='' OR $other_language=='' OR $profile_image=='' OR $id_number=='' OR $health=='' OR $license=='' OR $address=='' OR $contact_details=='' OR $email=='' OR $personal_profile=='' OR $academic_qualification=='' OR $skills_and_competence=='' OR $employment_duties=='' OR $interest=='') {
            echo "<script>
            alert('Please fill all available fields')
            </script>";
            exit();
        }else{
            move_uploaded_file($tmp_img,"./image/$profile_image");

            // insert query
            $insert_personal_details = "INSERT INTO personal_details(surname, first_name, profile_image, date_of_birth, marital_status, nationality, home_language, other_language, id_number, health, license, address, contact_details, email, personal_profile, acedemic_qualification, skills_and_competence, employment_duties, skills, interest, status) VALUES ('$surname','$first_name','$profile_image','$date_of_birth','$marital_status','$nationality','$home_language','$other_language','$id_number','$health','$license','$address','$contact_details','$email','$personal_profile','$academic_qualification','$skills_and_competence','$employment_duties','$skills','$interest','$profile_status')";
            $result_query = mysqli_query($conn, $insert_personal_details);
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
        <!-- Surname -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" placeholder="Enter Surname" autocomplete="on" required="required">
        </div>
        <!-- first_name -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" autocomplete="on" required="required">
        </div>
        <!-- image -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="image" class="form-label">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" class="form-control" required="required">
        </div>
        <!-- DOB -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="Date of Birth" autocomplete="on" required="required">
        </div>
        <!-- marital_status -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="marital_status" class="form-label">Marital status</label>
            <input type="text" name="marital_status" id="marital_status" class="form-control" placeholder="Enter marital_status" autocomplete="on" required="required">
        </div>
        <!-- nationality -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Enter nationality" autocomplete="on" required="required">
        </div>
        <!-- home_language -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="home_language" class="form-label">Home language</label>
            <input type="text" name="home_language" id="home_language" class="form-control" placeholder="Enter home language" autocomplete="on" required="required">
        </div>
        <!-- other_language -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="other_language" class="form-label">Other language</label>
            <input type="text" name="other_language" id="other_language" class="form-control" placeholder="Enter other language" autocomplete="on" required="required">
        </div>
        <!-- id_number -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="id_number" class="form-label">ID number</label>
            <input type="text" name="id_number" id="id_number" class="form-control" placeholder="Enter ID number" autocomplete="on" required="required">
        </div>
        <!-- health -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="health" class="form-label">Health</label>
            <input type="text" name="health" id="health" class="form-control" placeholder="Enter health Status" autocomplete="on" required="required">
        </div>
        <!-- license -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="license" class="form-label">License</label>
            <input type="text" name="license" id="license" class="form-control" placeholder="Enter license" autocomplete="on" required="required">
        </div>
        <!-- address -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" autocomplete="on" required="required">
        </div>
        <!-- contact_details -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="contact_details" class="form-label">Contact Details</label>
            <input type="text" name="contact_details" id="contact_details" class="form-control" placeholder="Enter contact details" autocomplete="on" required="required">
        </div>
        <!-- email -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" autocomplete="on" required="required">
        </div>
        <!-- personal_profile -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="personal_profile" class="form-label">Personal Profile</label>
            <input type="text" name="personal_profile" id="personal_profile" class="form-control" placeholder="Enter personal Profile" autocomplete="on" required="required">
        </div>
        <!-- academic_qualification -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="academic_qualification" class="form-label">Academic Qualifications</label>
            <input type="text" name="academic_qualification" id="academic_qualification" class="form-control" placeholder="Enter academic Qualification" autocomplete="on" required="required">
        </div>
        <!-- skills_and_competence -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="skills_and_competence" class="form-label">Skills and competence</label>
            <input type="text" name="skills_and_competence" id="skills_and_competence" class="form-control" placeholder="Enter skills and competence" autocomplete="on" required="required">
        </div>
        <!-- employment_duties -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="employment_duties" class="form-label">Employment Duties</label>
            <input type="text" name="employment_duties" id="employment_duties" class="form-control" placeholder="Enter employment duties" autocomplete="on" required="required">
        </div>
        <!-- key_skils -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="skills" class="form-label">Personal Skills</label>
            <input type="text" name="skills" id="skills" class="form-control" placeholder="Enter key Skills" autocomplete="on" required="required">
        </div>
        <!-- interest -->
        <div class="form-outline mb-4 w-50 m-1">
            <label for="interest" class="form-label">Interest</label>
            <input type="text" name="interest" id="interest" class="form-control" placeholder="Enter interest" autocomplete="on" required="required">
        </div>
        <!-- Submit -->
        <div class="form-outline mb-4 w-50 m-1">
            <input type="submit" name="insert_personal_details" class="btn btn-info mb-3 px-3" value="Insert Personal Details">
        </div>
    </form>
</div>