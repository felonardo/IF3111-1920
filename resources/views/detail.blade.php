<html>
<head>
	<title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/lihat.css') }}" rel="stylesheet">

</head>
<body>
<div id="demo">
        <div class="row">

       <header>
           <b><br>Simple Lapor</b>
        </header>

			<div class="col-lg-8 mx-auto my-5">

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif



    <div class="isi">
        <p>Detail Laporan/Komentar</p>
        <hr>
        <p>{{$gambar->keterangan}}</p>
        <div class="detail">

        <p>Lampiran:</p>
        </div>
        <img width="150px" src="{{ url('/data_file/'.$gambar->file) }}">
        <br>
        <div class="detail">

            <p>Waktu: {{$gambar->created_at}}</p>
            <p>Aspek: {{$gambar->aspek}}</p>
            <button onclick="deleteData({{$gambar->id}})">Hapus Laporan/Komentar &#9746;</button>
            {{-- <p class="tombol">Hapus Laporan/Komentar &#9746;</p> --}}


        </div>

        <hr>
    </div>
			</div>
		</div>
    </div>




</body>
</html>
