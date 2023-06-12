<!DOCTYPE html>
<html>

<head>
    <title>Input Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo base_url('siswa/process_data'); ?>">
        <label>NIM:</label>
        <input type="text" name="nim" required><br><br>
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>
        <label>Status Kelulusan:</label>
        <select name="status" required>
            <option value="memuaskan">Memuaskan</option>
            <option value="sangat memuaskan">Sangat Memuaskan</option>
            <option value="dengan pujian">Dengan Pujian</option>
        </select><br><br>
        <input type="submit" value="Submit Data">
    </form>
</body>

</html>