<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/buat.css">
    <title>Buat Laporan/Komentar</title>
</head>

<body>
    <header>
        <div id="header">
            <h1>SIMPLE LAPOR!</h1>
        </div>
        {{-- <div class="home"><a href="index.blade.php">HOME</a> </div> --}}
    </header>
    <div class="tengah">
        <p>Buat Laporan/Komentar</p>
        <hr>
        <br>

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
        <div class="input">
            <textarea name="keterangan" id="laporan" cols="132" rows="10" placeholder="Buat Laporan/Komentar!"></textarea>
            <br><br>
        </div>
        <label>Aspek Laporan/Komentar</label>
        <select name="aspek">
            <optgroup Label="Pilih Aspek Laporan/Komentar">
  <option value="Dosen">Dosen</option>
  <option value="Staff">Staff</option>
  <option value="Mahasiswa">Mahasiswa</option>
  <option value="Infrastruktur">Infrastruktur</option>
  <option value="Pengajaran">Pengajaran</option>
            </optgroup>
        </select>
        <br><br>
        <div class="file">
            <input type="file" name="file">
        </div>
        <br><br>
        <div class="submit">
            <input type="submit" value="Buat Laporan!">
        </div>
				</form>
        <hr>

    </div>
    <footer>
        <p>Simple Lapor!, Copyright &copy; Andika Leonardo</p>
    </footer>



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
