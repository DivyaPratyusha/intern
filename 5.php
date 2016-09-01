<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = $companynameErr = "";
$name = $email = $gender = $companyname = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "website is required";
  } else {
    $website = test_input($_POST["website"]);
  
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["companyname"])) {
    $companynameErr = "company name is required";
  } else {
    $companyname = test_input($_POST["companyname"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$companyname)) {
      $companynameErr = "Only letters allowed";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name:
  <span class="error">* <?php echo $nameErr;?></span>
  <br>
   <input type="text" name="name" value="<?php echo $name;?>">
  
  <br><br>
  E-mail:
   <span class="error">* <?php echo $emailErr;?></span> 
  <br>
  <input type="text" name="email" value="<?php echo $email;?>">
 
  <br><br>
  Website: 
   <span class="error">* <?php echo $websiteErr;?></span>
  <br>
  <input type="text" name="website" value="<?php echo $website;?>">
 
  <br><br>
 Company Name:
 <span class="error">* <?php echo $companynameErr;?></span> 
 <br>
 <input type="text" name="companyname" value="<?php echo $companyname;?>">
  
  <br><br>


  Gender:
  <span class="error">* <?php echo $genderErr;?></span>
  <br>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<br>
<?php
echo "<h6>Your Input:</h6>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $companyname;
echo "<br>";
echo $gender;
?>

</body>
</html>