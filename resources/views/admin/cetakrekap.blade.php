<!DOCTYPE html>
<html>
<head>
	<title>Rekap Tagihan Bulanan Customer</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body method="GET"> 
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Rekap Tagihan Bulanan Customer PDAM</h4>
	</center>

	<table class='table table-bordered' method="GET">
		<thead>
			<tr>
                <th>Nomor Rekening</th>
                <th>Nama Pelanggan</th>
                <th>Jumlah Tagihan</th>
                <th>Tanggal Tagihan</th>
			</tr>
		</thead>
		<tbody>
			@forelse($rekaps as $rekap)
			<tr>
				<td>{{$rekap->Rekening}}</td>
				<td>{{$rekap->Nama}}</td>
				<td>{{$rekap->Jumlah}}</td>
				<td>{{$rekap->tanggal}}</td>
			</tr>
            @empty
			@endforelse
		</tbody>
	</table>

</body>
</html>