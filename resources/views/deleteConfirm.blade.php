<!DOCTYPE html>
<html>
	<head>
		<title>Delete - CRUD</title>
	</head>
	
	<body>
		Akan menghapus: <br/>
		<form method="POST" action="{{ url('delete') }}">
		@method("DELETE")
		@csrf
		<input name="id" type="hidden" value="{{ $datum->id }}">
		Nama: 
		{{ $datum->nama }}</br>
		Deskripsi: 
		{{ $datum->deskripsi }} </br>
		<button type="submit">Hapus</button>
		</form>
	</body>
</html>