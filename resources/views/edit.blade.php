<!DOCTYPE html>
<html>
	<head>
		<title>Edit - CRUD</title>
	</head>
	
	<body>
		<form method="POST" action="{{ url('update') }}">
		@csrf
		<input name="id" type="hidden" value="{{ $datum->id }}">
		Nama: 
		<input type="text" name="nama" required value="{{ $datum->nama }}"></br>
		Deskripsi: 
		<input type="textarea" name="deskripsi" required value="{{ $datum->deskripsi }}"> </br>
		<button type="submit">Ubah</button>
		</form>
	</body>
</html>