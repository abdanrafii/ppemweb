<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum CRUD</title>
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

        table {
            background-color: #ffffff;
        }

        .navbar-brand {
            cursor: default;
        }

        .back-btn {
            margin-left: auto;
        }

        .vehicle-image {
            width: 100px;
            height: auto;
        }

        th,
        td {
            vertical-align: middle !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Vehicle Manager</a>
        <span class="back-btn"><a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Back</a></span>
    </nav>
    <div class="container">
        <h4 class="text-left">DATA KENDARAAN</h4>
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Merk</th>
                    <th>Model</th>
                    <th>Tahun</th>
                    <th>Nomor Polisi</th>
                    <th>Warna</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $kendaraan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kendaraan->merk }}</td>
                        <td>{{ $kendaraan->model }}</td>
                        <td>{{ $kendaraan->tahun }}</td>
                        <td>{{ $kendaraan->nomor_polisi }}</td>
                        <td>{{ $kendaraan->warna }}</td>
                        <td>
                            <img src="{{ asset($kendaraan->gambar) }}" alt="{{ $kendaraan->merk }}"
                                class="vehicle-image">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-XE4d7a/iGckkBfnDggRPK/0Zbp5BAmOgSbF80FpNRrgh9JGxrdlWcv03heG7UgCp" crossorigin="anonymous">
    </script>
</body>

</html>
