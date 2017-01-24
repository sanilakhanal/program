<!DOCTYPE html>
<!--html form-->
<html>
<head>
	<title>Form page</title>
</head>
<body>

<H2>HTML FORMS</H2>
<div class= "main">
	<form>
		<label>First name:</label> <input type="text" name="firstname"><p></p>
		<label>Last name: </label> <input type="text" name="lastname"><p></p>
		<label>Email: </label>    <input type="email" name="email"><p></p>
		<label>Password: </label> <input type="Password" name="pwd"><P></P>
		
		<label>Gender:</label><br>
		<input type="radio" name="gender" value="male">MALE<br>
		<input type="radio" name="gender" value="female">FEMALE<br><p></p>
		Place of birth<br>
		<select>
		<option>Ktm</option>
		<option>Bhaktapur</option>
		<option>Patan</option>
		</select><p></p>
		Check te programming language you know?<br>
		<input type="checkbox" name="language" value="php">PHP<br>
		<input type="checkbox" name="language" value="java">JAVA<br>
		<input type="checkbox" name="language" value="html">HTML<br><p></p>
		Upload pic<input type="file" name="pic"><p></p>
		<input type="button" onclick="alert('Hello World!')" value="Click Me!"><P></P>

		 Select your favorite color:
  		<input type="color" name="favcolor"><p></p>

  		Add your homepage:
  		<input type="url" name="homepage"><p></p>
		<input type="Submit"  name="Submit" value="Submit"> <br>
	</form>
</div>

</body>
</html>		