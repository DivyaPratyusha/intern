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
<li>First Name:
<strong><?php echo $_POST['cname']; ?></strong>
</li>
<li>Last Name:
<strong><?php echo $_POST['name']; ?></strong>
</li>
<li>Age:
<strong><?php echo $_POST['age']; ?></strong>
</li>
<li>Address:
<strong><?php echo $_POST['address']; ?></strong>
</li>
<li>Email:
<strong><?php echo $_POST['email']; ?></strong>
</li>
<li>Gender:
<strong><?php echo $_POST['gender']; ?></strong>
</li>
<li>Education:
<strong><?php echo $_POST['education']; ?></strong>
</li>
<li>City:
<strong><?php echo $_POST['city']; ?></strong>
</li>
</ul>
</body>
</html>