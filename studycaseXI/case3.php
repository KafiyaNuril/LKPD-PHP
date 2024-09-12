<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="number1">Angka 1</label>
        <input type="number" name="angka1"><br><br>
        
        <label for="number2">Angka 2</label>
        <input type="number" name="angka2"><br>

        <select name="operasi">
            <option value="tambah">Tambah</option>
            <option value="kurang">pengurangan</option>
            <option value="kali">perkalian</option>
            <option value="tambah">Tambah</option>
        </select>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
<?php
$hasil = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = isset ($_POST['angka1']) ? $_POST['angka1'] : 0;
    $angka2 = isset ($_POST['angka2']) ? $_POST['angka2'] : 0;
    $operasi = isset ($_POST['operasi']) ? $_POST['operasi'] :  " ";



if (is_numeric($angka1) && is_numeric($angka2)) {
    switch ($operasi) {
        case "tambah":
            $hasil = $angka1 + $angka2;
            break;
        case "kurang":
            $hasil = $angka1 - $angka2;
            break;
        case "kali":
            $hasil = $angka1 * $angka2;
            break;
        case "bagi":
            $hasil = $angka1 / $angka2;
            break;
        default:
            $error = "error";
            break;
      } 
    echo $hasil;
} else {
    $error = "Masukkan angka yang valid.";
}
}
?>