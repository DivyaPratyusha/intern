<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP</title>
</head>
<body>
<h1>PHP</h1>
<form action="formPHP.php" method="post">
<p>
First Name:
<br>
<input type="text" name="cname" required />
<br />
Last Name:
<br>
<input type="text" name="name" required/>
<br />
 Age:
 <br>
    <input type="text" name="age" size="5" maxlength="2">
    <br><br>
Address:
<br>
<textarea name="address" rows="5" cols="20" ></textarea>
<br />
Email:
<br>
<input type="email" name="email" required/>
<br/>
<br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
Education:
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
City:
     <br>          
                 <select name="city">
   				 <option value="vizag">Vizag</option>
    			 <option value="Bnaglore">Banglore</option>
    			 <option value="Mumbai">Mumbai</option>
    			 <option value="Delhi">Delhi</option>
  				 </select>
                  <br><br>
<input type="submit" value="Submit" />
</p>
</form>
</body>
</html>