<!DOCTYPE html>

<head>
    <title>Data Mahasiswa</title>
</head>

<form action="./prosesmhs" method="get">

    NIM : <input type="text" name="nim" required><br>
    Nama : <input type="text" name="nama" required><br>
    Status Kelulusan:
    <select name="status" id="status" required>
        <option value="MEMUASKAN">Memuaskan</option>
        <option value="KURANG MEMUASKAN">Kurang Memuaskan</option>
        <option value="BAIK">Baik</option>
    </select> <br>
    </table>

    <input type="submit" name="tambah" value="Submit Data">

</form>

</html>
