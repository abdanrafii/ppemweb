<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum CRUD - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .btn-primary {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Praktikum CRUD</a>
    </nav>
    <div class="container">
        <h1>Welcome to Praktikum CRUD</h1>
        <p>This is a simple CRUD application for managing vehicle data.</p>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Manage Vehicles</a>
    </div>
</body>

</html>
