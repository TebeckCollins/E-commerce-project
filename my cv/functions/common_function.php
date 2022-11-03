<?php

include('./includes/connect.inc.php');

//getting products

//getting all cv details function
function getAllInfo(){
  global $conn;
      if(isset($_GET['cv'])){
        $select_query = "select * FROM personal_details";
        $result_query = mysqli_query($conn,$select_query);

        while($row = mysqli_fetch_assoc($result_query)){
        $surname = $row['surname'];
        $first_name = $row['first_name'];
        $profile_image = $row['profile_image'];
        $date_of_birth = $row['date_of_birth'];
        $marital_status = $row['marital_status'];
        $nationality = $row['nationality'];
        $home_language = $row['home_language'];
        $other_language = $row['other_language'];
        $id_number = $row['id_number'];
        $health = $row['health'];
        $license = $row['license'];
        $address = $row['address'];
        $contact_details = $row['contact_details'];
        $email = $row['email'];
        $personal_profile = $row['personal_profile'];
        $acedemic_qualification = $row['acedemic_qualification'];
        $skills_and_competence = $row['skills_and_competence'];
        $employment_duties = $row['employment_duties'];
        $key_skills = $row['skills'];
        $interest = $row['interest'];
        echo "<div class='row'>
        <div class='col-md-12'>
            <u><h4 class='text-secondary mb-5'>Personal Details</h4></u>
        </div>
        <div class='col-md-6'>
            <p>Surname: $surname</p>
            <p>First Name: $first_name</p>
            <p>Date of Birth: $date_of_birth</p>
            <p>Marital Status: $marital_status</p>
            <p>Nationality: $nationality</p>
            <p>Home language: $home_language</p>
            <p>Other language: $other_language</p>
            <p>ID Number: $id_number</p>
            <p>Health: $health</p>
            <p>License: $license</p>
            <p>Address: $address</p>
            <p>Contact Details: $contact_details</p>
            <p>Email: $email</p><br>
            <u><h4 class='text-secondary mb-5'>Personal Profile</h4></u>
            <p>$personal_profile</p><br>
            <u><h4 class='text-secondary mb-5'>Academic Qualification(s)</h4></u>
            <p>$acedemic_qualification</p><br>
            <u><h4 class='text-secondary mb-5'>Skills and competence</h4></u>
            <p>$skills_and_competence</p><br>
            <u><h4 class='text-secondary mb-5'>Employment duties</h4></u>
            <p>$employment_duties</p><br>
            <u><h4 class='text-secondary mb-5'>Key Skills</h4></u>
            <p>$key_skills</p><br>
            <u><h4 class='text-secondary mb-5' text-decoration-underline>Interest</h4></u>
            <p>$interest</p><br>
            </div>
            <div class='col-md-6'>
            <img src='./admin/image/$profile_image' class='card-img-top' alt='$surname'>
            </div>
    </div>";

        }
      }
  }
  function reference(){
        global $conn;
        if(isset($_GET['cv'])){
          $select_query = "select * FROM reference";
          $result_query = mysqli_query($conn,$select_query);

          while($row = mysqli_fetch_assoc($result_query)){
          $id = $row['id'];
          $name = $row['name'];
          $position = $row['position'];
          $contact_details = $row['contact_details'];

          echo "<h6>Reference($id)</h6>
                <ul>
                <li>Names: $name</li>
                <li>Position: $position</li>
                <li>Contact details: $contact_details</li>
            </ul>
          </div>";
          }
        }
  }
  function work_experience(){
        global $conn;
        if(isset($_GET['cv'])){
          $select_query = "select * FROM work_experience";
          $result_query = mysqli_query($conn,$select_query);

          while($row = mysqli_fetch_assoc($result_query)){
          $id = $row['id'];
          $company_name = $row['company_name'];
          $position = $row['position'];
          $duration = $row['duration'];

          echo "<h6>Company($id)</h6>
          <ul>
              <li>Company name: $company_name</li>
              <li>Position: $position</li>
              <li>Duration: $duration</li>
          </ul>
          </div>";
          }
        }
  }

