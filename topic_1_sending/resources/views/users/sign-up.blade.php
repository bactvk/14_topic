<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
@if(session('success'))
	<div  style="color: green">
		{{session('success')}}
	</div>
@endif

<form action="" method="POST">
	@csrf
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="name" required=""><br>
  <label for="lname">Email:</label><br>
  <input type="text" id="lname" name="email" required="" ><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>