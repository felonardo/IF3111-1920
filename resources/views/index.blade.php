<html>
<head>
	<title>Halaman utama</title>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>

    <div id="demo">
	<div class="row">
		<div class="container">

            <h2 class="h2">Simple Lapor</h2>

<header>
			<div class="search-box">
				<form action="" method="POST">
					<input name="search" placeholder="Cari" required="yes" type="text">
			    	<button type="submit">Cari</button>
				</form>
            </div>

                <button type="submit" onclick="addLaporan()">Buat Laporan/ Komentar</button>
        </header>

{{-- </div> --}}

<div class="recently">
<p>Laporan/Komentar terakhir</p><br>

<div class="garis">
</div>



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
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->keterangan}}</td>
							<td>{{$g->aspek}}</td>
                            {{-- <td><a class="btn btn-danger" href="/detail/{{ $g->id }}">Lihat Selengkapnya</a></td> --}}
                            <td><button type="submit" onclick="showDetail({{$g->id}})">Lihat Selengkapnya</button></td>
							{{-- <td><a class="btn btn-danger" href="/hapus/{{ $g->id }}">HAPUS</a></td> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
    </div>
</div>


<script>
function addLaporan() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "/upload", true);
  xhttp.send();
}


function showDetail(i) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "/detail/"+i, true);
  xhttp.send();
}


function deleteData(i) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "/hapus/"+i, true);
  xhttp.send();
}


</script>


</body>
</html>
