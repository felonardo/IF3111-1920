<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="buat.css">
    <title>Buat Laporan/Komentar</title>
</head>

<body>
    <header>

        <div id="header">
            <h1>SIMPLE LAPOR!</h1>
        </div>


    </header>
    <div class="tengah">
        <p>Buat Laporan/Komentar</p>
        <hr>
        <br>
        <div class="input">
            <textarea name="Laporan/Komentar" id="laporan" cols="132" rows="10" placeholder="Buat Laporan/Komentar!"></textarea>
            <br><br>
        </div>
        <label>Aspek Laporan/Komentar</label>
        <select>
            <optgroup Label="Pilih Aspek Laporan/Komentar">
                <option value="akademik">Akademik</option>
                <option value="sarpras">Sarpras</option>
                <option value="dosen">Dosen</option>
            </optgroup>
        </select>
        <br><br>
        <div class="file">
            <input type="file">
        </div>
        <br><br>
        <div class="submit">
            <input type="submit" value="Buat Laporan!">
        </div>
        <hr>

    </div>
</body>

</html>