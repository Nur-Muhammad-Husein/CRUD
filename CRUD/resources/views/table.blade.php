<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		</style>
	</head>
	
	<body>
		<a href="{{ url('add')}}">Tambah baris</a>
		<table>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Deskripsi</th>
			</tr>
			@foreach ($data as $row)
			<tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->nama }}</td>
				<td>{{ $row->deskripsi }}</td>
				<td>
					<a href="{{ url('deleteConfirm', [$row->id]) }}">Hapus</a> 
					<a href="{{ url('edit', [$row->id]) }}">Ubah</a>
				</td>			
			</tr>
			@endforeach
		</table>
	</body>
</html>