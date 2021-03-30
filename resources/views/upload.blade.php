<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Uploading</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style>
	.cont{
		 border-radius:30px;
		width:40%;
		height:50%;
		background-color:#FC4C4E;
		display:flex;
		justify-content:center;
		align-items:center;
		margin-left:30%;
		margin-top:3%;
	}
	.a2{
		border-radius:5px;

	}
	#but{
		width:100%;

	}
	h2{
		text-align:center;
	}
	label{
		font-size:20px;
	}
</style>
</head>

<body>
<h2>Dilfina's Form</h2>
<div class="cont">
<form action="upload" method="POST" enctype="multipart/form-data">
		@csrf
		<label for="Name">Name</label>
		<input class="a2" type="text" placeholder="Name" name="name"><br><br>
		<label for="Surname">Surname</label>
		<input class="a2" type="text" placeholder="Surname" name="surname"><br><br>
		<label for="Email">Email</label>
		<input class="a2" type="email" placeholder="Email" name="email"><br><br>
		<label for="Profile Photo">Profile Photo</label>
		
		<input class="a2" type="file" name="photos" multiple /><br><br>
		<input id="but" type="submit" class="btn btn-primary" value="Submit" />
	</form>
</div>
</body>
</html>