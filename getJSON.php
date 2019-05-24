<?php
$json = file_get_contents('http://papaside.com/data.php');
$obj = json_decode($json,true);
// echo "<table border='1' cellpadding='10'><thead><th>Kota</th><th>Siang</th><th>Malam</th><th>Dini Hari</th><th>Suhu</th><th>Kelembapan</th></thead>";
//  foreach ($obj as $key) {
//      echo "<tr><td>".$key["Kota"]."</td><td>".$key["siang"]."</td><td>".$key["malam"]."</td><td>".$key["dini_hari"]."</td><td>".$key["suhu"]."</td><td>".$key["Kelembapan"]."</td>";
//     //  echo $key["Kota"];
//     //  echo $key["siang"];
//     //  echo $key["malam"];
//     //  echo $key["dini_hari"];
//     //  echo $key["suhu"];
//     //  echo $key["Kelembapan"];
//  }
//  echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UAS WEB SERVICE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <h1 class="navbar-brand center" href="#">
    Cuaca Hari ini
</h1>
</nav>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Kota</th>
      <th scope="col">Siang</th>
      <th scope="col">Malam</th>
      <th scope="col">Dini Hari</th>
      <th scope="col">Suhu</th>
      <th scope="col">Kelembapan</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($obj as $key) { ?>
    <tr>
      <td><?=$key["Kota"]?></td>
      <td><?=$key["siang"]?></td>
      <td><?=$key["malam"]?></td>
      <td><?=$key["dini_hari"]?></td>
      <td><?=$key["suhu"]?></td>
      <td><?=$key["Kelembapan"]?></td>
    </tr>
      <?php } ?>
  </tbody>
</table>

    
</body>
</html>