<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .resi-container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .resi-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .resi-details {
            margin-bottom: 20px;
        }

        .resi-details label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .resi-details span {
            display: block;
            margin-bottom: 10px;
        }

        .barcode {
            text-align: center;
            margin-top: 20px;
            clear: both;
        }

        .barcode img {
            max-width: 100%;
            height: auto;
        }

        .resi-sinopsis {
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 20px; /* Menambahkan margin atas pada .resi-sinopsis */
        }
    </style>
</head>
<body>
    <div class="resi-container">
        <div class="resi-header">
            <h2>Detail Anggota</h2>
        </div>
        <div class="resi-details">
            <label>Kode:</label> <span>{{$anggota->kode}}</span><br>
            <label>Nama:</label> <span>{{$anggota->nama}}</span><br>
            <label>Jenis Kelamin:</label> <span>{{$anggota->jenis_kelamin}}</span><br>
            <label>Tempat Lahir:</label> <span>{{$anggota->tempat_lahir}}</span><br>
            <label>Tanggal Lahir:</label> <span>{{$anggota->tanggal_lahir}}</span><br>
            <label>Telepon:</label> <span>{{$anggota->telpon}}</span><br>
            <label>Alamat:</label> <span>{{$anggota->alamat}}</span><br>
            <div class="barcode">
                {!! DNS1D::getBarcodeHTML('$ ' .$anggota->kode, 'C39+') !!}
            </div>
        </div>
    </div>
</body>
</html>