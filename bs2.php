<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP</title>
</head>
<body>
<h1>PHP</h1>
<p>
 We have registered your details:
</p>
<ul>
<li> CellPhone:
<strong><?php echo $_POST['cphone']; ?></strong>
</li>
<li>WorkPhone: 
<strong><?php echo $_POST['wphone']; ?></strong>
</li>
<li>PersonalEmail:
<strong><?php echo $_POST['email']; ?></strong>
</li>
<li>CompanyEmail:
<strong><?php echo $_POST['cemail']; ?></strong>
</li>
</ul>
</div>
</body>
</html>