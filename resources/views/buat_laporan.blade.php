<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/buat.css">
  <title>Buat LaporanKomentar</title>
</head>

<body>
  <header>
    <div id="header">
      <h1>SIMPLE LAPOR!</h1>
    </div>
    <div class="home">
      <ul>
        <li><a href="index.blade.php">HOME</a></li>
      </ul>
    </div>
  </header>
  <div class="textarea">
    <form action="/upload/proses" method="POST" enctype="multipart/form-data" action="">
      <p>Buat Laporan/Komentar</p>
      <hr>
      <br>
      <div class="input">
        <textarea name="Laporan/Komentar" id="laporan" cols="130" rows="10" placeholder="Buat Laporan/Komentar!"></textarea>
        <br><br>
      </div>

      <select>
        <option selected="selected" disabled="disabled">Pilih Aspek Laporan/Komentar</option>
        <option value="akademik">Akademik</option>
        <option value="sarpras">Sarpras</option>
        <option value="dosen">Dosen</option>
        <option value="Infrastruktur">Infrastruktur</option>
        </optgroup>
      </select>
      <br><br>
      <div class="file">
        <input type="file" name="file">
      </div>
      <br>
      <div class="submit">
        <input type="button" value="Buat Laporan!">
      </div>

      <br><br>
      <hr>
    </form>


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