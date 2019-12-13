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
				{{-- <form action="" method="POST"> --}}
					<input id="search" placeholder="Cari" required="yes" type="text">
			    	<button type="submit" onclick="searchData()">Cari</button>
				{{-- </form> --}}
            </div>

                <button type="submit" onclick="addLaporan()">Buat Laporan/ Komentar</button>
        </header>

{{-- </div> --}}

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
                @endif


                <h4 class="my-5">Data</h4>

<div class="konten">
			<p>Laporan/Komentar Terakhir</p>
			<hr>
    @foreach($gambar as $g)
			<p>{{$g->keterangan}}</p>
			<div class="lampiran">
				Lampiran: {{$g->file}}
			</div>

			<div class="selengkapnya">
                Waktu: {{$g->created_at}}
                <a href="#" onclick="showDetail({{$g->id}})">Lihat Selengkapnya</a>
			</div>
            <hr>
    @endforeach
		</div>


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

function searchData(q) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("search").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "/search/a", true);
  xhttp.send();
}


</script>


</body>
</html>
