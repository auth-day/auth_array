
<html>
<head>
	<style type="text/css">
	div {

background: #ccc;
padding: 5px;
padding-right: 20px;
border: solid 1px black;
float: left;
	}
	</style>
</head>
<body>

	<div align="left" border="1">
	<form action="second_page.php"  method="post">
	<pre>
	   <h3 align="center">Please log on!</h3>
	      Username: <input type="text" name="username" value="<?PHP echo $output_info["username"] ?>"><br /><br />
	      Password: <input type="text" name="password" value="<?PHP echo $output_info["password"] ?>"><br /><br />

	Male or Female: <input type="text" name="male" value="<?PHP echo  $output_info["sex"] ?>"><br /><br />
	           Age: <input type="text" name="age" value="<?PHP echo $output_info["age"] ?>"><br /><br />

                  <input type="submit" name="submit" value="Submit">

	</pre>
	</form>
</div>
</body>
</html>
