<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
   <h1><center>KALKULKATOR GILANG</center></h1>
<center>
    <form action="{{route('kalkulator.store')}}" method="post">
        @csrf
        Angka pertama : <input type="number" name="angka1" id=""><br>
        Angka Kedua   : <input type="number" name="angka2" id=""><br>
        <input type="submit" name="op" value="Tambah">
        <input type="submit" name="op" value="Kurang">
        <input type="submit" name="op" value="Kali">
        <input type="submit" name="op" value="Bagi">
    </form>
</center>   

<h1><center>Hasil : {{ $hasil }}</center></h1>
</body>
</html>