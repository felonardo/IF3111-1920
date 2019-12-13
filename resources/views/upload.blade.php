<html>
<head>
	<title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
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

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
				{{-- <form action="prosesUpload()" method="POST" enctype="multipart/form-data"> --}}
					{{ csrf_field() }}


					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
                    </div>

                    <div class="dropdown">
  {{-- <button class="dropbtn">Aspek ></i></button> --}}
  {{-- <div class="dropdown-content"> --}}
    <select name="aspek" class="dropbtn">
  <option value="Dosen">Dosen</option>
  <option value="Staff">Staff</option>
  <option value="Mahasiswa">Mahasiswa</option>
  <option value="Infrastruktur">Infrastruktur</option>
  <option value="Pengajaran">Pengajaran</option>
</select>
  {{-- </div> --}}
{{-- </div> --}}


					<input type="submit" value="Upload" class="btn btn-primary">
				</form>

				{{-- <h4 class="my-5">Data</h4> --}}
{{--
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Keterangan</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->keterangan}}</td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table> --}}
			</div>
		</div>
    </div>



<script>
function prosesUpload() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "/", true);
  xhttp.send();
}
</script>


</body>
</html>
