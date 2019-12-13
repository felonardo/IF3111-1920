<html>
<head>
	<title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
<div id="demo">
        <div class="row">
		<div class="container">

			<h2 class="h2">Simple Lapor</h2>

			<div class="col-lg-8 mx-auto my-5">

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
                            <th>Keterangan</th>
                            <th>Aspek</th>
							<th>Waktu</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						{{-- @foreach($gambar as $g) --}}
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$gambar->file) }}"></td>
                            <td>{{$gambar->keterangan}}</td>
							<td>{{$gambar->aspek}}</td>
                            <td>{{$gambar->created_at}}</td>
							<td><button onclick="deleteData({{$gambar->id}})">HAPUS</button></td>
                            {{-- <td><button type="submit" onclick="showDetail({{$g->id}})">Lihat Selengkapnya</button></td> --}}
						</tr>
						{{-- @endforeach --}}
					</tbody>
				</table>
			</div>
		</div>
    </div>




</body>
</html>
