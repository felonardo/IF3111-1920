<html>
<head>
	<title>Halaman utama</title>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>

    <div id="demo">
	<div class="row">
		<div class="container">

       <header>
           <b><br>Simple Lapor</b>
        </header>


<header>
			<div class="search-box">
				<form action="/search/a" method="GET">
					<input id="search" placeholder="Cari" required="yes" type="text">
			    	<button type="submit" onclick="searchData()">Cari</button>
				</form>
            </div>

                <button onclick="addLaporan()">Buat Laporan/ Komentar</button>
        </header>

{{-- </div> --}}

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
                @endif

<br>
<br>
    <div class="tengah">
            <p>Laporan/Komentar Terakhir</p>
            </div>
<div class="konten">
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
