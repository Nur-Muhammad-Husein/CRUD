<!DOCTYPE html>
<html>
	<head>
		<title>Add - CRUD</title>
	</head>
	
	<body>
		<form method="POST" action="{{ url('store') }}">
		@csrf
		Nama: 
		<input type="text" name="nama" required> </br>
		Deskripsi:
		<input type="textarea" name="deskripsi" required> </br>
		<button type="submit">Tambah</button>
		</form>
	</body>
</html>