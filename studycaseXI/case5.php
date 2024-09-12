<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST" class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="" class="col-form-label">Masukan String</label>
        </div>
        <div class="col-auto">
            <input type="text" name="text" class="form-control"><br>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-secondary">Hitung</button>
        </div>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $string = isset($_POST['text']) ? $_POST['text'] : '';

    $gaSpacsi = str_replace(' ','',$string);
    $str = strlen($gaSpacsi);
    echo "Total Karakter : " . $str;
}
?>