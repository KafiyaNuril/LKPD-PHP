<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bilangan Prima Checker</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="angka">Masukkan Angka:</label>
                        <input type="number" id="angka" name="angka" class="form-control" placeholder="Masukkan bilangan">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form><br>
                <?php
                    $angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
                    $hasil = "";

                    function isPrima($n) {
                        if ($n <= 1) return false;
                        for ($i = 2; $i <= sqrt($n); $i++) { 
                            if ($n % $i == 0) return false;
                        }
                        return true;
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (is_numeric($angka)) {
                            if (isPrima($angka)) {
                                $hasil = $angka . " adalah bilangan prima";
                            } else {
                                $hasil = $angka . " bukan bilangan prima";
                            } 
                        } else {
                            $hasil = "masukan angka yang valid";
                        }
                        echo "$hasil";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
