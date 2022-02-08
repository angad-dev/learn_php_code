<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
</head>
<body>
<form>
  <div class="mb-3">
  	<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    name<input type="name" class="form-control" id="name"></br>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="Reset" class="btn btn-primary">Reset</button></br></br></br></br></br>
</form>
<table>
	<tr>
		<th scope="col">sr.</th>
		<th>name</th>
		<th>email</th>
	</tr>
     <tr>
     	<th scope="row">1</th>
     	<td>angad</td>
     	<td>angad@gmail.com</td>
     </tr>

</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	$(document).ready(function()){
		load_emp_data();
	}




</script>
</body>

</html>