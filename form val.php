<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: blue;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $educationErr = $addressErr = "";
$name = $email = $gender = $education = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["education"])) {
    $educationErr = "Education is required";
  } else {
    $education = test_input($_POST["education"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


?>

<h2>PHP Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: 
  <br>
  <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: 
  <br>
  <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 Education:
 <span class="error">* <?php echo $educationErr;?></span>
<br>
              <input type="checkbox" name="education"  value="High school"/>High school
              <br>
              <input type="checkbox" name="education"  value="Diploma"/>Diploma
              <br>
              <input type="checkbox" name="education"  value="Degree/Graduation"/>Degree/Graduation
              <br>
              <input type="checkbox" name="education"  value="Post Graduation"/>Post Graduation
              <br>
              <input type="checkbox" name="education"  value="PHD"/>PHD
              <br>
              <br>
  
  
  Address: 
  <span class="error">* <?php echo $addressErr;?></span>
  <br>
  <textarea name="address" rows="5" cols="40"></textarea>
 
  <br><br>
  Gender:
   <span class="error">* <?php echo $genderErr;?></span>
  <br>

  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
 
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Name :"; echo $name;
echo "<br>";
echo "Email :"; echo $email;
echo "<br>";
echo "Education :" ;echo $education;
echo "<br>";
echo "Address :";echo $address;
echo "<br>";
echo "Gender:";echo $gender;
?>

</body>
</html>