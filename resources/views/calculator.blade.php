<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<body>
    <form action="/proses-hitung" method="post">

        {{ csrf_field() }}

        <label for="x">Nilai 1</label>
        <input type="number" name="x" id="">
        <label for="y">Nilai 2</label>
        <input type="number" name="y" id="">
        <input type="submit" value="Hitung">

    </form>
</body>

</html>