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
<li> Name:
<strong><?php echo $_POST['namee']; ?></strong>
</li>
<li>Address:
<strong><?php echo $_POST['address']; ?></strong>
</li>
<li>Address2:
<strong><?php echo $_POST['addresss']; ?></strong>
</li>
<li>City:
<strong><?php echo $_POST['city']; ?></strong>
</li>
</ul>
<a target="right" href="random.html">ok</a>
</body>
</html>