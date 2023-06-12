<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Asisten Praktikum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 40px;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        h1 {
            color: #007bff;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }

        .mt-5 {
            margin-top: 30px;
        }

        p {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cari Asisten Praktikum</h1>
        <form action="/asisten/search" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="key">Search:</label>
                <input type="text" class="form-control" id="key" name="key">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <?php
        if (!empty($hasil)) {
            echo "<h1 class='mt-5'>Hasil Pencarian</h1>";
            echo "<p>Nama: " . $hasil['NAMA'] . "</p>";
            echo "<p>Praktikum: " . $hasil['PRAKTIKUM'] . "</p>";
            echo "<p>IPK: " . $hasil['IPK'] . "</p>";
        }
        ?>
    </div>
</body>

</html>