<html>
<head>
	<title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/buat.css') }}" rel="stylesheet">

</head>
<body>
		<div class="container">

    <header
			<h1><br>Simple Lapor</h1>
    </header>
			<div class="col-lg-8 mx-auto my-5">

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
                @endif

                <div class="tengah">
        <p>Buat Laporan/Komentar</p>
        <hr>
        <br>

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
				{{-- <form action="prosesUpload()" method="POST" enctype="multipart/form-data"> --}}
					{{ csrf_field() }}


					<div class="input">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan" cols="132" rows="10" placeholder="Buat Laporan/Komentar!"></textarea>
                    <br>
                    </div>


						<b>Aspek</b>
    <select name="aspek">
  <option value="Dosen">Dosen</option>
  <option value="Staff">Staff</option>
  <option value="Mahasiswa">Mahasiswa</option>
  <option value="Infrastruktur">Infrastruktur</option>
  <option value="Pengajaran">Pengajaran</option>
</select>
<br>
<br>

					<div class="file">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
                    </div>

                    {{-- <div class="dropdown"> --}}
  {{-- <button class="dropbtn">Aspek ></i></button> --}}
  {{-- <div class="dropdown-content"> --}}
{{-- </div> --}}
<br>
<br>
<div class="submit">
					<input type="submit" value="Buat Laporan/Komentar " class="btn btn-primary">
            </div>
        	</form>

<hr>
  </div>
<footer>
        <p>Simple Lapor !, Copyright &copy; Andika Leonardo</p>
    </footer>
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
