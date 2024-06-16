<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Kendaraan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            margin-bottom: 20px;
        }

        h4 {
            margin-bottom: 20px;
        }

        .btn-primary,
        .btn-danger,
        .btn-warning {
            margin-right: 5px;
        }

        .navbar-brand {
            cursor: default;
        }

        .back-btn {
            margin-left: auto;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Praktikum CRUD</a>
        <span class="back-btn"><a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Back</a></span>
    </nav>
    <div class="container">
        <h4 class="text-left">Input Data Kendaraan</h4>
        <form id="vehicleForm" action="{{ route('kendaraan.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Merk:</label>
                <input type="text" name="merk" id="merk" class="form-control"
                    placeholder="Masukan Merk Kendaraan" value="{{ old('merk') }}" />
                @error('merk')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Model:</label>
                <input type="text" name="model" id="model" class="form-control"
                    placeholder="Masukan Model Kendaraan" value="{{ old('model') }}" />
                @error('model')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Tahun:</label>
                <input type="text" name="tahun" id="tahun" class="form-control"
                    placeholder="Masukan Tahun Kendaraan" value="{{ old('tahun') }}" />
                @error('tahun')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Nomor Polisi:</label>
                <input type="text" name="nomor_polisi" id="nomor_polisi" class="form-control"
                    placeholder="Masukan Nomor Polisi" value="{{ old('nomor_polisi') }}" />
                @error('nomor_polisi')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Warna:</label>
                <input type="text" name="warna" id="warna" class="form-control"
                    placeholder="Masukan Warna Kendaraan" value="{{ old('warna') }}" />
                @error('warna')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-XE4d7a/iGckkBfnDggRPK/0Zbp5BAmOgSbF80FpNRrgh9JGxrdlWcv03heG7UgCp" crossorigin="anonymous">
    </script>
</body>

</html>
